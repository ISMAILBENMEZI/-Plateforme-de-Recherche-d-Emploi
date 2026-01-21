<?php
namespace App\config;
use PDOException;
use PDO;

class Database {
    private static $instance = null;
    private $pdo;
    private $host = 'localhost';
    private $dbname = 'CareerLink';
    private $username = 'root';
    private $password = '';

    private function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(): Database {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->pdo;
    }

}
