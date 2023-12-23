<?php
namespace App\Controller;

use App\Model\LoaiPhim;
use App\Model\Phim;
use App\Controller;
use Collator;

class PhimController extends Controller{
    private $Loai;
    private $Phim ;
    


    public function __construct()
    {
        $this->Phim = new Phim();
        $this->Loai = new LoaiPhim();
    }
    public function dsPhim(){
        $phim =$this->Phim->getPhim();
        $loai = $this->Loai->getLoai();


        $this->render('users\home', ['phim' => $phim, 'loai'=> $loai]);
    }

    public function dsLoai()
    {
        $loai = $this->Loai->getLoai();

        $this->render('users\home', ['loai' => $loai]);
    }


}


?>