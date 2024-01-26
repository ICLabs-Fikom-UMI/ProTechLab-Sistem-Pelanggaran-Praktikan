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
        $this->view("templates/header");
        $this->view("menu/lihat" , $data);
        $this->view("templates/footer");

    }

    public function tambah() {
        try {
            if($this->model("Laporan_model")->tambahDataLaporan($_POST) > 0){
                Flasher::setFlash("berhasil","ditambahkan", "success");
                header('Location: ' . BASEURL . '/menu');
                exit;
            } else{
                Flasher::setFlash("gagal","ditambahakan", "danger");
                header('Location: ' . BASEURL . '/menu');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    
}