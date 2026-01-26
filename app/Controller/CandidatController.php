<?php

use App\Services\CandidatServices;

class CandidatController
{
    private $candidatService;
    public function __construct()
    {
        $this->candidatService = new CandidatServices();
    }
   
    public function dashboard(){
        $categories = $this->candidatService->getAllCategory();

        $categoryId = $_GET['category'];

        $Tags = [];

        if($categoryId){
            $Tags = $this->candidatService->getTagsByCategory($categoryId);
        }
        
    }
}
