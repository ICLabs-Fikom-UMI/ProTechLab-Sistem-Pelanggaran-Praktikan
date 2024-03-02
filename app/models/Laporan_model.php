<?php

class Laporan_model
{

    private $table = "trx_frekuensi";

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getFrekuensi()
    {
        $this->db->query("SELECT trx_frekuensi.id_frek, trx_frekuensi.nama_frek from trx_frekuensi ORDER BY trx_frekuensi.nama_frek ASC ");
        return $this->db->resultSet();
    }
    public function getAkun()
    {
        $this->db->query("SELECT mst_user.id_user, mst_user.username, mst_user.nim, mst_user.role, mst_user.password FROM mst_user ");
        return $this->db->resultSet();
    }

    public function getStatus()
    {
        $this->db->query("SELECT id_status, nama_status FROM mst_status");
        return $this->db->resultSet();
    }

    

    public function getFrekuensiByid($id_frek)
    {
        $this->db->query("SELECT * FROM trx_frekuensi " . $this->table . " WHERE id_frek = :id_frek");
        $this->db->bind(":id_frek", $id_frek);
        return $this->db->single();
    }
    public function getAkunByid($id_user)
    {
        $this->db->query("SELECT * FROM mst_user  WHERE id_user = :id_user");
        $this->db->bind(":id_user", $id_user);
        return $this->db->single();
    }

    public function getAllLaporanByid($id_laporan)
    {
        $this->db->query("SELECT * FROM trx_laporan WHERE id_laporan = :id_laporan");
        $this->db->bind(":id_laporan", $id_laporan);
        return $this->db->single();
    }


    public function getStatusByid($id_status)
    {
        $this->db->query("SELECT * FROM mst_status WHERE id_status = :id_status");
        $this->db->bind(":id_status", $id_status);
        return $this->db->single();
    }


