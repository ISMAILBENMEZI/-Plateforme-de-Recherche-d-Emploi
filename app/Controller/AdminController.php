<?php

namespace App\Controller;

use App\Services\AdminServices;


use PDOException;

class AdminController
{

    

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
}
