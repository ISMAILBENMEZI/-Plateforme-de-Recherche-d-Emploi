<?php

namespace App\Model\Entity;
use App\Model\Entity\Skill;

class Offer
{
    private $title;
    private $job_name;
    private $salary;
    private $location;
    private $deadline;
    private $user_id;
    private $id;
    private $skills = [];

    public function __construct($title, $job_name, $salary, $location, $deadline, $user_id, $skills ,$id = null)
    {
        $this->title = $title;
        $this->job_name = $job_name;
        $this->salary = $salary;
        $this->location = $location;
        $this->deadline = $deadline;
        $this->user_id = $user_id;
        $this->id = $id;
        $this->skills = $skills;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getJobName()
    {
        return $this->job_name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getDeadline()
    {
        return $this->deadline;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getId()
    {
        return $this->id;
    }
}
