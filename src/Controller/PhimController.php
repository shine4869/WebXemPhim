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
    public function showPhim($Id)
    {
        // Fetch a single user by ID and display in a view
        $phim =$this->Phim->getPhimtheoma($Id);
        //$data = [];
        //$data['user'] = $user;
        //include(__DIR__ . '/../View/users/user-form.php');
        //view('users\user-form', $data);

        $this->render('users\detail', ['phim' => $phim]);

    }



}



?>