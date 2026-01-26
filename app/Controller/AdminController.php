<?php

namespace App\Controller;

use App\Services\AdminServices;
use App\Core\Session;
Session::start();

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

                $this->AdminServices->CreatCategory($categoryName);
                header("location: categories");
                exit;
            }

        } catch (PDOException $e) {
            echo "Failed to check category: " . $e->getMessage();
        }
    }

    public function displayCategories()
    {
        $categories = $this->AdminServices->getAllCategory();
        require __DIR__ . '/../../view/public/categories.php';
    }

    public function checkAndCreatTags()
    {
        try {

            $categoryId = $_GET['categoryId'] ?? $_POST['categoryId'] ?? null;

            require __DIR__ . '/../../view/public/addTags.php';

            if (isset($_POST['submit-TagName'])) {
                $TagName = $_POST['TagName'];
                $category_id = $_POST["categoryId"] ?? null;

                if ($category_id === null) {
                    echo "Error: Please select a category";
                    return;
                }

                $this->AdminServices->CreatTags($TagName, $category_id);
                header("location: categories");
                exit;
            }

        } catch (PDOException $e) {
            echo "Failed to add tag: " . $e->getMessage();
        }
    }
    public function displayTags()
    {

        $categoryId = $_POST['categoryId'] ?? $_GET['categoryId'] ?? null;

        if ($categoryId === null) {
            echo "Error: No category selected";
            return;
        }

        $Tags = $this->AdminServices->getAllTags($categoryId);
        require __DIR__ . '/../../view/public/Tags.php';
    }

    // public function ModifyCategoryController(){

    // }
}
