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

        if ($URI !== '/' and $URI !== '') {
            $URI = $this->removeTrailingSlash($URI);
            $routePath = $this->removeTrailingSlash($routePath);
            $lastSegmentUri = $this->extractLastSegment($URI);

            if (is_numeric(intval($lastSegment)) and (preg_match('/:/u', $routePath))) {
                $URI = $this->trimLastSegment($URI);
                $routePath = $this->trimLastSegment($routePath);
                return ($routePath == $URI) ? true : false;
            }

            if ($URI == $routePath) {
                return true;
            }
        }

        if ($URI == $routePath) {
            return true;
        }

        return false;
    }


    public function extractLastSegment($uri) {
        $last_slash_pos = strrpos($uri, '/');
        if ($last_slash_pos !== false) {
            $last_segment = substr($uri, $last_slash_pos + 1);
            return $last_segment;
            }
        return false;
    }

    public function removeTrailingSlash($str) {
        $str = trim($str);
        if (substr($str, -1) === '/') {
            $str = substr($str, 0, -1);
        }
    return $str;
}

    public function trimLastSegment($uri) {
        $last_slash_pos = strrpos($uri, '/');
        if ($last_slash_pos !== false) {
            return substr($uri, 0, $last_slash_pos);
        } else {
            return $uri;
    }
}
}
