<?php

class Menu extends Controller
{

    public function tindak()
    {
        try {
            $data["judul"] = "tindak";
            $laporanModel = $this->model('Laporan_model');
            $data["lapor"] = $this->model("Laporan_model")->getAllLaporanTindak();
            $data["statusOptions"] = $this->model("Laporan_model")->getStatus();
            $data["frekuensi"] = $laporanModel->getFrekuensi();
            $data["status"] = $this->model("Laporan_model")->getStatus();
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

    public function akun()
    {
        try {
            $data["judul"] = "akun";
            $laporanModel = $this->model('Laporan_model');
            $data['akun'] = $laporanModel->getAkun();
            $this->view("templates/header");
            $this->view("menu/akun", $data);
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
        $data["frekuensi"] = $this->model("Laporan_model")->getFrekuensi();
        $data["statusOptions"] = $this->model("Laporan_model")->getStatus();
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

    public function hapusAkun($id_user)
    {
        try {
            if ($this->model("Laporan_model")->hapusDataAkun($id_user) > 0) {
                Flasher::setFlash("berhasil", "dihapus", "success");
                header('Location: ' . BASEURL . '/menu/akun/');
                exit;
            } else {
                Flasher::setFlash("gagal", "dihapus", "danger");
                header('Location: ' . BASEURL . '/menu/akun/');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function hapusLaporan($id_laporan)
    {

        try {
            if ($this->model("Laporan_model")->hapusDataLaporan($id_laporan) > 0) {
                Flasher::setFlash("berhasil", "dihapus", "success");
                header('Location: ' . BASEURL . '/menu/tindak/');
                exit;
            } else {
                Flasher::setFlash("gagal", "dihapus", "danger");
                header('Location: ' . BASEURL . '/menu/tindak/');
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
                Flasher::setFlash("berhasil", "ditambahkan ", "success");
                header('Location: ' . BASEURL . '/menu/edit/');
                exit;
            } else {
                Flasher::setFlash("gagal", "ditambahkan karena sudah ada", "danger");
                header('Location: ' . BASEURL . '/menu/edit/');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }

    }
    public function tambahAkun()
    {
        try {
            if ($this->model("Laporan_model")->tambahAkunBaru($_POST) > 0) {
                Flasher::setFlash("berhasil", "ditambahkan ", "success");
                header('Location: ' . BASEURL . '/menu/akun/');
                exit;
            } else {
                Flasher::setFlash("gagal", "ditambahkan karena sudah ada", "danger");
                header('Location: ' . BASEURL . '/menu/akun/');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }

    }
    public function tambahLaporanLihat()
    {


        try {
            if ($this->model("Laporan_model")->tambahDataLapor($_POST) > 0) {
                Flasher::setFlash("berhasil", "ditambahkan ", "success");
                header('Location: ' . BASEURL . '/menu/lihat/');
                exit;
            } else {
                Flasher::setFlash("gagal", "ditambahkan karena sudah ada", "danger");
                header('Location: ' . BASEURL . '/menu/lihat/');
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
        if ($this->model("Laporan_model")->ubahFrekuensi($_POST) > 0) {
            Flasher::setFlash("berhasil", "dirubah", "success");
            header('Location: ' . BASEURL . '/menu/edit/');
            exit;
        } else {
            Flasher::setFlash("gagal", "dirubah", "danger");
            header('Location: ' . BASEURL . '/menu/edit/');
            exit;
        }
    }
    public function getUbahAkun()
    {
        echo json_encode($this->model("Laporan_model")->getAkunByid($_POST["id"]));
    }

    public function AkunUbah()
    {
        if ($this->model("Laporan_model")->ubahAkun($_POST) > 0) {
            Flasher::setFlash("Akun berhasil", "dirubah", "success");
            header('Location: ' . BASEURL . '/menu/akun/');
            exit;
        } else {
            Flasher::setFlash("Akun gagal", "dirubah", "danger");
            header('Location: ' . BASEURL . '/menu/akun/');
            exit;
        }
    }

    public function laporUbah()
    {
        echo json_encode($this->model("Laporan_model")->getLaporanByid($_POST["id"]));
    }

    public function editLaporan()
    {
        try {
            if ($this->model("Laporan_model")->ubahLaporan($_POST) > 0) {
                Flasher::setFlash("berhasil", "dirubah", "success");
                header('Location: ' . BASEURL . '/menu/tindak/');
                exit;
            } else {
                Flasher::setFlash("gagal", "dirubah", "danger");
                header('Location: ' . BASEURL . '/menu/tindak/');
                exit;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }


}
