<?php
namespace Model\Entity;
class User {
    private $id ;
    private $name ;
    private $email ;
    private $password ;
    private $role ;

    public function __construct($email,$password){
        $this->email=$email;
        $this->password=$password;
    }
    public function setId($id){
     $this->id=$id;   
    }
    public function setName($name){
     $this->name=$name;   
    }
    public function setPassword($password){
     $this->password=$password;   
    }
    public function setRole($role){
     $this->role=$role;   
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }
  
}


