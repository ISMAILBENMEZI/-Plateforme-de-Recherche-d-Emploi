<?php
namespace App\Controller;
use App\Services\CategoryServices;
class CategoryController{
  public function categories()
    {
        require 'view/public/categories.php';
    }
    public function displayCategories()
    {
        $categoryServices = new CategoryServices();
        $categories = $categoryServices->getAll();

         require 'view/public/categories.php';
    }
}