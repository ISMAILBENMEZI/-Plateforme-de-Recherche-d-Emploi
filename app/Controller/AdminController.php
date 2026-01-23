<?php

namespace App\Controller;

use App\Services\TagsServices;
use App\Services\CategoryServices;

use PDOException;

class AdminController
{

    public function checkAndCreatCategory()
    {
        try {
            if (!empty($_POST['categoryName'])) {
                $categoryName = $_POST['categoryName'];
                $categoryServices = new CategoryServices();
                $categoryServices->CreatCategory($categoryName);
            }
        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }

    public function checkAndCreatTags()
    {
        try {
            if (!empty($_POST['categoryName'])) {
                $TagName = $_POST['TagName'];
                $category_id = $_POST["categoryId"];
                $TagsServices = new TagsServices();
                $TagsServices->CreatTags($TagName, $category_id);
            }
        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }
}
