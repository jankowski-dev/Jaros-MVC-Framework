<?php

use Core\Route;

return [
    Route::post('/', 'MainController', 'index'),
    Route::post('/user', 'UserController', 'index'),
    Route::get('/user/:id', 'UserController', 'getUser'),
    Route::post('/post/all', 'PostController', 'getAllPosts'),
    Route::delete('/post/all', 'PostController', 'deleteAllPosts'),
    Route::post('/post/id/:id', 'PostController', 'getPostById'),
];
