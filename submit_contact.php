<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

// Include database configuration
include_once 'config/database.php';

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Get posted data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => "All fields are required."
        ]);
        exit;
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => "Invalid email format."
        ]);
        exit;
    }
    
    try {
        // Prepare SQL query
        $query = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $db->prepare($query);
        
        // Sanitize inputs
        $name = htmlspecialchars(strip_tags($name));
        $email = htmlspecialchars(strip_tags($email));
        $message = htmlspecialchars(strip_tags($message));
        
        // Bind parameters
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":message", $message);
        
        // Execute query
        if ($stmt->execute()) {
            // Send email notification (optional)
            $to = "support@globalridereport.com";
            $subject = "New Contact Form Submission - Global Ride Report";
            $email_message = "
            <html>
            <head>
                <title>New Contact Form Submission</title>
                <style>
                    body { font-family: Arial, sans-serif; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background: #0A3D62; color: white; padding: 20px; text-align: center; }
                    .content { padding: 20px; background: #f9f9f9; }
                    .field { margin-bottom: 15px; }
                    .field-label { font-weight: bold; color: #0A3D62; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h2>New Contact Form Submission</h2>
                    </div>
                    <div class='content'>
                        <div class='field'>
                            <span class='field-label'>Name:</span> $name
                        </div>
                        <div class='field'>
                            <span class='field-label'>Email:</span> $email
                        </div>
                        <div class='field'>
                            <span class='field-label'>Message:</span><br>
                            $message
                        </div>
                        <div class='field'>
                            <span class='field-label'>Submitted:</span> " . date('Y-m-d H:i:s') . "
                        </div>
                    </div>
                </div>
            </body>
            </html>
            ";
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: no-reply@globalridereport.com" . "\r\n";
            $headers .= "Reply-To: $email" . "\r\n";
            
            // Uncomment to send email
            // mail($to, $subject, $email_message, $headers);
            
            http_response_code(201);
            echo json_encode([
                "success" => true,
                "message" => "Thank you for your message! We'll get back to you soon.",
                "data" => [
                    "name" => $name,
                    "email" => $email
                ]
            ]);
        } else {
            http_response_code(503);
            echo json_encode([
                "success" => false,
                "message" => "Unable to submit your message. Please try again."
            ]);
        }
    } catch (PDOException $exception) {
        http_response_code(500);
        echo json_encode([
            "success" => false,
            "message" => "Database error: " . $exception->getMessage()
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode([
        "success" => false,
        "message" => "Method not allowed."
    ]);
}
?>