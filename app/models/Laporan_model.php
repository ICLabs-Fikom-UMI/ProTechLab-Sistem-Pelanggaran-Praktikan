<?php

class Laporan_model
{

    private $table = "data_laporan";

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLab()
    {
        $this->db->query("SELECT * FROM mst_lab");
        return $this->db->resultSet();
    }

    public function getFrekuensi()
    {
        $this->db->query("SELECT trx_frekuensi.id_frek, trx_frekuensi.nama_frek from trx_frekuensi ORDER BY trx_frekuensi.nama_frek ASC ");
        return $this->db->resultSet();
    }

    public function getPraktikan()
    {
        $this->db->query("SELECT mst_user.id_user, mst_user.nama, mst_user.nim FROM mst_user");
        return $this->db->resultSet();

    }

    public function getStatus()
    {
        $this->db->query("SELECT mst_status.nama_status FROM mst_status");
        return $this->db->resultSet();
    }
    public function getJurusan()
    {
        $this->db->query("SELECT mst_jurusan.jurusan FROM mst_jurusan");
        return $this->db->resultSet();
    }
    public function getMatkul()
    {
        $this->db->query("SELECT mst_matkul.nama_matkul FROM mst_matkul");
        return $this->db->resultSet();
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
        trx_laporan.nim,
        trx_frekuensi.nama_frek,
        trx_laporan.tempat,
        trx_laporan.deskripsi,
        trx_laporan.tgl_laporan,
        mst_user.username
    FROM
        trx_laporan
    INNER JOIN
        trx_frekuensi ON trx_laporan.id_frek = trx_frekuensi.id_frek
    INNER JOIN
        mst_user ON trx_laporan.id_user = mst_user.id_user
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
            $query = "INSERT INTO trx_frekuensi (nama_frek) VALUES (:nama_frek)";
            $this->db->query($query);
            $this->db->bind(':nama_frek', $data['nama_frek']);
    
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


}