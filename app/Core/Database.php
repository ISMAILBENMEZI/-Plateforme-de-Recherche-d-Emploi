<?php

namespace Database;

use PDO;
use PDOException;

class DatabaseConnection
{
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $user = 'root';
    private $db = 'CareerLink';
    private $password = '';

    private function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $erorr) {
            die("Database Connection Failed: " . $erorr->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
