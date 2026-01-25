<?php
namespace App\Model\Entity;

class Category {
    private $id;
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function __get($property){
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
}
