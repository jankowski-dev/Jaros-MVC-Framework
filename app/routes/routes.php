<?php

use Core\Route;

return [
    new Route('/', 'MainController', 'index'),
    new Route('/user', 'UserController', 'index'),
    new Route('/user/:id', 'UserController', 'getUser'),
    new Route('/post/all', 'PostController', 'getAllPosts'),
    new Route('/post/id/:id', 'PostController', 'getPostById'),
];
