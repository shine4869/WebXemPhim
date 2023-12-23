<?php

namespace App\Controller;

use App\Controller;
use App\Model\LoaiPhim;
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

        $dsphimtheoloai = $this->Phim->getPhimtheoma($Ml);
        

        $this->render('users\home', ['dsphimtheoloai' => $dsphimtheoloai, 'loai'=> $loai]);
        
    }
}
