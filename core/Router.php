<?php

namespace Core;

class Router
{

    public $track;
    public $uri;
    public $routes;

    public function __construct($routes, $uri)
    {
        $this->routes = $routes;
        $this->uri = $uri;
    }


    public function running() {
        foreach ($this->routes as $route) {
            if ($this->compareURI($this->uri, $route->path)) {
                $controller = $route->controller;
                $className = 'App\Controllers\\' . $controller;
                $action = $route->action;
                $params = basename($this->uri);
                $runClass = new $className();
                return $runClass->$action($params);
            } else {

            }
        }
        return "Error 404";
    }

    public function compareURI($URI, $routePath) {
        $UriWithoutParams = dirname($URI) . '/';
        $paramRoute = basename($routePath);

        if (basename($routePath) == basename($URI)) {
             return true;
        }

        if ($routePath == ($UriWithoutParams . $paramRoute)) {
             return true;
        }

        return false;

    }

    // public function getParams($uri) {
    //     return basename($uri);
    // }


    // public function run()
    // {
    //     foreach ($this->routes as $route) {
    //         // $newStr = str_replace(":", "", $route->path);
    //         if (!strcasecmp($newStr, $this->uri)) {
    //             $controller = $route->controller;
    //             $className = 'App\Controllers\\' . $controller;
    //             $runClass = new $className();
    //             $action = $route->action;
    //             $address = $route->path;
    //             $param = $this->extParam($address);
    //             if ($params) {
    //                 return $runClass->$action($param);
    //             } else {
    //                 return $runClass->$action();
    //             }

    //         }
    //     }
    //     return '<br>' . 'Данный роут' . ' ' . $this->uri . ' ' . 'не найден';
    // }

    // public function extParam($address) {
    //     $pattern = '/\/:(\w+)/';
    //     $matches = array();

    // if (preg_match($pattern, $address, $matches)) {
    //     return $matches[1];
    // } else {
    //     return false;
    // }
}
