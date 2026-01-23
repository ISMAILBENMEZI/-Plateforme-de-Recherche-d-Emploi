<?php
namespace App\Services;
use App\Model\Repository\PostuleRepository;

class PostuleServices
{
    private PostuleRepository $PostuleRepository;

    public function __construct()
    {
        $this->PostuleRepository = new PostuleRepository();   
    }
    public function display(){
       return $this->PostuleRepository->displayAllPostule();
    }
}