<?php
namespace App\Controller;

use App\Model\LoaiPhim;
use App\Model\Phim;
use App\Controller;
use Collator;

class PhimController extends Controller{
    private $Phim ;
    private $Loai;


    public function __construct()
    {
        $this->Phim = new Phim();
        $this->Loai = new LoaiPhim();
    }
    public function dsPhim(){
        $phim =$this->Phim->getPhim();

        $this->render('users\home', ['phim' => $phim]);
    }
    public function dsLoai()
    {
        $loai = $this->Loai->getLoai();

        $this->render('users\home', ['loai' => $loai]);
    }


}




?>