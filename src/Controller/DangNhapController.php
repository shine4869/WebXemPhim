<?php
namespace App\Controller;

use App\Model\TaiKhoan;


class DangNhapController {
    
    public function __construct(){
        
    }

    public function DangNhap() {
        session_start(); // Đảm bảo session đã được khởi tạo
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tendn = $_POST['tendn'];
            $password = $_POST['matkhau'];
            
            
            $user = (new TaiKhoan())->LayTaiKhoanBangten($tendn);
            if ($user && hash_equals($password, $user['MatKhau'])) {
                // User authenticated, save user to session
                session_start();
                $_SESSION['currentUser'] = $user;
    
                // Redirect to index.php
                $_SESSION['flash_message'] = "Dang Nhap Thanh Cong";
                header("Location: ../user/home");
                exit();
            } else {
                // Authentication failed, redirect to signin.php
                $_SESSION['flash_message'] = "Dang Nhap That Bai";
                header("Location: ../user/login");
                exit();
            }
        }

        
    }
}