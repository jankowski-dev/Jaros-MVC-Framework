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

    public function getTrack()
    {
        return $this->track;
    }

    public function getUri()
    {
        foreach ($this->routes as $route) {
            if (!strcasecmp($route->path, $this->uri)) {
                $controller = $route->controller;
                $className = 'App\Controllers\\' . $controller;
                $run = new $className();
                $action = $route->action;
                return $run->$action();
            }
        }
        return '<br>' . 'Данный роут' . ' ' . $this->uri . ' ' . 'не найден';
    }
}
