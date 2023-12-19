<?php

use App\Controller\DangKyController;
use App\Controller\DangNhapController;
use App\Controller\DangXuatController;
use App\Router;
use App\Controller\UserController;


// Usage:
$router = new Router();

// Add routes


//$router->addRoute('/\/user/', [new UserController(), 'index']);
//$router->addRoute('/\/user\/show\/(\d+)/', [new UserController(), 'show']);
$router->addRoute('/\/user\/login/', [DangNhapController::class, 'login']);
$router->addRoute('/\/user\/signin/', [new DangKyController(), 'signin']);
$router->addRoute('/\/user\/logout/', [new DangXuatController(), 'logout']);