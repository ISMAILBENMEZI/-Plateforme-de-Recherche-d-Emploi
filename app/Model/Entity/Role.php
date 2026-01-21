<?php
namespace Model\Entity;

class Role {
    private $id;
    private $nameRole;

    public function __construct($nameRole){
        $this->nameRole=$nameRole;
    }
    public function setId($id){
          $this->id=$id;
    }
    public function getName(){
        return $this->nameRole;
    }
    public function getId(){
        return $this->id;
    }
}