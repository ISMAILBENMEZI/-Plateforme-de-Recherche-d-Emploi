<?php

namespace App\Model\Entity;

use JsonSerializable;

class Category implements JsonSerializable
{
    private $id;
    private $name;
    private $tags = [];

    public function __construct($name){
        $this->name = $name;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function addTags(array $skilles)
    {
        array_push($this->tags, $skilles);
    }

    public function jsonSerialize(): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'tags' => $this->tags
        ];
    }
}
