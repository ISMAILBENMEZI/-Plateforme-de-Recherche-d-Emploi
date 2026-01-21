<?php 
require_once "vendor/autoload.php";
use App\controller\AdminController;
$admin=new AdminController();
$admin->chekCategoryInput();
$admin->desplayCategories();