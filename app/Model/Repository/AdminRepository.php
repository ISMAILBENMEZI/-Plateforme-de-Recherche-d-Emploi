<?php
namespace App\Repository;

use App\config\Database;
use PDOException;

class AdminRepository{
    private $connection;
    public function __construct(){
        $this->connection=DataBase::getInstance()->getConnection();
    }

    public function AddSkils($user_skills){
        try{
            $query='INSERT INTO user_skills(job,skills,user_id)VALUES(:job,:skills,:user_id)';
            $stmt=$this->connection->prepare($query);
            $stmt->bindParam(":job",$user_skills->job);
            $stmt->bindParam(":skills",$user_skills->skills);
            $stmt->bindParam(":user_id",$user_skills);
            $stmt->execute();


        }
        catch(PDOException $e){
        echo "Failed to add a skils".$e->getMessage();
        }
    }

}
