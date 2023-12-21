<?php
namespace App\Controller;

use App\Model\Phim;
use App\Controller;
use Collator;

class PhimController extends Controller{
    private $Phim ;

    public function __construct()
    {
        $this->Phim = new Phim();
    }
    public function dsPhim(){
        $phim =$this->Phim->getPhim();

        $this->render('users\home', ['phim' => $phim]);
    }


}



?>