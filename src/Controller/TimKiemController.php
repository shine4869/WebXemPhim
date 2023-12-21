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

            if($key !== null && $key !== ' '){
                $phimtk = (new Phim())->timkiemphimtheoten($key);
                    $_SESSION['dsphimtk'] = $phimtk;
                header("Location: ../user/home");
                exit();
            }
            else{
                $_SESSION['dsphimtk'] = (new Phim())->getPhim(); // Đặt thành mảng rỗng khi không có tìm kiếm
                header("Location: ../user/home");
                exit();
                
            }
        
        }   

    }
}