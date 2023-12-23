<?php
namespace App\Controller;

use App\Controller;
use App\Model\LoaiPhim;
use App\Model\Phim ;

class ChiTietController extends Controller{
    private $Phim;
    private $Loai;
    public function __construct()
    {
        $this->Phim = new Phim();
        $this->Loai = new LoaiPhim();
    }
    public function showPhim($MaPhim) {
        $loai = $this->Loai->getLoai();
        $ctphim = $this->Phim->getPhimtheoma($MaPhim);

        $this->render('users\detail', ['ctphim' => $ctphim, 'loai'=> $loai]);
        
    }
}

?>