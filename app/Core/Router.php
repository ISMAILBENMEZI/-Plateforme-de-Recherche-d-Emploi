<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function run()
    {
        $request = $_SERVER['REQUEST_URI'];
        $script_name = dirname($_SERVER['SCRIPT_NAME']);
        $url = str_replace($script_name, '', $request);
        $url = parse_url($url, PHP_URL_PATH);
        $url = trim($url, '/');

        if($url==''){
           $url='home';
        }
       
        $this->disPath($url);

    }
    public function addPath($path, $collBack)
    {
        $this->routes[$path] = $collBack;
    }

    public function disPath($url)
    {
        // var_dump($this->routes);
        if (array_key_exists($url, $this->routes)) {
            $action = $this->routes[$url];
            $controllerName = "App\Controller\\" . $action[0];
            $method = $action[1];
            if (!class_exists($controllerName)) {
                die('Controller not found');
            }
            $controller = new $controllerName;
            if (!method_exists($controller, $method)) {
                die('Action not found');
            }
            $controller->$method();
        }else {
            http_response_code(404);
            echo "this file not found";
        }
    }
}
