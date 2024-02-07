<?php

class Menu extends Controller
{



    public function tindak()
    {
        try {
            $data["judul"] = "tindak";
            $laporanModel = $this->model('Laporan_model');
            // $data['frekuensi'] = $laporanModel->getFrekuensi();
            $data["lapor"] = $this->model("Laporan_model")->getAllLaporanTindak();
            $data["praktikan"] = $laporanModel->getPraktikan();
            $data["status"] = $laporanModel->getStatus();
            $data["frekuensi"] = $laporanModel->getFrekuensi();
            $this->view("templates/header");
            $this->view("menu/tindak", $data);
            $this->view("templates/footer", $data);
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function edit()
    {
        try {
            $data["judul"] = "edit";
            $laporanModel = $this->model('Laporan_model');
            $data['cekfrekuensi'] = $laporanModel->cekFrekuensi($data);
            $data['frekuensi'] = $laporanModel->getFrekuensi();
            $this->view("templates/header");
            $this->view("menu/edit", $data);
            $this->view("templates/footer", $data);
        } catch (\Throwable $th) {
            echo $th;
        }
    }



    public function lihat()
    {
        $data["judul"] = "Lihat";
        $data["lapor"] = $this->model("Laporan_model")->getAllLaporanLihat();
        $data["status"] = $this->model("Laporan_model")->getStatus();
        $this->view("templates/header");
        $this->view("menu/lihat", $data);
        $this->view("templates/footer" , $data);

    }



    public function hapusFrekuensi($id_frek)
    {
        try {
            if ($this->model("Laporan_model")->hapusData($id_frek) > 0) {
                Flasher::setFlash("berhasil", "dihapus", "success");
                header('Location: ' . BASEURL . '/menu/edit/');
                exit;
            } else {
                Flasher::setFlash("gagal", "dihapus", "danger");
                header('Location: ' . BASEURL . '/menu/edit/');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function tambahFrekuensi()
{
    try {
        $laporanModel = $this->model("Laporan_model");

        // Ambil data dari form
        $data = [
            'nama_frek' => $_POST['nama_frek']
        ];
   

        // Cek apakah frekuensi sudah ada
        $cekFrekuensi = $laporanModel->cekFrekuensi($data);
   
        if ($cekFrekuensi > 0) {
            // Jika frekuensi sudah ada, tampilkan pesan kesalahan
            Flasher::setFlash("gagal", "Frekuensi sudah ada", "danger");
        } else {
            // Jika frekuensi belum ada, tambahkan data
            if ($laporanModel->tambahFrekuensi($data) > 0) {
                Flasher::setFlash("berhasil", "ditambahkan", "success");
            } else {
                Flasher::setFlash("gagal", "ditambahkan", "danger");
            }
        }

        // Redirect ke halaman edit
        header('Location: ' . BASEURL . '/menu/edit/');
        exit;
    } catch (\Throwable $th) {
        echo $th;
    }
}







}
