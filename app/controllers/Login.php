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
                Flasher::setFlash("berhasil","log-in", "success");
                header('Location: ' . BASEURL . '/home/index');
                exit();
            } else {
                $data['error'] = 'Invalid credentials';
                Flasher::setFlash("gagal","masuk", "danger");
                $this->view("login/index", $data);
            }
        }
    }

    public function logout() {
        session_unset();
        session_destroy();

        header('Location: ' . BASEURL . '/login');
        exit;
    }
}