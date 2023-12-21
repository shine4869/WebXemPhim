<?php

namespace App\Controller;

use App\Model\LoaiPhim;
use App\Controller;

class LoaiPhimController extends Controller
{
    private $Loai;

    public function __construct()
    {
        $this->Loai = new LoaiPhim();
    }

    public function dsLoai()
    {
        $loai = $this->Loai->getLoai();

        $this->render('users\home', ['loai' => $loai]);
    }
}
