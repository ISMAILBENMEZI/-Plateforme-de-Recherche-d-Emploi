<?php
namespace App\Services;
use App\Repository\AdminRepository;
class categoryServices{
    private $Adminrepository;
    public function __construct(){
     $this->Adminrepository=new AdminRepository();
    }
    public function CreatCategory(){
        $CategoryName=$_POST
    }
}