<?php

namespace Core;

class Route {

    public $path;
    public $controller;
    public $action;

    public function __construct($path, $controller, $action) {
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }
}