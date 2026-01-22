<?php
namespace App\Services;
use App\Model\Repository\CategoryRepository;
use App\Model\Entity\Category;
use PDOException;
class CategoryServices{ 
    private $AdminRepository;
    public function __construct(){
     $this->AdminRepository=new CategoryRepository();
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
        $categoryes=new CategoryRepository();
        $category=$categoryes->displayAllCatgorys();
        return $category;
    }

}