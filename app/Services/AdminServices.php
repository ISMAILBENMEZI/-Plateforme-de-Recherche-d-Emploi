<?php
namespace App\Services;
use App\Model\Repository\AdminRepository;
use App\Model\Entity\Category;
use App\Model\Entity\Tags;

use PDOException;
class AdminServices{ 
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
    public function getAllCategory(){
      
        $category=$this->AdminRepository->displayAllCatgorys();
        return $category;
    }

     public function CreatTags($TagsName,$categoryId){
        try{
       
        $Tag=new Tags($TagsName,$categoryId);
        $this->AdminRepository->AddTags($Tag);
        }
        catch(PDOException $e){
            echo "failed to creat a category".$e->getMessage();
        }
    }
    public function getAllTags(){
      
        $Tags=$this->AdminRepository->displayAllTags();
        return $Tags;
    }

    public function DeleteCategorySevice(){
        try{
            $categoryId=$_POST["deleteBtn"];
            $this->AdminRepository->DeletCategory($categoryId);
        }
        catch(PDOException $e){
            echo "FAILED".$e->getMessage();
        }

    }


}