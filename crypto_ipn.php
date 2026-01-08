<?php
require_once 'config.php';

// Log IPN requests for debugging
file_put_contents('crypto_ipn_log.txt', date('Y-m-d H:i:s') . " - IPN Received\n", FILE_APPEND);

// Get the raw POST data
$post_data = file_get_contents('php://input');
file_put_contents('crypto_ipn_log.txt', "Raw Data: " . $post_data . "\n", FILE_APPEND);

// Get the signature from headers
$signature = $_SERVER['HTTP_X_NOWPAYMENTS_SIG'] ?? '';
file_put_contents('crypto_ipn_log.txt', "Signature: " . $signature . "\n", FILE_APPEND);

if (empty($signature)) {
    http_response_code(400);
    file_put_contents('crypto_ipn_log.txt', "ERROR: No signature found\n", FILE_APPEND);
    die('No signature');
}

// Verify the signature
$expected_signature = hash_hmac('sha512', $post_data, CRYPTO_IPN_KEY);
file_put_contents('crypto_ipn_log.txt', "Expected Signature: " . $expected_signature . "\n", FILE_APPEND);

if (!hash_equals($expected_signature, $signature)) {
    http_response_code(400);
    file_put_contents('crypto_ipn_log.txt', "ERROR: Invalid signature\n", FILE_APPEND);
    die('Invalid signature');
}

// Parse the JSON data
$data = json_decode($post_data, true);
file_put_contents('crypto_ipn_log.txt', "Parsed Data: " . json_encode($data) . "\n", FILE_APPEND);

if ($data && isset($data['payment_status'])) {
    $invoice_id = $data['invoice_id'] ?? '';
    $order_id = $data['order_id'] ?? '';
    $payment_status = $data['payment_status'];
    $pay_amount = $data['pay_amount'] ?? 0;
    $pay_currency = $data['pay_currency'] ?? '';
    
    file_put_contents('crypto_ipn_log.txt', "Processing: $order_id, Status: $payment_status\n", FILE_APPEND);
    
    // Find the order in database
    $stmt = $pdo->prepare("SELECT * FROM orders WHERE crypto_payment_id = ? OR crypto_order_id = ?");
    $stmt->execute([$invoice_id, $order_id]);
    $order = $stmt->fetch();
    
    if ($order) {
        if ($payment_status === 'finished' || $payment_status === 'confirmed') {
            // Payment successful
            $update_stmt = $pdo->prepare("UPDATE orders SET 
                payment_status = 'completed', 
                updated_at = NOW() 
                WHERE id = ?");
            $update_stmt->execute([$order['id']]);
            
            file_put_contents('crypto_ipn_log.txt', "SUCCESS: Order #{$order['id']} marked as completed\n", FILE_APPEND);
            
            // Send confirmation email
            sendOrderConfirmation($order);
            
        } elseif ($payment_status === 'failed' || $payment_status === 'expired') {
            // Payment failed
            $update_stmt = $pdo->prepare("UPDATE orders SET 
                payment_status = 'failed', 
                updated_at = NOW() 
                WHERE id = ?");
            $update_stmt->execute([$order['id']]);
            
            file_put_contents('crypto_ipn_log.txt', "FAILED: Order #{$order['id']} marked as failed\n", FILE_APPEND);
        }
    } else {
        file_put_contents('crypto_ipn_log.txt', "ERROR: Order not found for $order_id\n", FILE_APPEND);
    }
}

http_response_code(200);
echo 'OK';

function sendOrderConfirmation($order) {
    $to = $order['email'];
    $subject = "Order Confirmed - Global Ride Report";
    
    $message = "
    <html>
    <head>
        <title>Order Confirmation</title>
    </head>
    <body>
        <h2>Thank you for your order!</h2>
        <p>Your {$order['package_type']} report will be delivered within 24-48 hours.</p>
        
        <h3>Order Details:</h3>
        <p><strong>Order ID:</strong> #{$order['id']}</p>
        <p><strong>Name:</strong> {$order['name']}</p>
        <p><strong>VIN/HIN:</strong> {$order['vin_hin']}</p>
        <p><strong>Package:</strong> {$order['package_name']} ({$order['package_type']})</p>
        <p><strong>Amount Paid:</strong> \${$order['final_amount']} USD</p>
        <p><strong>Payment Method:</strong> Crypto</p>
        
        <br>
        <p>Best regards,<br>Global Ride Report Team</p>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@globalriderreport.com" . "\r\n";
    
    mail($to, $subject, $message, $headers);
}
?>