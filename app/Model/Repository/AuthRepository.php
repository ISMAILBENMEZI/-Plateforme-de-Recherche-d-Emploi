<?php

namespace Model\Repository;

use App\Model\Entity\User;
use Model\Entity\Role;
use \PDO;
use \PDOException;
use App\Core\Database;

class AuthRepository
{

    public function findByEmail($user)
    {
        try {
            $query = "SELECT 
             u.id AS user_id,
             u.name,
             u.email,
             u.password,
            u.role_id,
            r.id AS role_id,
            r.name AS role_name
            FROM users u
            JOIN roles r ON u.role_id = r.id
            WHERE u.email = :email
            ";
            $stmt = Database::getInstance()->getconnection()->prepare($query);
            $stmt->execute([':email' => $user->getEmail()]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$data) {
                return false;
            }
            $foundUser = new User($data['email'], $data['password']);
            $foundUser->setId($data['user_id']);
            $foundUser->setName($data['name']);
            $role = new Role($data['role_name']);
            $role->setId($data['role_id']);
            $foundUser->setRole($role);
            return $foundUser;
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
                ":name" => $user->getRole()->getName()
            ]);

            if (!$stmtr) {
                throw new PDOException("Erreur pour insertion de user", 1);
            }
            $id = Database::getInstance()->getconnection()->lastInsertId();

            $user->getRole()->setId($id);

            $query = "INSERT INTO users (name,email,password,role_id) values(:name,:email,:password,:role_id)";
            $stmtu = Database::getInstance()->getconnection()->prepare($query);
            $stmtu->execute([
                ":name" => $user->getName(),
                ":email" => $user->getEmail(),
                ":password" => $user->getPassword(),
                ":role_id" => $user->getrole()->getId()
            ]);
            return true;
            throw new PDOException("Erreur pour insertion de user", 1);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