    public function getAllLaporanLihat()
    {
        $this->db->query(
            "SELECT trx_laporan.nim, trx_frekuensi.nama_frek, trx_laporan.tempat, trx_laporan.deskripsi, trx_laporan.tgl_laporan FROM trx_laporan JOIN trx_frekuensi ON trx_laporan.id_frek = trx_frekuensi.id_frek"
        );
        return $this->db->resultSet();
    }
    public function getAllLaporanTindak()
    {
        $this->db->query("SELECT
            trx_laporan.id_laporan,
            trx_laporan.semester,
            trx_laporan.nim,
            trx_frekuensi.nama_frek,
            trx_laporan.tempat,
            trx_laporan.deskripsi,
            trx_laporan.tgl_laporan,
            mst_status.nama_status,
            trx_laporan.photo_path,
            mst_user.username
        FROM
            trx_laporan
        INNER JOIN
            trx_frekuensi ON trx_laporan.id_frek = trx_frekuensi.id_frek
        INNER JOIN
            mst_user ON trx_laporan.id_user = mst_user.id_user
        INNER JOIN
            mst_status ON trx_laporan.id_status = mst_status.id_status
        ORDER BY
            trx_laporan.tgl_laporan DESC
        ");

        return $this->db->resultSet();
    }


    public function cekFrekuensi($data)
    {
        $queryCekFrekuensi = "SELECT COUNT(*) as total FROM trx_frekuensi WHERE
            nama_frek = :nama_frek ";

        $this->db->query($queryCekFrekuensi);
        $this->db->bind('nama_frek', $data['nama_frek']);
        $this->db->execute();

        return $this->db->single()['total'];
    }



    public function tambahFrekuensi($data)
    {
        try {
            // Cek apakah nama_frek sudah ada
            $cekQuery = "SELECT COUNT(*) as total FROM trx_frekuensi WHERE nama_frek = :nama_frek";
            $this->db->query($cekQuery);
            $this->db->bind(':nama_frek', $data['nama_frek']);
            $this->db->execute();

            $result = $this->db->single();
            $total = $result['total'];

            if ($total > 0) {
                // Jika nama_frek sudah ada, beri tanggapan atau lakukan tindakan sesuai kebutuhan
                return 0; // Misalnya, mengembalikan nilai 0 untuk menandakan nama_frek sudah ada
            }

            // Jika nama_frek belum ada, eksekusi query INSERT
            $insertQuery = "INSERT INTO trx_frekuensi (nama_frek) VALUES (:nama_frek)";
            $this->db->query($insertQuery);
            $this->db->bind(':nama_frek', $data['nama_frek']);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    private function uploadPhoto()
    {
        $file = $_FILES['photo_path'] ;
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];

        $destination = 'img/uploads/' . $fileName;
            move_uploaded_file($fileTmpName, $destination);
            return $destination;

    }



    public function tambahDataLapor($data)
    {
        try {

            $insertQuery = "INSERT INTO trx_laporan (semester, nim, id_frek, tempat, deskripsi, tgl_laporan, id_user, id_status, photo_path) VALUES (:semester, :nim, :id_frek, :tempat, :deskripsi, :tgl_laporan, :id_user, :id_status, :photo_path)";
            $photo_path = $this->uploadPhoto();
            $this->db->query($insertQuery);
            $this->db->bind(':semester', $data['semester']);
            $this->db->bind(':nim', $data['nim']);
            $this->db->bind(':id_frek', $data['id_frek']);
            $this->db->bind(':tempat', $data['tempat']);
            $this->db->bind(':deskripsi', $data['deskripsi']);
            $this->db->bind(':tgl_laporan', $data['tgl_laporan']);
            $this->db->bind(':id_user', $data['id_user']);
           
            $this->db->bind(':id_status', $data['id_status']);
            $this->db->bind(':photo_path', $photo_path);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function tambahAkunBaru($data)
    {
        try {
            $insertQuery = "INSERT INTO mst_user (username, nim,  role, password) 
                        VALUES (:username, :nim,  :role, :password)";

            $this->db->query($insertQuery);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':nim', $data['nim']);
            $this->db->bind(':role', $data['role']);
            $this->db->bind(':password', $data['password']);
            $this->db->execute();

            return $this->db->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }





    public function hapusData($id_frek)
    {
        $query = "DELETE FROM trx_frekuensi WHERE id_frek = :id_frek";
        $this->db->query($query);
        $this->db->bind("id_frek", $id_frek);


        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataAkun($id_user)
    {
        try {
        $query = "DELETE FROM mst_user WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind("id_user", $id_user);

        $this->db->execute();
        return $this->db->rowCount();
    } catch (\Throwable $th) {
        throw $th;
    }
    }

    public function hapusDataLaporan($id_laporan)
    {
        $query = "DELETE FROM trx_laporan WHERE id_laporan = :id_laporan";
        $this->db->query($query);
        $this->db->bind("id_laporan", $id_laporan);

        $this->db->execute();
        return $this->db->rowCount();
    }



    public function ubahFrekuensi($data)
    {
        $query = "UPDATE trx_frekuensi SET nama_frek = :nama_frek WHERE id_frek = :id_frek";
        $this->db->query($query);

        $this->db->bind(':nama_frek', $data['nama_frek']);
        $this->db->bind(':id_frek', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function ubahAkun($data)
    {
        $query = "UPDATE mst_user SET username = :username, nim = :nim, role = :role , password = :password WHERE id_user = :id_user";
        $this->db->query($query);

        $this->db->bind(':username', $data['username']);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id_user', $data['id_user']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function ubahLaporan($data)
    {
           
            
            $query = "UPDATE trx_laporan SET 
                    semester = :semester,
                    nim = :nim,
                    id_frek = :id_frek,
                    tempat = :tempat,
                    deskripsi = :deskripsi,
                    tgl_laporan = :tgl_laporan,
                    id_user = :id_user,
                    id_status = :id_status,
                    photo_path = :photo_path
                    WHERE id_laporan = :id_laporan";
            $photo_path = $this->uploadPhoto();


            $this->db->query($query);

            $this->db->bind(':semester', $data['semester']);
            $this->db->bind(':nim', $data['nim']);
            $this->db->bind(':id_frek', $data['id_frek']);
            $this->db->bind(':tempat', $data['tempat']);
            $this->db->bind(':deskripsi', $data['deskripsi']);
            $this->db->bind(':tgl_laporan', $data['tgl_laporan']);
            $this->db->bind(':id_user', $data['id_user']);
            $this->db->bind(':id_status', $data['id_status']);
            $this->db->bind('photo_path', $photo_path);

        $this->db->bind(':id_laporan', $data['id_laporan']);
        $this->db->execute();

        return $this->db->rowCount();

    }
    private function getPhotoPathByID($userID) {
        $this->db->query("SELECT photo_path FROM trx_laporan WHERE id_laporan = :id_laporan");
        $this->db->bind(':id_laporan', $userID);
        $result = $this->db->single();
        return $result['photo_path'];
    }


}