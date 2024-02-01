<?php

class profile extends Controller {
    public function index(){
        $data["judul"] = "Profile";
        
        $this->view("templates/header", $data);
        $this->view("profile/index", $data);
        $this->view("templates/footer");
    }
}