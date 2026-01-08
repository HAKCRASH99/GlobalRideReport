<?php
// visitor_config.php - Separate configuration for visitor tracking
// This should be in the same directory as checkout.php

$visitor_host = 'localhost';
$visitor_dbname = 'your_database_name'; // Same or different database
$visitor_username = 'your_username';
$visitor_password = 'your_password';

try {
    $visitor_pdo = new PDO(
        "mysql:host=$visitor_host;dbname=$visitor_dbname;charset=utf8mb4",
        $visitor_username,
        $visitor_password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    // Silently fail - don't interrupt main functionality
    error_log("Visitor database connection failed: " . $e->getMessage());
    $visitor_pdo = null;
}
?>