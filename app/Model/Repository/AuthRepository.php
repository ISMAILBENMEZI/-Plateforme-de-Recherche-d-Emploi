<?php
namespace Model\Repository;
use Model\Entity\User;
use \PDO;
use \PDOException;
use App\Core\Database;
class AuthRepository{

    public function findByEmail($user){
      try {
        $query="SELECT * FROM  users u JOIN roles r on u.role_id=r.id Where email=:email";
        $stmt=Database::getInstance()->getconnection()->prepare($query);
        $stmt->execute([':email'=>$user->getEmail()]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (\Throwable $th) {
        echo $th->getMessage();
        return false;
      }
    }
    public function insert(User $user)
    {
        try {
            $sql = "INSERT INTO roles (name) values(:name)";
            $stmtr = Database::getInstance()->getconnection()->prepare($sql);
            $stmtr->execute([
                ":name"=>$user->getRole()->getName()
            ]);

            if(!$stmtr){
                throw new PDOException("Erreur pour insertion de user", 1);
            }
            $id= Database::getInstance()->getconnection()->lastInsertId();

            $user->getRole()->setId( $id);
            // $password=password_hash($user->getPassword());
            $query = "INSERT INTO users (name,email,password,role_id) values(:name,:email,:password,:role_id)";
            $stmtu = Database::getInstance()->getconnection()->prepare($query);
            $stmtu->execute([
                ":name"=>$user->getName(),
                ":email"=>$user->getEmail(),
                ":password"=>$user->getPassword(),
                ":role_id"=>$user->getrole()->getId()
            ]);
            return true;
            throw new PDOException("Erreur pour insertion de user", 1);    
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
 
}
