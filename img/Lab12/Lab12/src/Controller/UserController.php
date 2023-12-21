<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Controller;

class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index(){
        $this->render('users\index', []);
    }

    public function userList()
    {
        // Fetch all users and display them in a view
        $users = $this->userModel->getAllUsers();
        //$data = [];
        //$data['users'] = $users;
        //include(__DIR__ . '/../View/users/user-list.php');
        //view('users\user-list', $data);

        $this->render('users\user-list', ['users' => $users]);
    }

    public function show($userId)
    {
        // Fetch a single user by ID and display in a view
        $user = $this->userModel->getUserById($userId);
        //$data = [];
        //$data['user'] = $user;
        //include(__DIR__ . '/../View/users/user-form.php');
        //view('users\user-form', $data);

        $this->render('users\user-form', ['user' => $user]);

    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processForm();
        } else {
            // Display the form for creating a new user
            //include 'views/user-form.php';
            $this->render('users\user-form', ['user' => []]);
        }
        
    }

    private function processForm(){
            // Retrieve form data
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Call the model to create a new user
            $user = $this->userModel->createUser($username, $password, $email);

            if ($user) {
                // Redirect to the user list page or show a success message
                header('Location: /user/index');
                exit();
            } else {
                // Handle the case where the user creation failed
                echo 'User creation failed.';
            }
    }

        // Display the form to create a new user
        
        //include(__DIR__ . '/../View/users/user-form.php');
        //$data = [];
        //$data['user'] = [];
        //view('users\user-form', $data);
        //$this->render('users\user-form', ['user' => []]);

    public function update($userId)
    {
        // Handle form submission to update a user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processFormUpdate($userId);
            /*
            // Retrieve form data
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Call the model to update the user
            $this->userModel->updateUser($userId, $username, $password, $email);
            */
        } else {
            // Fetch the user data and display the form to update
            $user = $this->userModel->getUserById($userId);
        
            //include(__DIR__ . '/../View/users/user-form.php');
            //$data = [];
            //$data['user'] = $user;
            //view('users\user-form', $data);
            $this->render('users\user-form', ['user' => $user]);

        }

        
    }
    
    private function processFormUpdate($userId){

        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Call the model to update the user
        // $this->userModel->updateUser($userId, $username, $password, $email);
        
        // Call the model to update the user
        $user = $this->userModel->updateUser($userId, $username, $password, $email);

        if ($user) {
            // Redirect to the user list page or show a success message
            header('Location: /user/index');
            exit();
        } else {
            // Handle the case where the user creation failed
            echo 'User update failed.';
        }
    }

    public function delete($userId)
    {
        // Call the model to delete the user
        $this->userModel->deleteUser($userId);

        // Redirect to the user list page after deletion
        header('Location: /index.php');
    }

    public function signin(){
        //header('Location: /src/View/users/signin.php');
        $this->render('users\signin', []);
    }

    public function logout(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_start();
            if(isset($_SESSION['currentUser'])){
                unset($_SESSION['currentUser']);
                session_destroy();
                header("Location: ../index");
                exit();
            }
        }
    }
}
