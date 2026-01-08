<?php
require_once 'config.php';

if (!isset($_SESSION['order_data'])) {
    header('Location: checkout.php');
    exit;
}

$order_data = $_SESSION['order_data'];

// Now Payments API integration
function createCryptoPayment($order_data) {
    $api_url = 'https://api.nowpayments.io/v1/invoice';
    
    // Generate unique order ID
    $order_id = 'GRR_' . time() . '_' . uniqid();
    
    $payload = [
        'price_amount' => $order_data['final_amount'],
        'price_currency' => 'usd',
        'pay_currency' => null, // Let user choose
        'ipn_callback_url' => 'https://' . $_SERVER['HTTP_HOST'] . '/crypto_ipn.php',
        'order_id' => $order_id,
        'order_description' => $order_data['package_type'] . ' Report - ' . $order_data['package_name'] . ' Package',
        'success_url' => 'https://' . $_SERVER['HTTP_HOST'] . '/crypto_success.php',
        'cancel_url' => 'https://' . $_SERVER['HTTP_HOST'] . '/checkout.php?type=' . $order_data['package_type']
    ];
    
    $headers = [
        'x-api-key: ' . CRYPTO_API_KEY,
        'Content-Type: application/json'
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($http_code !== 200) {
        throw new Exception('NowPayments API error: HTTP ' . $http_code);
    }
    
    return json_decode($response, true);
}

try {
    $crypto_payment = createCryptoPayment($order_data);
    
    if (isset($crypto_payment['id'])) {
        $_SESSION['crypto_invoice_id'] = $crypto_payment['id'];
        $_SESSION['crypto_order_id'] = $crypto_payment['order_id'];
        header('Location: ' . $crypto_payment['invoice_url']);
        exit;
    } else {
        throw new Exception('Failed to create crypto payment: ' . 
            ($crypto_payment['message'] ?? json_encode($crypto_payment)));
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Payment - Global Ride Report</title>
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .crypto-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: left;
        }
        
        .crypto-amount {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
            margin: 10px 0;
            text-align: center;
        }
        
        .discount-badge {
            background: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
            margin-left: 10px;
        }
        
        .btn {
            background: #ff6b35;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
        }
        
        .error {
            color: #dc3545;
            background: #f8d7da;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        
        .loading {
            color: #007bff;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔗 Crypto Payment</h1>
        
        <?php if (isset($error)): ?>
            <div class="error">
                <strong>Payment Error:</strong> <?php echo htmlspecialchars($error); ?>
            </div>
            <p>Please try again or use credit card payment instead.</p>
            <a href="checkout.php?type=<?php echo $order_data['package_type']; ?>" class="btn">Return to Checkout</a>
        <?php else: ?>
            <div class="crypto-info">
                <h3>Order Summary</h3>
                <p><strong>Package:</strong> <?php echo htmlspecialchars($order_data['package_name']); ?> (<?php echo htmlspecialchars($order_data['package_type']); ?>)</p>
                <p><strong>Original Price:</strong> $<?php echo $order_data['base_amount']; ?> USD</p>
                <p><strong>Discount:</strong> <span class="discount-badge">10% Crypto Discount</span></p>
                <div class="crypto-amount">Final Amount: $<?php echo $order_data['final_amount']; ?> USD</div>
            </div>
            
            <div class="loading">
                ⏳ Redirecting to secure crypto payment gateway...
            </div>
            
            <p>You'll be able to pay with 50+ cryptocurrencies including:</p>
            <p>₿ Bitcoin • Ξ Ethereum • 💰 USDT • Ł Litecoin • and more!</p>
            
            <p>If redirection doesn't work within 5 seconds:</p>
            <a href="<?php echo $crypto_payment['invoice_url']; ?>" class="btn">Click Here to Pay with Crypto</a>
        <?php endif; ?>
    </div>
    
    <?php if (!isset($error)): ?>
    <script>
        // Auto-redirect after 3 seconds
        setTimeout(function() {
            window.location.href = '<?php echo $crypto_payment['invoice_url']; ?>';
        }, 3000);
    </script>
    <?php endif; ?>
</body>
</html>