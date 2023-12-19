<?php

use App\Controller\DangKyController;
use App\Controller\DangNhapController;
use App\Controller\DangXuatController;
use App\Router;
use App\Controller\TaiKhoanController;
use App\Model\TaiKhoan;

// Usage:
$router = new Router();

// Add routes


$router->addRoute('/\//', [new TaiKhoanController(), 'index']);


$router->addRoute('/\/user\/login/', [new TaiKhoanController(), 'login']);
$router->addRoute('/\/user\/register/', [new TaiKhoanController(), 'register']);

$router->addRoute('/\/user\/DangNhap/', [new DangNhapController(), 'DangNhap']);


$router->addRoute('/\/user\/logout/', [new DangXuatController(), 'logout']);