<?php
namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Category;
use PDOException;
use PDO;

class AdminRepository
{
    private $connection;
    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }
    public function AddCategory($category)
    {
        try {
            $query = 'INSERT INTO categories(name)VALUES(:name)';
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(":name", $category->name);
            $stmt->execute();
            return $category;


        } catch (PDOException $e) {
            echo "Failed to add a skils" . $e->getMessage();
        }

    }

    public function AddTags($tags)
    {
        try {
            $query = 'INSERT INTO tags(name,category_id)VALUES(:name,:category_id)';
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(":name", $tags->name);
            $stmt->bindParam(":category_id", $tags->category_id);

            $stmt->execute();
            $this->connection->lastInsertId();
            return $tags;


        } catch (PDOException $e) {
            echo "Failed to add a skils" . $e->getMessage();
        }
    }
    public function displayAllCatgorys()
    {
        try {
            $query = "SELECT * FROM categories";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            $Categorys = [];
            foreach ($result as $obj) {
                $Cate = new Category($obj->name);
                $Cate->setId($obj->id);
                array_push($Categorys, $Cate);
            }

            return $Categorys;
        }
        catch(PDOException $e){
            echo "Failed to display".$e->getMessage();
        }
    }

}
