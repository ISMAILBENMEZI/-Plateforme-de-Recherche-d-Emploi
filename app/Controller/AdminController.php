<?php
namespace App\Controller;

use App\Services\CategoryServices;
use PDOException;

class AdminController
{
    public function checkCategoryInput()
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

    public function displayCategories()
    {
        $categoryServices = new CategoryServices();
        $categories = $categoryServices->getAll();

        include 'view/public/categories.php';
    }
}
