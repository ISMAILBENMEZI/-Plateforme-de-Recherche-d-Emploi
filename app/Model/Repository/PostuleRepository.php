<?php
namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Postule;
use App\Model\Entity\User;
use App\Model\Entity\Offer;
use PDOException;
use PDO;

class PostuleRepository
{
    private $connection;
    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }
    // public function AddCategory($category)
    // {
    //     try {
    //         $query = 'INSERT INTO categories(name)VALUES(:name)';
    //         $stmt = $this->connection->prepare($query);
    //         $stmt->bindValue(":name", $category->name);
    //         $stmt->execute();
    //         return $category;
    //     } catch (PDOException $e) {
    //         echo "Failed to add a skils" . $e->getMessage();
    //     }

    // }

  
    public function displayAllPostule()
    {
        try {
            $query = "SELECT * FROM users u join postule p on u.id=p.user_id join offers o on p.offer_id=o.id";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ); 
            $postules = [];
            foreach ($result as $obj) {
                $user=new User($obj->email,$obj->password);
                $user->setName($obj->name);
                $user->setId($obj->user_id);
                $offer=new Offer($obj->title,$obj->job_name,$obj->salary,$obj->location,$obj->application_deadline,$obj->user_id,$obj->skills=null);
                $offer->setId($obj->offer_id);
                $postule = new Postule($obj->letter,$obj->document);
                $postule->setId($obj->id);
                $postule->setUsert($user);
                $postule->setOffer($offer);
                array_push($postules, $postule);
            }

            return $postules;
        }
        catch(PDOException $e){
            echo "Failed to display".$e->getMessage();
        }
    }

}
$rep=new PostuleRepository();
$rep->displayAllPostule();