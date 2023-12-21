<?php
namespace App\Controller;

use App\Controller;
use App\Model\Phim ;

class ChiTietController extends Controller{
    private $Phim;
    public function __construct()
    {
        $this->Phim = new Phim();
    }
    public function showPhim($MaPhim) {
        $ctphim = $this->Phim->getPhimtheoma($MaPhim);

        $this->render('users\detail', ['ctphim' => $ctphim]);
        
    }
}


?>