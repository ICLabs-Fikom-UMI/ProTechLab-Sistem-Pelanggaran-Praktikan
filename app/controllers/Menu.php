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
            $this->view("templates/header");
            $this->view("menu/lihat", $data);
            $this->view("templates/footer");
        } catch (\Throwable $th) {
            echo $th;
        }
    }



    public function hapus($id)
    {
        try {
            if ($this->model("Laporan_model")->hapusData($id) > 0) {
                Flasher::setFlash("berhasil", "dihapus", "success");
            } else {
                Flasher::setFlash("gagal", "dihapus", "danger");
            }
        } catch (\Throwable $th) {
            echo $th;
        }
        header('Location: ' . BASEURL . '/menu/tindak');
        exit;
    }



}
