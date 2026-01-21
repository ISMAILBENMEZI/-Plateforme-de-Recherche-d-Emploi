<?php
require_once 'vendor/autoload.php';

use App\Core\Router;

$router = new Router();

$router->addPath('recruteur',['OfferController','recruteur']);
$router->addPath('creatOffer',['OfferController','creatOffer']);
$router->addPath('createNewOffer',['OfferController','createNewOffer']);

$router->run();