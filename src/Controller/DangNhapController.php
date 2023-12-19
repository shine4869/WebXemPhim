<?php
namespace App\Controller;

use TaiKhoan ;

class DangNhapController {
    
    public function __construct(){
        
    }

    public function DangNhap() {
        session_start(); // Đảm bảo session đã được khởi tạo
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tendn = $_POST['tendn'];
            $password = $_POST['matkhau'];

            $tk = (new TaiKhoan())->GetTaiKhoan($tendn);
            if ($tk && password_verify($password, $tk['MatKhau'])) {
                // User authenticated, save user to session
                session_start();
                $_SESSION['currentUser'] = $tk;
    
                // Redirect to index.php
                $_SESSION['flash_message'] = "Dang Nhap Thanh Cong";
                header("Location: ../view/home.php");
                exit();
            } else {
                // Authentication failed, redirect to signin.php
                $_SESSION['flash_message'] = "Login has failed";
                header("Location: ../view/login.php");
                exit();
            }
        }

        
    }
}