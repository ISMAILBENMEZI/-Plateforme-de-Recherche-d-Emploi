<?php
namespace App\Services;
use App\Model\Repository\AdminRepository;
use App\Model\Entity\Category;
use PDOException;
class CategoryServices{ 
    private $AdminRepository;
    public function __construct(){
     $this->AdminRepository=new AdminRepository();
    }
    public function CreatCategory($CategoryName){
        try{
       
        $Category=new Category($CategoryName);
        $this->AdminRepository->AddCategory($Category);
        }
        catch(PDOException $e){
            echo "failed to creat a category".$e->getMessage();
        }
    }
    public function getAll(){
        $categoryes=new AdminRepository();
        $category=$categoryes->displayAllCatgorys();
        return $category;
    }

}