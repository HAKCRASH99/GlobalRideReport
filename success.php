<?php
require_once 'config.php';

if (!isset($_GET['payment_intent']) || !isset($_SESSION['order_data'])) {
    header('Location: checkout.php');
    exit;
}

$payment_intent_id = $_GET['payment_intent'];
$order_data = $_SESSION['order_data'];

try {
    // Verify payment with Stripe
    $payment_intent = \Stripe\PaymentIntent::retrieve($payment_intent_id);
    
    if ($payment_intent->status === 'succeeded') {
        // Store order in database
        $stmt = $pdo->prepare("INSERT INTO orders (
            name, email, vin_hin, phone, zip_code, country, package_type, package_name,
            base_amount, final_amount, currency, exchange_rate, payment_method,
            payment_status, stripe_payment_intent_id, ip_address
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'completed', ?, ?)");
        
        $stmt->execute([
            $order_data['name'],
            $order_data['email'],
            $order_data['vin_hin'],
            $order_data['phone'],
            $order_data['zip_code'],
            $order_data['country'],
            $order_data['package_type'],
            $order_data['package_name'],
            $order_data['base_amount'],
            $order_data['final_amount'],
            $order_data['currency'],
            $order_data['exchange_rate'],
            $order_data['payment_method'],
            $payment_intent_id,
            $order_data['ip_address']
        ]);
        
        $order_id = $pdo->lastInsertId();
        
        // Clear session
        unset($_SESSION['order_data']);
        unset($_SESSION['stripe_payment_intent_id']);
        
    } else {
        throw new Exception('Payment not successful');
    }
    
} catch (Exception $e) {
    die("Error processing payment: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful - Global Ride Report</title>
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
        
        .success-icon {
            font-size: 48px;
            color: #28a745;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #28a745;
            margin-bottom: 20px;
        }
        
        .order-details {
            text-align: left;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        
        .btn {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">✓</div>
        <h1>Payment Successful!</h1>
        <p>Thank you for your order. Your vehicle report will be delivered to your email within 24-48 hours.</p>
        
        <div class="order-details">
            <h3>Order Details</h3>
            <p><strong>Order ID:</strong> #<?php echo $order_id; ?></p>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($order_data['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($order_data['email']); ?></p>
            <p><strong>VIN/HIN:</strong> <?php echo htmlspecialchars($order_data['vin_hin']); ?></p>
            <p><strong>Package:</strong> <?php echo htmlspecialchars($order_data['package_name']); ?> (<?php echo htmlspecialchars($order_data['package_type']); ?>)</p>
            <p><strong>Amount Paid:</strong> <?php echo $order_data['currency'] . ' ' . $order_data['converted_amount']; ?></p>
        </div>
        
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</body>
</html>