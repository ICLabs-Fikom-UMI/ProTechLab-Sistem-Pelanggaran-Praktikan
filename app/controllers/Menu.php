<?php

class Menu extends Controller
{

    public function tindak()
    {
        try {
            $data["judul"] = "tindak";
            $laporanModel = $this->model('Laporan_model');
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
        $this->view("templates/footer", $data);

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
            if ($this->model("Laporan_model")->tambahFrekuensi($_POST) > 0) {
                Flasher::setFlash("berhasil", "dirubah", "success");
                header('Location: ' . BASEURL . '/menu/edit/');
                exit;
            } else {
                Flasher::setFlash("gagal", "dirubah", "danger");
                header('Location: ' . BASEURL . '/menu/edit/');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }

    }

    public function getUbah()
    {
        echo json_encode($this->model("Laporan_model")->getFrekuensiByid($_POST["id"]));
    }

    public function ubah()
    {
    //   var_dump($_POST);  
    if ($this->model("Laporan_model")->ubahFrekuensi($_POST) > 0) {
        Flasher::setFlash("berhasil", "dirubah", "success");
        header('Location: ' . BASEURL . '/menu/edit/');
        exit;
    } else {
        Flasher::setFlash("gagal", "dirubah", "danger");
        header('Location: ' . BASEURL . '/menu/edit/');
        exit;
    }
    //     try {
            
    //     } catch (\Throwable $th) {
    //         echo $th;
    //     }
    }


}
