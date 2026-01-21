<?php
namespace Model\Repository;
use Model\Entity\User;
use \PDO;
use App\Core\Database;
class AuthRepository{

    public function findByEmail($user){
      try {
        $query="SELECT * FROM  users Where email=:email";
        $stmt=Database::getconnection()->prepare($query);
        $stmt->execute([$user->getEmail()]);
        $stmt->setFetchMode(PDO::FETCH_CLASS,User::class);
        return $stmt->fetchAll();
      } catch (\Throwable $th) {
        echo $th->getMessage();
      }
    }
    // public 
}
