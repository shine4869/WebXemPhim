<?php
namespace App\Controller;

use App\Model\TaiKhoan ;

class DangKyController {
    
    public function __construct(){
        
    }

    public function Dangky() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tendn = $_POST['tendn'];
            $matkhau = $_POST['matkhau'];
            $sodt = $_POST['Sodt'];
            $matkhau2 = $_POST['matkhau2'];

            $tk = (new TaiKhoan())->GetTaiKhoan($tendn);
            if ($tk) {
                // Authentication failed, redirect to signin.php
                $_SESSION['flash_message'] = "ten dang nhap khong hop le";
                header("Location: ../view/signin");
                exit();
                
            } else {
                if(hash_equals($matkhau,$matkhau2)){
                    $tk = (new TaiKhoan())->Dangky($tendn,$matkhau, $sodt);
                    // User authenticated, save user to session
                    session_start();
                    $_SESSION['currentUser'] = $tk;
        
                    // Redirect to index.php
                    $_SESSION['flash_message'] = "Dang ky thanh cong";
                    header("Location: ../view/index");
                    exit();
                }
                else{
                    // Redirect to index.php
                    $_SESSION['flash_message'] = "xac nhan mat khau không dung";
                    header("Location: ../view/signin");
                    exit();
                }
                
                
            }
        }

        
    }
}