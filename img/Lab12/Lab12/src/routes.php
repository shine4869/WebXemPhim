<?php

use App\Controller\AuthenticationController;
use App\Router;
use App\Controller\UserController;


// Usage:
$router = new Router();

// Add routes
$router->addRoute('/\//', [new UserController(), 'index']);
$router->addRoute('/\/user/', [new UserController(), 'userList']);
$router->addRoute('/\/user\/index/', [new UserController(), 'userList']);
//$router->addRoute('/\/user/', [new UserController(), 'index']);
$router->addRoute('/\/user\/show\/(\d+)/', [new UserController(), 'show']);
$router->addRoute('/\/user\/create/', [new UserController(), 'create']);
$router->addRoute('/\/user\/update\/(\d+)/', [new UserController(), 'update']);
$router->addRoute('/\/user\/delete\/(\d+)/', [new UserController(), 'delete']);
$router->addRoute('/\/user\/signin/', [new UserController(), 'signin']);
$router->addRoute('/\/auth\/validate/', [new AuthenticationController(), 'authenticate']);
$router->addRoute('/\/user\/logout/', [new UserController(), 'logout']);

