<?php

class Login extends Controller {
    public function index() {
        $this->view("login/index");
    }


    public function authenticate() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $model = $this->model("UserModel");
            $authenticated = $model->authenticateUser($username, $password);

            if ($authenticated) {
                header('Location: ' . BASEURL . '/home/index');
                exit();
            } else {
                $data['error'] = 'Invalid credentials';
                $this->view("login/index", $data);
            }
        
   
    }
}
}