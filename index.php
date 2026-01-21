<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Core\Router;
use App\Core\Session;

// Session::start();
$router = new Router();
$router->addPath('home',['AuthController','home']);
$router->addPath('login',['AuthController','login']);
$router->addPath('register',['AuthController','register']);
$router->addPath('derLogin',['AuthController','derLogin']);
$router->addPath('derregister',['AuthController','derregister']);
$router->run();
