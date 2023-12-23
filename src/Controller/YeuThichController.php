<?php
namespace App\Controller;

use App\Controller;
use App\Model\YeuThich ;

class YeuThichController extends Controller{

    public function __construct(){        
    }
    public function ThemYeuThich($maphim){
        session_start();
        if(isset($_SESSION['currentUser'])){
            $user = $_SESSION['currentUser'];
            $id= $user['Id'];
            $ktr= (new YeuThich())->getphimdayeuthich($maphim,$id);
            if($ktr){
                $_SESSION['thongbao'] = "phim da duoc them truoc do roi";
                    header("Location: ../detail/$maphim");
                    exit();
            }
            else{
                $them = (new YeuThich())->ThemYeuThich($id,$maphim);
                if($them){

                    $_SESSION['thongbao'] = "phim da duoc them thanh cong";
                    header("Location: /user/detail/$maphim");
                    exit();
                }
                else{
                    header("Location: /login");
                    exit();
                }
            }          
        }
        else{
            header("Location: /user/login");
            exit();
        }
    }
    

}


?>