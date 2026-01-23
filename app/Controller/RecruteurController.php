<?php
namespace App\Controller;
use App\Services\PostuleServices;

class RecruteurController
{
    private $candidatService;
    public function __construct()
    {
        $this->candidatService = new PostuleServices();
    }
   
    public function display(){
        $condidats =$this->candidatService->display(); 
        require __DIR__ . '/../../view/public/ListCondidats.php';
    }
}
