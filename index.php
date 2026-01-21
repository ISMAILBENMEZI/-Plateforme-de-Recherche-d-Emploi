<?php
require_once 'vendor/autoload.php';

use App\Core\Router;

$router = new Router();

$router->addPath('recruteur',['OfferController','recruteur']);
$router->addPath('creatOffer',['OfferController','creatOffer']);
$router->addPath('createNewOffer',['OfferController','createNewOffer']);
$router->addPath('addOffer',['OfferController','addOffer']);
$router->addPath('home',['AuthController','home']);
$router->addPath('login',['AuthController','login']);
$router->addPath('register',['AuthController','register']);
$router->addPath('derLogin',['AuthController','derLogin']);
$router->addPath('derregister',['AuthController','derregister']);
$router->run();
