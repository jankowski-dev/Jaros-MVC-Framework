<?php

use Core\Route;

return [
    new Route('/admin', 'AdminController', 'index'),
    new Route('/users', 'UserController', 'index'),
    new Route('/user', 'UserController', 'getUser'),
];
