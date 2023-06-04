<?php
header('Content-Type:text/html;charset=utf-8');

// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

// Autoload Classes from Composer
require_once __DIR__ . '/vendor/autoload.php';

use Core\Router;

// Constants
define('URI', $_SERVER['REQUEST_URI']);

// Include Router

$routes = require_once __DIR__ . '/app/routes/routes.php';

/* Сделать так, создавался обьект App, который будет знать
контроллер и метод и вызывал его здесь */

$app = (new Router($routes, URI));
echo $app->running();
// echo $app->compareURI('/post/id/345', '/post/id/:id');
