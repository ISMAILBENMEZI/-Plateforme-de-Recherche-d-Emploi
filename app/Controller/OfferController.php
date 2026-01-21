<?php

namespace App\Controller;

use App\Services;
use App\Services\OfferServices;
use App\Model\Entity\Offer;

class OfferController
{
    private OfferServices $offerServices;

    public function __construct()
    {
        $this->offerServices = new OfferServices();
    }

    public function recruteur()
    {
        require 'view/public/recruteur.php';
    }

    public function createNewOffer()
    {
        require 'view/public/addOffer.php';
    }

    public function creatOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $job_name = $_POST['job_name'];
            $salary = $_POST['salary'];
            $location = $_POST['location'];
            $deadline = $_POST['deadline'];
            $skills = $_POST['skills'];
            $user_id = $_SESSION['user']->id;

            if (empty($title) || empty($job_name) || empty($salary) || empty($location) || empty($deadline) || empty($skills) || $user_id) {
                $_SESSION['erorr'] = '?';
                return;
            }

            $offer = new offer(
                title: $title,
                job_name: $job_name,
                salary: $salary,
                location: $location,
                deadline: $deadline,
                user_id: $user_id,
                skills: $skills
            );
        }
    }
}
