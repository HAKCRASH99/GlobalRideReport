<?php
// db_connection.php

class Database {
    private $host = "localhost";
    private $username = "u266813201_binilyaszai"; // Replace with your database username
    private $password = "123456*Jutt"; // Replace with your database password
    private $database = "u266813201_globalreport"; // Replace with your database name
    private $conn;
    
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        // Set charset to UTF-8
        $this->conn->set_charset("utf8mb4");
    }
    
    public function getConnection() {
        return $this->conn;
    }
    
    public function close() {
        $this->conn->close();
    }
}
?>