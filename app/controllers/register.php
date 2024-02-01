<?php


class Register extends Controller
{


  public function index()
  {

    $this->view("register/index");
  }

  public function tambah()
  {
    try{
    if ($this->model("UserModel")->regis($_POST) > 0) {

      header('Location: ' . BASEURL . '/login');
      exit;
    } else {

      header('Location: ' . BASEURL . '/register');
      exit;
    }
  } catch (\Throwable $th) {
    echo $th;
}
  }

  public function profil(){
    
  }
  

}