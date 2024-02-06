<?php

class Tatib extends Controller{
    public function index(){
        $data["judul"] = "Tata Tertib";
        $this->view("templates/header");
        $this->view("tatib/index");
        $this->view("templates/footer");
    }

    public function detail(){
        $data["judul"] = "Detail Pelanggaran";
        $this->view("templates/header");
        $this->view("tatib/detail");
        $this->view("templates/footer");
    }
}