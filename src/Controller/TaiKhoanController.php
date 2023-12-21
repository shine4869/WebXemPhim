<?php

namespace App\Controller;

use App\Model\TaiKhoan;
use App\Controller;
use App\Model\LoaiPhim;

class TaiKhoanController extends Controller
{
    private $TaiKhoan;
    private $loai;

    public function __construct()
    {
        $this->TaiKhoan = new TaiKhoan;
        $this->loai= new LoaiPhim;
    }



    public function login(){
        //header('Location: /src/View/users/signin.php');
        $loai = $this->loai->getLoai();

        $this->render('users\login', ['loai'=> $loai]);
    }
    
    public function register(){
        //header('Location: /src/View/users/signin.php');
        $loai = $this->loai->getLoai();
        $this->render('users\register', ['loai'=> $loai]);
    }

    public function logout(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_start();
            if(isset($_SESSION['currentUser'])){
                unset($_SESSION['currentUser']);
                session_destroy();
                $this->render('users\register', []);
                exit();
            }
        }
    }
}
