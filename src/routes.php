<?php

use App\Controller\DangKyController;
use App\Controller\DangNhapController;
use App\Controller\DangXuatController;
use App\Controller\PhimController;
use App\Controller\LoaiPhimController;
use App\Router;
use App\Controller\TaiKhoanController;
use App\Model\TaiKhoan;

// Usage:
$router = new Router();

// Add routes


$router->addRoute('/\//', [new PhimController(), 'dsPhim']);
$router->addRoute('/\//', [new LoaiPhimController(), 'dsLoai']);

$router->addRoute('/\/user\/login/', [new TaiKhoanController(), 'login']);
$router->addRoute('/\/user\/register/', [new TaiKhoanController(), 'register']);

$router->addRoute('/\/user\/DangNhap/', [new DangNhapController(), 'DangNhap']);
$router->addRoute('/\/user\/dangky/', [new DangKyController(), 'Dangky']);

$router->addRoute('/\/user\/logout/', [new DangXuatController(), 'logout']);


$router->addRoute('/\/user\/detail\/(\d+)/', [new PhimController(), 'showPhim']);
$router->addRoute('/\/user\/timkiem\/(\d+)/', [new PhimController(), 'TimKiem']);




