<?php

class Tatib extends Controller{
    public function index(){
        $data["judul"] = "Tata Tertib";
        $this->view("templates/header");
        $this->view("tatib/index");
        $this->view("templates/footer");
    }
}