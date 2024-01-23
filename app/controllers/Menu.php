<?php

class Menu extends Controller{
    public function index(){
        $data["judul"] = "Menu";
        $this->view("templates/header");
        $this->view("menu/index");
        $this->view("templates/footer");
    }

    public function lihat(){
        $data["judul"] = "Lihat";
        $data["lapor"]= $this->model("Laporan_model")->getAllLaporan();
        $this->view("templates/header");
        $this->view("menu/lihat" , $data);
        $this->view("templates/footer");

    }

    public function tambah() {
        if($this->model("Lporan_model")->tambahDataLaporan($_POST) > 0){
            Flasher::setFlash("berhasil","ditambahkan", "success");
            header('Location: ' . BASEURL . '/menu');
            exit;
        } else{
            Flasher::setFlash("gagal","ditambhakan", "danger");
            header('Location: ' . BASEURL . '/menu');
            exit;
        }
    }
    
}