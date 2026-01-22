<?php
namespace App\Controller;
use App\Services\TagsServices;
class TagsController{
  public function categories()
    {
        require 'view/public/categories.php';
    }
    public function displayCategories()
    {
        $TagsServices = new TagsServices();
        $categories = $TagsServices->getAll();

         require 'view/public/categories.php';
    }
}