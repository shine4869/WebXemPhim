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

            $tk = (new TaiKhoan())->LayTaiKhoanBangten($tendn);
            if ($tk) {
                // Authentication failed, redirect to signin.php
                $_SESSION['flash_message'] = "ten dang nhap da co";
                header("Location: ../user/register");
                exit();
                
            } else {
                if(hash_equals($matkhau,$matkhau2)){
                    $user = (new TaiKhoan())->Dangky($tendn,$matkhau, $sodt);
                    if($user){
        
                    // Redirect to index.php
                    $_SESSION['flash_message'] = "Dang ky thanh cong";
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
                    $_SESSION['flash_message'] = "xac nhan mat khau không dung";
                    header("Location: ../user/register");
                    exit();
                }
                
                
            }
        }

        
    }
}