<?php
namespace App\Model\Repository;
use App\Core\Database;
use PDO;
class CandidtRepository
{
    private $connection;
    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM categories";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function getByCategory($categoryId)
    {
        $query = "SELECT * FROM skills where category_id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
