<?php

class Menu extends Controller
{
    public function index()
    {
        try {
            $data["judul"] = "Menu";
            $laporanModel = $this->model('Laporan_model');
            $data['frekuensi'] = $laporanModel->getFrekuensi();
            $data["lapor"] = $this->model("Laporan_model")->getAllLaporan();
            $data["praktikan"] = 
            $this->view("templates/header");
            $this->view("menu/index", $data);
            $this->view("templates/footer");
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    

    public function lihat()
    {
        $data["judul"] = "Lihat";
        $data["lapor"] = $this->model("Laporan_model")->getAllLaporan();
        $this->view("templates/header");
        $this->view("menu/lihat", $data);
        $this->view("templates/footer");

    }



    public function tambah()
    {

        try {
            if ($this->model("Laporan_model")->tambahDataLaporan($_POST) > 0) {
                Flasher::setFlash("berhasil", "ditambahkan", "success");
                header('Location: ' . BASEURL . '/menu');
                exit;
            } else {
                Flasher::setFlash("gagal", "ditambahakan", "danger");
                header('Location: ' . BASEURL . '/menu');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }





}
