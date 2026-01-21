<?php 
require_once "vendor/autoload.php";
use App\Controller\AdminController;
$admin=new AdminController();
$admin->checkCategoryInput();
$admin->displayCategories();

