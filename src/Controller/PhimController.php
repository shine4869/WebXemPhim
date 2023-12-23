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


    public function TimKiem()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $key = $_POST['search'];


            if($key != null){                
                $phim = $this->Phim->timkiemphimtheoten($key);
                $_SESSION['currentphim'] = $phim;
                header("Location: ../user/home");
                exit();

            }
            else{
                $phim =$this->Phim->getPhim();
                $_SESSION['currentphim'] = $phim;
                header("Location: ../user/home");
                exit();
            }
        
        }
    }
}


?>