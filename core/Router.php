<?php

class Router
{
    protected $routes = [
        'GET'=> [],
        'POST'=> []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($url, $requesType)
    {
        // example.com/about/culture 
        if (array_key_exists($url, $this->routes[$requesType])) {
            return $this->routes[$requesType][$url];
        }

        throw new Exception('No route defined for this URL');
    }


    public function get( $uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post( $uri, $controller)
    {


        $this->routes['POST'][$uri] = $controller;
    }
}