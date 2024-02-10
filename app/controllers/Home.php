<?php

class Home extends Controller{
    public function index(){
        $data["judul"] = "Home"; 
        $data["nama"] = $this->model("User_model")->getUser();
        $data["data"]= $this->model("User_model")->jumlahPeringatan();
        $data["total"]= $this->model("User_model")->dataLaporan();
        $this->view("templates/header");
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }

    
}