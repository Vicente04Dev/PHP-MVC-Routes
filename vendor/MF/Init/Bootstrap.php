<?php

namespace MF\Init;

abstract class Bootstrap{

    private $routes;

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    abstract protected function initRoutes();

    protected function getRoutes(){
        return $this->routes;
    }

    protected function setRoutes(array $routes){
        $this->routes = $routes;
    }

    protected function getUrl(){
        $route = $_SERVER['REQUEST_URI'];

        return parse_url($route, PHP_URL_PATH);
    }

    protected function run($url){
        foreach($this->getRoutes() as $key => $route){
            if($url == $route['route']){
                $classe = "\\App\\Controllers\\".ucfirst($route['controller']);

                $controller = new $classe;
                $action = $route['action'];

                $controller->$action();
            }
        }
    }
}