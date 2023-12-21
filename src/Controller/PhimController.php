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
    public function TimKiem($Id)
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