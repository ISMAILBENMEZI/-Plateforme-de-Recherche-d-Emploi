<?php

namespace App\Controller;

use App\Services;
use App\Services\OfferServices;
use App\Model\Entity\Offer;
use App\Core\Session;

class OfferController
{
    private OfferServices $offerServices;

    public function __construct()
    {
        $this->offerServices = new OfferServices();
    }

    public function recruteur()
    {
        $offers = $this->getOfferByUserId();
        require 'view/public/recruteur.php';
    }

    public function createNewOffer()
    {
        require 'view/public/addOffer.php';
    }

    public function goToUpdateOffer()
    {
        $offer = $this->getOfferBuId();
        require 'view/public/addOffer.php';
    }

    public function addOffer()
    {
        require 'view/public/addOffer.php';
    }

    public function creatOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $job_name = $_POST['job_name'] ?? '';
            $salary = $_POST['salary'] ?? '';
            $location = $_POST['location'] ?? '';
            $deadline = $_POST['deadline'] ?? '';
            $skills = $_POST['skills'] ?? '';
            $user_id = 1;

            $skills = array_unique($skills);

            if (empty($title) || empty($job_name) || empty($salary) || empty($location) || empty($deadline)  || empty($user_id) || empty($skills) || !is_array($skills)) {
                $_SESSION['erorr'] = "Please fill in all fields.";
                var_dump($_POST);
                exit;
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

            $result = $this->offerServices->creatOffer($offer);
            if ($result) {
                $_SESSION['success'] = 'The offer has been created successfully.';
                require 'view/public/recruteur.php';
            } else {
                $_SESSION['erorr'] = "Failed to create the offer. Please try again later.";
                require 'view/public/addOffer.php';
            }
        }
    }

    public function getAllOffer()
    {
        return $this->offerServices->getAllOffer();
    }

    public function getOfferByUserId()
    {
        $user_id = Session::get('user_id');

        $offer = new offer(
            title: null,
            job_name: null,
            salary: null,
            location: null,
            deadline: null,
            user_id: 1,
            skills: null,
            id: null
        );

        return $this->offerServices->getOfferByUserId($offer);
    }


    public function getOfferBuId()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'];
            $offer_id = $_POST['offer_id'];

            if (empty($user_id) || empty($offer_id)) {
                $_SESSION['error'] = 'error!!Please try again later.';
                return;
            }

            $offer = new offer(
                title: null,
                job_name: null,
                salary: null,
                location: null,
                deadline: null,
                user_id: $user_id,
                skills: null,
                id: $offer_id
            );

            return $this->offerServices->getOfferBuId($offer);
        }
    }

    public function updateOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $job_name = $_POST['job_name'] ?? '';
            $salary = $_POST['salary'] ?? '';
            $location = $_POST['location'] ?? '';
            $deadline = $_POST['deadline'] ?? '';
            $skills = $_POST['skills'] ?? '';
            $user_id = $_POST['user_id'] ?? '';
            $offer_id = $_POST['offer_id'] ?? '';

            $skills = array_unique($skills);

            if (empty($title) || empty($job_name) || empty($salary) || empty($location) || empty($deadline)  || empty($user_id) || empty($skills) || empty($offer_id) || empty($user_id) || !is_array($skills)) {
                $_SESSION['erorr'] = "Please fill in all fields.";
                var_dump($_POST);
                exit;
                return;
            }

            $offer = new offer(
                title: $title,
                job_name: $job_name,
                salary: $salary,
                location: $location,
                deadline: $deadline,
                user_id: $user_id,
                skills: $skills,
                id: $offer_id
            );

            $result = $this->offerServices->updateOffer($offer);
            if ($result) {
                $_SESSION['success'] = 'The offer has been created successfully.';
                require 'view/public/recruteur.php';
            } else {
                $_SESSION['erorr'] = "Failed to create the offer. Please try again later.";
                require 'view/public/addOffer.php';
            }
        }
    }

    public function deleteOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_id = $_POST['user_id'];
            $offer_id = $_POST['offer_id'];

            if (empty($user_id) || empty($offer_id)) {
                $_SESSION['error'] = 'error!!Please try again later.';
                return;
            }

            $offer = new offer(
                title: null,
                job_name: null,
                salary: null,
                location: null,
                deadline: null,
                user_id: $user_id,
                skills: null,
                id: $offer_id
            );

            $result = $this->offerServices->deleteOffer($offer);
            if ($result) {
                $_SESSION['success'] = 'The offer has been created successfully.';
                require 'view/public/recruteur.php';
            } else {
                $_SESSION['erorr'] = "Failed to delete the offer. Please try again later.";
                require 'view/public/addOffer.php';
            }
        }
    }
}
