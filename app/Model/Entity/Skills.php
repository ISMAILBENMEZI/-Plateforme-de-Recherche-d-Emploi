<?php
class Skills{
    private $id;
    private $job;
    private $skills=[];
 
    public function __construct($job,$skills){
        $this->job=$job;
        $this->skills=$skills;
    }
    public function setId($id){
        $this->id;
    }
    public function __get($name){
        return $this->$name;
    }
}