<?php

class Menu extends Controller{
    public function index(){
        $data["judul"] = "Menu";
        $laporanModel = $this->model('Laporan_model');
        $data['labs'] = $laporanModel->getLab();
        $data['frekuensi'] = $laporanModel->getFrekuensi();
        $this->view("templates/header");
        $this->view("menu/index" ,$data);
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

    public function getLab($id_frek) {
        $lab = $this->model('Laporan_model')->getLabByFrekuensi($id_frek);
        echo json_encode($lab);
    }
    
    
}
