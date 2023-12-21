<?php
namespace App\Controller;

use App\Controller;
use App\Model\LoaiPhim;
use App\Model\Phim ;

class XemPhimController extends Controller{
    private $Phim;
    private $Loai;
    public function __construct()
    {
        $this->Phim = new Phim();
        $this->Loai = new LoaiPhim();
    }
    public function XemPhim($MaPhim) {
        $loai = $this->Loai->getLoai();
        $ctphim = $this->Phim->getPhimtheoma($MaPhim);
        $phim = $this->Phim->getPhim();

        $this->render('users\watch_movie', ['ctphim' => $ctphim, 'loai'=> $loai, 'phim' => $phim]);
        
    }
}


?>