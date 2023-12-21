<?php
namespace App\Controller;

use App\Controller;
use App\Model\loaiphim;
use App\Model\Phim;
use TaiKhoan ;

class DangXuatController extends Controller {
    private $Loai;
    private $Phim ;
    
    public function __construct(){
        $this->Phim = new Phim();
        $this->Loai = new LoaiPhim();
        
    }

    public function logout(){
        $phim =$this->Phim->getPhim();
        $loai = $this->Loai->getLoai();
        session_start();
        if(isset($_SESSION['currentUser'])){
            unset($_SESSION['currentUser']);
                session_destroy();
                $this->render('users\home', ['phim' => $phim, 'loai'=> $loai]);
        }
    }
}