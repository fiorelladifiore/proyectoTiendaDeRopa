<?php
require_once 'app/view/authView.php';
require_once 'app/model/authModel.php';

class authController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new authView();
        $this->model = new authModel();
    }

    function showingLogin()
    {
        $this->view->showLogin();
    }
    
    function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = $this->model->getUser($username);

                if ($user && password_verify($password, $user->password)) {
                    session_start();
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['USERNAME'] = $user->username;
                    $_SESSION['ROLE'] = $user->role;
                    header("Location:" . BASE_URL . "home");die();
                } else {
                    $this->view->showLogin("Usuario incorrecto");
                }
            } else {
                $this->view->showLogin("faltan datos obligatorios");
            }
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location:" . BASE_URL . "login");die();
    }
}