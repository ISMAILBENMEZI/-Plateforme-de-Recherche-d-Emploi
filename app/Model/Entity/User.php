<?php
class User{
    private $id;
    private $nom;
    private $email;
    private $password;

    public function __construct(){
        $this->id;
        $this->email;
        $this->nom;
         $this->password;
    }

    public function setId(){
        $this->id;
    }
    public function setnom(){
        $this->nom;
    }

public function setemail(){
        $this->email;
    }
    public function setpassword(){
        $this->password;
    }
    public function __get($name){
        return $this->$name;
    }
}
