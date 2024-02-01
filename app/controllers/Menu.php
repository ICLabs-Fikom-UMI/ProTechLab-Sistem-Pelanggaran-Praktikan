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
            $data["praktikan"] = $laporanModel->getPraktikan();
            $this->view("templates/header");
            $this->view("menu/index", $data);
            $this->view("templates/footer");
        } catch (\Throwable $th) {
            echo $th;
        }
    }


    public function tindak()
    {
        if ($_SESSION['role'] != 'admin') {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
        $data["judul"] = "lapor";
        $laporanModel = $this->model('Laporan_model');
        $data['frekuensi'] = $laporanModel->getFrekuensi();
        $data["lapor"] = $this->model("Laporan_model")->getTindak();
        $data["praktikan"] = $laporanModel->getPraktikan();
        $data["status"] = $laporanModel->getStatus();
        $this->view("templates/header");
        $this->view("menu/tindak", $data);
        $this->view("templates/footer");
    }



    public function lihat()
    {
        $data["judul"] = "Lihat";
        $data["lapor"] = $this->model("Laporan_model")->getAllLaporan();
        $this->view("templates/header");
        $this->view("menu/lihat", $data);
        $this->view("templates/footer");

    }

    public function cari()
{
    try {
        $data["judul"] = "Daftar Laporan";
        $data["lapor"] = $this->model("Laporan_model")->cariDataMahasiswa();

        // Check if the count of data is greater than 3
        if (count($data["lapor"]) >= 3) {
            // Set a success flash message
            Flasher::setFlash("Pelanggaran lebih dari 3", "anda tidak dapat mengikuti praktikum selanjutnya, silahkan bertemu pihak laboratorium untuk penindakan selanjutnya", "danger");
            
        }

        $this->view("templates/header");
        $this->view("menu/lihat", $data);
        $this->view("templates/footer");
    } catch (\Throwable $th) {
        echo $th;
    }
}

public function cariTindak()
{
    try {
        $data["judul"] = "Daftar Laporan";
        $data["lapor"] = $this->model("Laporan_model")->cariDataMahasiswa();

        // Check if the count of data is greater than 3
        if (count($data["lapor"]) >= 3) {
            // Set a success flash message
            Flasher::setFlash("Pelanggaran lebih dari 3", "praktikan sudah tidak dapat mengikuti praktikum selanjutnya", "danger");
            
        }

        $this->view("templates/header");
        $this->view("menu/tindak", $data);
        $this->view("templates/footer");
    } catch (\Throwable $th) {
        echo $th;
    }
}



    public function hapus($id_laporan){
        try {
        if($this->model("Laporan_model")->hapusData($id_laporan) > 0){
            Flasher::setFlash("berhasil","dihapus", "success");
            header('Location: ' . BASEURL . '/menu/tindak/');
            exit;
        } else{
            Flasher::setFlash("gagal","dihapus", "danger");
            header('Location: ' . BASEURL . '/menu/tindak/');
            exit;
        }
    } catch (\Throwable $th) {
        echo $th;
    }
    }



}
