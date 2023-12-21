<?php
namespace App\Controller;

use App\Model\Phim;
class TimKiemController {
    
    public function __construct(){
        
    }

    public function TimKiem()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $key = $_POST['search'];

            if($key != null){
                $phimtk = (new Phim())->timkiemphimtheoten($key);
                if(!empty($phimtk)){
                    $_SESSION['dsphimtk'] = $phimtk;
                    
                } 
                else{
                    $_SESSION['thongbao'] = "khong co phim";
                }
                header("Location: ../user/home");
                exit();
            }
            else{
                $phimtk= (new Phim())->getPhim();
                $_SESSION['dsphimtk'] = $phimtk;
                header("Location: ../user/home");
                exit();
                
            }
        
        }   

    }
}