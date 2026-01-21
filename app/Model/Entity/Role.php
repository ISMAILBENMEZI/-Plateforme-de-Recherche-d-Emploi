<?php
namespace Model\Entity;
class Role {
    private $id;
    private $nameRole;

    public function _construct($nameRole){
        $this->nameRole=$nameRole;
    }
    public function setId($id){
          $this->id=$id;
    }
    public function getNameRole(){
        return $this->nameRole;
    }
    public function getId(){
        return $this->id;
    }
}