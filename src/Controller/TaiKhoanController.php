<?php

namespace App\Controller;

use App\Model\TaiKhoan;
use App\Controller;


class TaiKhoanController extends Controller
{
    private $TaiKhoan;

    public function __construct()
    {
        $this->TaiKhoan = new TaiKhoan;
    }

    public function index(){
        $this->render('users\home', []);
    }

    public function login(){
        //header('Location: /src/View/users/signin.php');
        $this->render('users\login', []);
    }
    
    public function register(){
        //header('Location: /src/View/users/signin.php');
        $this->render('users\register', []);
    }

    public function logout(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_start();
            if(isset($_SESSION['currentUser'])){
                unset($_SESSION['currentUser']);
                session_destroy();
                header("Location: ../home");
                exit();
            }
        }
    }
}
