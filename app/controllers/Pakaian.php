<?php

class Pakaian extends Controller {
    public function index(){
        $data["judul"] = "Aturan Pakaian";
        $data["pakaian"] = $this->model("Pakaian_model")->getPakaian();
        $this->view("templates/header", $data);
        $this->view("pakaian/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id){
        $data["judul"] = "detail Pakaian";
        $data["pakaian"] = $this->model("Pakaian_model")->getPakaianById($id);
        $this->view("templates/header", $data);
        $this->view("pakaian/detail", $data);
        $this->view("templates/footer");
    }

    public function tambah(){
        if($this->model("Pakaian_model")->tambahDataPakaian($_POST) > 0){
            header("Location" . BASEURL ."/pakaian");
            exit;
        }
    }
}