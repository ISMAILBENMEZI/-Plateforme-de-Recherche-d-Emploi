<?php
namespace App\Model\Entity;
class Tags{
    private $id;
    private $name;
    private $categoryId;
    public function __construct($name,$categoryId,$id=null){
        $this->id=$id;
        $this->name=$name;
        $this->categoryId=$categoryId;
    }
     public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setCategoryId($categoryId){
        $this->categoryId = $categoryId;
    }
  
    public function __get($property){
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
}