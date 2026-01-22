<?php
require_once "vendor/autoload.php";
use App\Controller\AdminController;
use App\Core\Router;

// $admin = new AdminController();
// $admin->checkCategoryInput();
// $admin->displayCategories();




$router = new Router();

$router->addPath('recruteur', ['OfferController', 'recruteur']);
$router->addPath('creatOffer', ['OfferController', 'creatOffer']);
$router->addPath('createNewOffer', ['OfferController', 'createNewOffer']);
$router->addPath('home', ['AuthController', 'home']);
$router->addPath('login', ['AuthController', 'login']);
$router->addPath('register', ['AuthController', 'register']);
$router->addPath('derLogin', ['AuthController', 'derLogin']);
$router->addPath('derregister', ['AuthController', 'derregister']);
$router->addPath('logout', ['AuthController', 'logaut']);
$router->addPath('candidat', ['CondidatController', 'candidat']);
$router->run();
