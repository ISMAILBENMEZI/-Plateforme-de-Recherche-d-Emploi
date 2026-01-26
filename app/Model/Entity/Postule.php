<?php
namespace App\Model\Entity;
class Postule{
    private $id;
    private $letter;
    private $document;
    private $user;
    private $offer;
    public function __construct($letter,$document){
       
        $this->document=$document;
        $this->letter=$letter;
  
    }
     public function setId($id){
        $this->id = $id;
    }
    public function setLetter($letter){
        $this->letter = $letter;
    }
    public function setDocument($document){
        $this->document = $document;
    }
    public function setUsert($user){
        $this->user = $user;
    }
    public function setOffer($offer){
        $this->offer = $offer;
    }
    
    public function __get($property){
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
}