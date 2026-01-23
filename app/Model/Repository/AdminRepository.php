<?php
namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Category;
use App\Model\Entity\Tags;

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
            $stmt->bindValue(":name", $category->name);
            $stmt->execute();
            return $category;
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

     public function AddTags($tag)
    {
        try {
            $query = 'INSERT INTO tags(name,category_id)VALUES(:name,:category_id)';
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":name", $tag->name);
            $stmt->bindValue(":category_id", $tag->categoryId);
            $stmt->execute();
            // $this->connection->lastInsertId();
            return $tag;


        } catch (PDOException $e) {
            echo "Failed to add a skils" . $e->getMessage();
        }
    }

      public function displayAllTags()
    {
        try {
            $query = "SELECT * FROM tags where category_id=:category_id";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(":category_id",$_POST["categoryId"]);
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

    public function DeletCategory($id){
        try{
        $query='DELETE FROM categories WHERE id=:id';
        $stmt=$this->connection->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        }
        catch(PDOException $e){
            echo "Failed to delete".$e->getMessage();
        }
    }

}
