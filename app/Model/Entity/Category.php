<?php
namespace App\Model\Entity;
class Category{
    private $id;
    private $name;
    public function __construct($name,$id=null){
        $this->name=$name;
        $this->id=$id;
    }
    public function setId($id){
        $this->$id;
    }
    public function setName($name){
        $this->$name;
    }
    public function &__get($propriete){
        return $this->$propriete;
    }
}