<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\UserController;
use App\Router;


require __DIR__. '/src/routes.php';
$uri = $_SERVER['REQUEST_URI'];

$router->match($uri);

/*
// Match URIs
$uri3 = '/user';
$uri1 = '/user/index';
$uri2 = '/user/show/1';
$uri4 = '/';
$uri5 = '/user/create';
$uri6 = '/user/update/2';


$router->match($uri1);  // Output: Calling index method
echo "<br>";
$router->match($uri2);  // Output: Calling show method with user ID: 1
echo "<br>";
$router->match($uri3);  // Output: Calling index method
echo "<br>";
$router->match($uri4);  // Output: Calling index method
echo "<br>";
$router->match($uri5);  // Output: Calling create method
echo "<br>";
$router->match($uri6);  // Output: Calling update method with user ID: 2
echo "<br>";
*/