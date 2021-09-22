<?php

class Router
{
    protected $routes = [];

    public function define( $routes)
    {
        $this->routes = $routes;
    }

    public function direct( $url)
    {
        // example.com/about/culture 
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        }
    }
}