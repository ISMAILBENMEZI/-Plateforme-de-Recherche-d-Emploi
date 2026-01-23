<?php

namespace App\Controller;

use App\Services\AdminServices;


use PDOException;

class AdminController
{
    private $AdminServices;
    public function __construct()
    {
        $this->AdminServices = new AdminServices();
    }

    public function checkAndCreatCategory()
    { 
        try {
            require __DIR__ . '/../../view/public/addcategorie.php';
            if (isset($_POST['submit-categoryName'])) {
                $categoryName = $_POST['categoryName'];
                $categoryServices = new AdminServices();
                $categoryServices->CreatCategory($categoryName);    
                             
            }
        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }

    public function displayCategories()
    {

        $categoryServices = new AdminServices();
        $categories = $categoryServices->getAllCategory();
     
        require __DIR__ . '/../../view/public/categories.php';
    }

    public function checkAndCreatTags()
    {
      
        try {
         require __DIR__. '/../../view/public/addTags.php';
            if (isset($_POST['submit-TagName'])) {
                $TagName = $_POST['TagName'];
                $category_id = $_POST["categoryId"];
                $TagsServices = new AdminServices();
                $TagsServices->CreatTags($TagName, $category_id);
               
            }
        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }
    public function displayTags()
    {
        $TagsServices = new AdminServices();
        $Tags = $TagsServices->getAllTags();
               require __DIR__ . '/../../view/public/Tags.php';

    }


}
