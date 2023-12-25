<?php
namespace App\Controller;

use App\Controller;
use App\Model\TaiKhoan ;

class DoiMatKhauController extends Controller{
    public function __construct(){
        
    }
    public function doimatkhau() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $matkhau = $_POST['matkhau'];
            $matkhaumoi = $_POST['matkhaumoi'];
            $matkhauxacnhan = $_POST['matkhauxacnhan'];
            if ($matkhau !== null && $matkhaumoi !== null && $matkhauxacnhan !== null){
                    if(isset($_SESSION['currentUser'])){
                        $user= $_SESSION['currentUser'];
                        $id= $user['Id'];
                        if(hash_equals($matkhau,$user['MatKhau'])){
                            if(hash_equals($matkhaumoi,$matkhauxacnhan)){
                                $ktr= (new TaiKhoan)->DoiMatKhau($id,$matkhaumoi);
                                if($ktr){
                                    $_SESSION['flash_notification'] = "Đổi mật khẩu thành công!";
                                    header("Location: ../user/changepassword");
                                    exit();
                                }

                            }else{
                                //$_SESSION['flash_message'] = "mat khau xac nhan khong dung";
                                header("Location: ../user/changepassword");
                                exit();
                            }
                        }
                        else{
                            $_SESSION['flash_notification'] = "Mật khẩu củ không đúng!";
                            header("Location: ../user/changepassword");
                            exit();
                        }
    
                    }
            }
                         
        }
            
    }
        
}



?>