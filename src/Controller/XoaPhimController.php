<?php
namespace App\Controller;

use App\Controller;
use App\Model\YeuThich ;

class XoaPhimController extends Controller{
    public function __construct(){        
    }
    public function xoaphimyeuthich($maphim){
        session_start();
        if(isset($_SESSION['currentUser'])){
            $user= $_SESSION['currentUser'];
            $id= $user['Id'];
            $ktr= (new YeuThich())->xoaphimyeuthich($maphim,$id);
            if($ktr){

                    header("Location: ../getyeuthich/$id");
                    exit();
            }
        }

    }
}


?>