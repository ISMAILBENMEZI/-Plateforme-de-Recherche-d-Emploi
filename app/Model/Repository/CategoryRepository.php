<?php

namespace App\Model\Repository;
use App\Core\Database;
use PDO;

class CategoryRepository{
    private $connection;
    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }

    public function getAll(){
        $query = "SELECT * FROM categories";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
