<?php

namespace App\Controller;

use App\Model\LoaiPhim;
use App\Controller;
use App\Model\Phim;

class LoaiPhimController extends Controller
{
    private $Loai;
    private $Phim;
    public function __construct()
    {
        
        $this->Loai = new LoaiPhim();
        $this->Phim = new Phim();
    }
    public function phimtheoma($Ml) {
        $loai = $this->Loai->getLoai();
        $phim = $this->Phim->getPhim();

        $newphim = $this->Phim->getPhimtheonew();

        $dsphimtheoloai = $this->Phim->getPhimtheoloai($Ml);
        

        $this->render('users/home', ['dsphimtheoloai' => $dsphimtheoloai, 'loai'=> $loai, 'phim' => $phim, 'newphim' => $newphim]);
        
    }
}
