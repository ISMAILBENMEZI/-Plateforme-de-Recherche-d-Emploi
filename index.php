<?php
require_once "vendor/autoload.php";
use App\Core\Router;
use App\Core\Session;
Session::start();


$router = new Router();

$router->addPath('categories', ['AdminController', 'displayCategories']);
$router->addPath('deleteOffer',['OfferController','deleteOffer']);
$router->addPath('updateOffer',['OfferController','updateOffer']);
$router->addPath('addOffer',['OfferController','addOffer']);
$router->addPath('goToUpdateOffer',['OfferController','goToUpdateOffer']);


$router->addPath('categories', ['AdminController', 'categories']);
$router->addPath('addCategorie', ['AdminController', 'checkAndCreatCategory']);
$router->addPath('Tags', ['AdminController', 'displayTags']);
$router->addPath('addTags', ['AdminController', 'checkAndCreatTags']);



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
