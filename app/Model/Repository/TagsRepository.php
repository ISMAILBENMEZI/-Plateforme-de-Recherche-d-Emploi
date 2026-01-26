<?php
namespace App\Model\Repository;
use App\Core\Database;
use App\Model\Entity\Tags;
use PDOException;
use PDO;
class TagsRepository
{
     private $connection;
    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }

    public function AddTags($tags)
    {
        try {
            $query = 'INSERT INTO tags(name,category_id)VALUES(:name,:category_id)';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":name", $tags->name);
            $stmt->bindValue(":category_id", $tags->category_id);

            $stmt->execute();
            $this->connection->lastInsertId();
            return $tags;


        } catch (PDOException $e) {
            echo "Failed to add a skils" . $e->getMessage();
        }
    }

      public function displayAllTags()
    {
        try {
            $query = "SELECT * FROM tags";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            $Tags = [];
            foreach ($result as $obj) {
                $tag =new Tags($obj->name,$obj->categoryId);
                $tag->setId($obj->id);
                array_push($Tags, $tag);
            }

            return $Tags;
        }
        catch(PDOException $e){
            echo "Failed to display".$e->getMessage();
        }
    }
}