<?php


class Login extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id_user'])) {
            header('Location: ' . BASEURL . '/home/index');
            exit();
        }
        $this->view("login/index");
    }


    public function authenticate()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $model = $this->model("UserModel");
            $authenticated = $model->authenticateUser($username, $password);

            if ($authenticated) {
                $data = $this->model('UserModel')->getUserByUsername($username);
                $_SESSION["role"] = $data["role"];
                $_SESSION["id_user"] = $data["id_user"];
                $_SESSION["username"] = $data["username"];


                header('Location: ' . BASEURL . '/home/index');
                exit();
            } else {
                $data['error'] = 'Invalid credentials';

                $this->view("login/index", $data);
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header('Location: ' . BASEURL . '/login');
        exit;
    }
}