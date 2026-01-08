<?php
// track_visitor.php

require_once 'config.php';

class VisitorTracker {
    private $db;
    private $visitorData;
    
    public function __construct() {
        $this->db = new Database();
        $this->visitorData = $this->gatherVisitorData();
    }
    
    private function gatherVisitorData() {
        return [
            'email' => $_POST['email'] ?? $_GET['email'] ?? '',
            'identifier' => $_POST['vin'] ?? $_POST['hin'] ?? $_GET['vin'] ?? $_GET['hin'] ?? '',
            'page_type' => $this->determinePageType(),
            'identifier_type' => $this->determineIdentifierType(),
            'ip_address' => $this->getClientIP(),
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
            'referral_source' => $_SERVER['HTTP_REFERER'] ?? '',
            'current_url' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
        ];
    }
    
    private function determinePageType() {
        $current_page = basename($_SERVER['PHP_SELF']);
        
        if (strpos($current_page, 'boat') !== false || strpos($_SERVER['REQUEST_URI'], 'boat') !== false) {
            return 'boat';
        }
        return 'vehicle';
    }
    
    private function determineIdentifierType() {
        $identifier = $this->visitorData['identifier'];
        
        if (isset($_POST['hin']) || isset($_GET['hin']) || preg_match('/^[A-Z]{3}[0-9]{5}[A-Z][0-9]{3}$/i', $identifier)) {
            return 'HIN';
        } elseif (preg_match('/^[A-Z0-9]{17}$/i', $identifier)) {
            return 'VIN';
        } elseif (preg_match('/[A-Z]/i', $identifier)) {
            return 'PLATE';
        } else {
            return 'REGISTRATION';
        }
    }
    
    private function getClientIP() {
        $ip_keys = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR'
        ];
        
        foreach ($ip_keys as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip);
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }
    
    public function trackVisitor() {
        if (empty($this->visitorData['email']) || empty($this->visitorData['identifier'])) {
            return false;
        }
        
        try {
            $conn = $this->db->getConnection();
            
            // Check if visitor already exists (same email and identifier in last 24 hours)
            $stmt = $conn->prepare("
                SELECT id FROM visitors 
                WHERE email = ? 
                AND identifier = ? 
                AND created_at > DATE_SUB(NOW(), INTERVAL 1 DAY)
                LIMIT 1
            ");
            $stmt->bind_param("ss", $this->visitorData['email'], $this->visitorData['identifier']);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 0) {
                // Insert new visitor
                $stmt = $conn->prepare("
                    INSERT INTO visitors (email, identifier, identifier_type, page_type, ip_address, user_agent, referral_source) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)
                ");
                $stmt->bind_param(
                    "sssssss", 
                    $this->visitorData['email'], 
                    $this->visitorData['identifier'], 
                    $this->visitorData['identifier_type'],
                    $this->visitorData['page_type'],
                    $this->visitorData['ip_address'],
                    $this->visitorData['user_agent'],
                    $this->visitorData['referral_source']
                );
                
                if ($stmt->execute()) {
                    $visitor_id = $conn->insert_id;
                    $this->trackSession($visitor_id);
                    return $visitor_id;
                }
            } else {
                // Update existing visitor
                $row = $result->fetch_assoc();
                $visitor_id = $row['id'];
                
                $stmt = $conn->prepare("
                    UPDATE visitors 
                    SET updated_at = CURRENT_TIMESTAMP, 
                        page_type = ?, 
                        ip_address = ?,
                        user_agent = ?,
                        referral_source = ?
                    WHERE id = ?
                ");
                $stmt->bind_param(
                    "ssssi", 
                    $this->visitorData['page_type'],
                    $this->visitorData['ip_address'],
                    $this->visitorData['user_agent'],
                    $this->visitorData['referral_source'],
                    $visitor_id
                );
                $stmt->execute();
                
                $this->trackSession($visitor_id);
                return $visitor_id;
            }
            
            $stmt->close();
            return false;
            
        } catch (Exception $e) {
            error_log("Visitor tracking error: " . $e->getMessage());
            return false;
        }
    }
    
    private function trackSession($visitor_id) {
        try {
            $conn = $this->db->getConnection();
            $session_id = session_id();
            
            if (empty($session_id)) {
                session_start();
                $session_id = session_id();
            }
            
            // Check if session exists
            $stmt = $conn->prepare("SELECT session_id FROM visitor_sessions WHERE session_id = ?");
            $stmt->bind_param("s", $session_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 0) {
                // New session
                $stmt = $conn->prepare("
                    INSERT INTO visitor_sessions (session_id, visitor_id, ip_address, user_agent, landing_page) 
                    VALUES (?, ?, ?, ?, ?)
                ");
                $stmt->bind_param(
                    "sisss", 
                    $session_id,
                    $visitor_id,
                    $this->visitorData['ip_address'],
                    $this->visitorData['user_agent'],
                    $this->visitorData['current_url']
                );
            } else {
                // Update existing session (increment page views)
                $stmt = $conn->prepare("
                    UPDATE visitor_sessions 
                    SET page_views = page_views + 1,
                        exit_page = ?,
                        session_end = CURRENT_TIMESTAMP
                    WHERE session_id = ?
                ");
                $stmt->bind_param("ss", $this->visitorData['current_url'], $session_id);
            }
            
            $stmt->execute();
            $stmt->close();
            
        } catch (Exception $e) {
            error_log("Session tracking error: " . $e->getMessage());
        }
    }
    
    public function getVisitorData() {
        return $this->visitorData;
    }
}
?>