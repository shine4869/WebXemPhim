<?php
namespace App\Controller;

use App\Model\LoaiPhim;
use App\Controller;
use App\Model\Phim;
use App\Model\YeuThich;

class PhimYeuThichController extends Controller{
    private $Phim;
    private $Loai;
    private $YeuThich;
    public function __construct()
    {
        
        $this->Loai = new LoaiPhim();
        $this->Phim = new Phim();
        $this->YeuThich = new YeuThich();
    }
    public function getyeuthich($id){
        $loai = $this->Loai->getLoai();
        $dsphimyeuthich = $this->YeuThich->getYeuThich($id);
     

        $this->render('users/favorites_list', ['dsphimyeuthich' => $dsphimyeuthich, 'loai'=> $loai]);
        
    }
}

?>