<?php
require_once 'config.php';

if (!isset($_SESSION['order_data']) || !isset($_SESSION['crypto_invoice_id'])) {
    header('Location: checkout.php');
    exit;
}

$order_data = $_SESSION['order_data'];
$invoice_id = $_SESSION['crypto_invoice_id'];
$order_id = $_SESSION['crypto_order_id'];

try {
    // Store order in database with pending status
    $stmt = $pdo->prepare("INSERT INTO orders (
        name, email, vin_hin, phone, zip_code, country, package_type, package_name,
        base_amount, final_amount, currency, exchange_rate, payment_method,
        payment_status, crypto_payment_id, crypto_order_id, ip_address
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending', ?, ?, ?)");
    
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
        $invoice_id,
        $order_id,
        $order_data['ip_address']
    ]);
    
    $order_id = $pdo->lastInsertId();
    
    // Clear session
    unset($_SESSION['order_data']);
    unset($_SESSION['crypto_invoice_id']);
    unset($_SESSION['crypto_order_id']);
    
} catch (Exception $e) {
    die("Error storing order: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Payment Processing - Global Ride Report</title>
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
        
        .processing-icon {
            font-size: 48px;
            color: #ff6b35;
            margin-bottom: 20px;
        }
        
        .order-details {
            text-align: left;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        
        .status-pending {
            color: #ff6b35;
            font-weight: bold;
        }
        
        .crypto-discount {
            color: #28a745;
            font-weight: bold;
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
        <div class="processing-icon">⏳</div>
        <h1>Crypto Payment Processing</h1>
        <p>Your crypto payment is being confirmed on the blockchain. This may take a few minutes.</p>
        
        <div class="order-details">
            <h3>Order Details</h3>
            <p><strong>Order ID:</strong> #<?php echo $order_id; ?></p>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($order_data['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($order_data['email']); ?></p>
            <p><strong>VIN/HIN:</strong> <?php echo htmlspecialchars($order_data['vin_hin']); ?></p>
            <p><strong>Package:</strong> <?php echo htmlspecialchars($order_data['package_name']); ?> (<?php echo htmlspecialchars($order_data['package_type']); ?>)</p>
            <p><strong>Amount Paid:</strong> $<?php echo $order_data['final_amount']; ?> USD <span class="crypto-discount">(10% crypto discount applied)</span></p>
            <p><strong>Status:</strong> <span class="status-pending">⏳ Waiting for blockchain confirmation</span></p>
        </div>
        
        <p>📧 You will receive a confirmation email once your payment is confirmed.</p>
        <p>📄 Your <?php echo $order_data['package_type']; ?> report will be delivered within 24-48 hours after confirmation.</p>
        
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</body>
</html>