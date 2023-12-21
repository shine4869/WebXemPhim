<?php
namespace App\Controller;

use App\Model\TaiKhoan ;

class DangKyController {
    
    public function __construct(){
        
    }

    public function Dangky() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tendn = $_POST['tendn'];
            $matkhau = $_POST['matkhau'];
            $sodt = $_POST['sodt'];
            $matkhau2 = $_POST['matkhau2'];
            if ($tendn !== null && $matkhau !== null && $sodt !== null && $matkhau2 !== null){
                $tk = (new TaiKhoan())->LayTaiKhoanBangten($tendn);
                if ($tk) {
                    // Authentication failed, redirect to signin.php
                    $_SESSION['flash_message'] = "Tên tài khoản đã tồn tài!";
                    header("Location: ../user/register");
                    exit();
                    
                } else {
                    if(hash_equals($matkhau,$matkhau2)){
                        $user = (new TaiKhoan())->Dangky($tendn,$matkhau, $sodt);
                        if($user){
            
                        // Redirect to index.php
                        $_SESSION['flash_message'] = "Đăng ký thành công!";
                                header("Location: ../user/register");
                                exit();
                        }
                        else{
                            $_SESSION['flash_message'] = "Dang ky that bai";
                            header("Location: ../user/register");
                            exit();
                        }
    
                    }
                    else{
                        // Redirect to index.php
                        //$_SESSION['flash_message'] = "Password không khớp!";
                        header("Location: ../user/register");
                        exit();
                    }
                    
                    
                }
            }
            
        }

        
    }
}