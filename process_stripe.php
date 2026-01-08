<?php
require_once 'config.php';

if (!isset($_SESSION['order_data'])) {
    header('Location: checkout.php');
    exit;
}

$order_data = $_SESSION['order_data'];

try {
    // Create Stripe payment intent
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $order_data['converted_amount'] * 100, // Convert to cents
        'currency' => strtolower($order_data['currency']),
        'metadata' => [
            'customer_name' => $order_data['name'],
            'customer_email' => $order_data['email'],
            'vin_hin' => $order_data['vin_hin']
        ]
    ]);

    // Store payment intent ID in session
    $_SESSION['stripe_payment_intent_id'] = $paymentIntent->id;

} catch (Exception $e) {
    die("Error creating payment intent: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Global Ride Report</title>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        #card-element {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: white;
        }
        
        .btn {
            background: #007bff;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #0056b3;
        }
        
        .error {
            color: #dc3545;
            margin-top: 10px;
        }
        
        .success {
            color: #28a745;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Complete Your Payment</h2>
        <p>Amount: <?php echo $order_data['currency'] . ' ' . $order_data['converted_amount']; ?></p>
        
        <form id="payment-form">
            <div class="form-group">
                <label for="card-element">Credit or Debit Card</label>
                <div id="card-element"></div>
            </div>
            
            <button class="btn" id="submit-button">Pay Now</button>
            
            <div id="payment-errors" class="error"></div>
        </form>
    </div>

    <script>
        const stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');
        const elements = stripe.elements();
        
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
        
        const form = document.getElementById('payment-form');
        const submitButton = document.getElementById('submit-button');
        const errorDiv = document.getElementById('payment-errors');
        
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            submitButton.disabled = true;
            errorDiv.textContent = '';
            
            const { error, paymentIntent } = await stripe.confirmCardPayment(
                '<?php echo $paymentIntent->client_secret; ?>',
                {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: '<?php echo $order_data["name"]; ?>',
                            email: '<?php echo $order_data["email"]; ?>'
                        }
                    }
                }
            );
            
            if (error) {
                errorDiv.textContent = error.message;
                submitButton.disabled = false;
            } else {
                // Payment successful
                window.location.href = 'success.php?payment_intent=' + paymentIntent.id;
            }
        });
    </script>
</body>
</html>
