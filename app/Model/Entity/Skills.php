<?php

class Skills
{
    private $id;
    private $job;
    private $skills = [];

    public function __construct($job, $skills)
    {
        $this->job = $job;
        $this->skills = $skills;
    }
    public function setId()
    {
        $this->id;
    }
    public function gettId()
    {
        return $this->id;
    }
    public function setSkills($skills)
    {
         $this->skills = $skills;
    }
    public function getSkills()
    {
        return $this->skills;
    }
    public function setJob($job)
    {
         $this->job = $job;
    }
    public function getJob()
    {
        return $this->job;
    }
}
