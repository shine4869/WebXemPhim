<?php

use App\Controller\ChiTietController;
use App\Controller\DangKyController;
use App\Controller\DangNhapController;
use App\Controller\DangXuatController;
use App\Controller\DoiMatKhauController;
use App\Controller\LoaiPhimController;
use App\Controller\PhimController;
use App\Controller\PhimYeuThichController;
use App\Router;
use App\Controller\TaiKhoanController;
use App\Controller\TimKiemController;
use App\Controller\XemphimController;
use App\Controller\XoaPhimController;
use App\Controller\YeuThichController;
use App\Model\Phim;
use App\Model\TaiKhoan;

// Usage:
$router = new Router();

// Add routes

$router->addRoute('/\//', [new PhimController(), 'dsPhim']);


$router->addRoute('/\/user\/login/', [new TaiKhoanController(), 'login']);
$router->addRoute('/\/user\/register/', [new TaiKhoanController(), 'register']);
$router->addRoute('/\/user\/changepassword/', [new TaiKhoanController(), 'changepassword']);

$router->addRoute('/\/user\/DangNhap/', [new DangNhapController(), 'DangNhap']);
$router->addRoute('/\/user\/dangky/', [new DangKyController(), 'Dangky']);
$router->addRoute('/\/user\/doimatkhau/', [new DoiMatKhauController(), 'doimatkhau']);

$router->addRoute('/\/user\/logout/', [new DangXuatController(), 'logout']);


$router->addRoute('/\/user\/timkiem/', [new TimKiemController(), 'TimKiem']);
$router->addRoute('/\/user\/detail\/([^\/]+)/', [new ChiTietController(), 'showPhim']);
$router->addRoute('/\/user\/xemphim\/([^\/]+)/', [new XemphimController(), 'XemPhim']);


$router->addRoute('/\/user\/phimtheoma\/([^\/]+)/', [new LoaiPhimController(), 'phimtheoma']);

$router->addRoute('/\/user\/themyeuthich\/([^\/]+)/', [new YeuThichController(), 'ThemYeuThich']);

$router->addRoute('/\/user\/getyeuthich\/([^\/]+)/', [new PhimYeuThichController(), 'getyeuthich']);

$router->addRoute('/\/user\/xoa\/([^\/]+)/', [new XoaPhimController(), 'xoaphimyeuthich']);



?>










