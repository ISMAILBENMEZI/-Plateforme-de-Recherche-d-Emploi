<?php
namespace App\Controller;

use App\Services\AdminServices;
use App\Services\TagsServices;
use App\Services\CategoryServices;

use PDOException;

class AdminController
{
    private $AdminServices;
    public function __construct(){
        $this->AdminServices=new AdminServices();
    }
   
    public function checkAndCreatCategory()
    {
        require "view/public/addCategorie.php";
        try {
            if (isset($_POST['submit-categoryName'])) {
                $categoryName = $_POST['categoryName'];
                $categoryServices = new CategoryServices();
                $categoryServices->CreatCategory($categoryName);
            }
        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }

        public function displayCategories()
    {
       
        $categoryServices = new CategoryServices();
        $categories = $categoryServices->getAll();
          require 'view/public/categories.php';
    }

      public function checkAndCreatTags()
    {
        try {
            require "view/public/addTags.php";
            if (isset($_POST['submit-TagName'])) {
                $TagName = $_POST['TagName'];
                $category_id=$_POST["categoryId"];
                $TagsServices = new TagsServices();
                $TagsServices->CreatTags($TagName,$category_id);
            }
        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }
      public function displayTags()
    {
        
        $TagsServices = new TagsServices();
        $Tags = $TagsServices->getAllTags();
        require 'view/public/Tags.php';
    }


}
