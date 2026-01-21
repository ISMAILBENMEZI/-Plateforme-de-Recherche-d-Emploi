<?php
namespace App\controller;
use App\Services\CategoryServices;
use PDOException;
use PDO;
class AdminController{

public function chekCategoryInput(){
    try{
        if(isset($_POST["submit-categoryName"])&&!empty($_POST["categoryName"])){
         $categoryServices=new CategoryServices();
         $categoryServices->CreatCategory();
       
       
        }
    }
    catch(PDOException $e){
        echo "Failed to chek".$e->getMessage();
    }
}
public function desplayCategories(){
    $categoryes=new CategoryServices();
        $categories = $categoryes->display();
        require_once("../../view/public/categories.php");
      
        
}
}