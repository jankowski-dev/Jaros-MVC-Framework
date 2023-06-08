<?php

namespace Core;

class Route
{

    public $path;
    public $controller;
    public $action;

    // public function __construct($path, $controller, $action) {
    //     // $this->path = $path;
    //     // $this->controller = $controller;
    //     // $this->action = $action;
    // }

    public static function post($path, $controller, $action)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $route = new self();
            $route->path = $path;
            $route->controller = $controller;
            $route->action = $action;
            return $route;
        }
    }

    public static function get($path, $controller, $action)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $route = new self();
            $route->path = $path;
            $route->controller = $controller;
            $route->action = $action;
            return $route;
        }
    }

    public static function delete($path, $controller, $action)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $route = new self();
            $route->path = $path;
            $route->controller = $controller;
            $route->action = $action;
            return $route;
        }
    }
}
