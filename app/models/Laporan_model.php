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
        $queryCekFrekuensi = "SELECT COUNT(*) FROM trx_frekuensi WHERE
        (nama_frek = :nama_frek ) AND
        id_frek != :id_frek";

        $this->db->query($queryCekFrekuensi);
        $this->db->bind('nama_frek', $data['nama_frek']);
        $this->db->bind('id_frek', $data['id_frek']);
        $this->db->execute();

        return $this->db->single()['COUNT(*)'];
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
    




    // public function getTindak()
    // {
    //     $this->db->query("SELECT
    //     mst_user.nama AS nama_praktikan,
    //     mst_user.nim AS nim,
    //     trx_frekuensi.nama_frek AS frekuensi,
    //     mst_lab.nama_lab AS lab,
    //     trx_laporan_pelanggaran.id_laporan AS nomor,
    //     trx_laporan_pelanggaran.deskripsi AS deskripsi,
    //     trx_laporan_pelanggaran.tgl_pelaporan AS tanggal
    // FROM
    //     mst_user
    // JOIN
    //     trx_frek_user ON trx_frek_user.id_user = mst_user.id_user
    // JOIN
    //     trx_frekuensi ON trx_frekuensi.id_frek = trx_frek_user.id_frek
    // JOIN
    //     mst_lab ON mst_lab.id_lab = trx_frekuensi.id_lab
    // JOIN
    //     trx_laporan_pelanggaran ON trx_laporan_pelanggaran.id_frek_user = trx_frek_user.id_frek_user
    // "

    //     );
    //     return $this->db->resultSet();
    // }


    //     public function cariDataMahasiswa()
// {
//     $keyword = $_POST["keyword"];
//     $query = "SELECT * FROM trx_laporan
//               WHERE nim LIKE :keyword OR
//                     nama LIKE :keyword OR
//                     frekuensi LIKE :keyword OR
//                     tempat LIKE :keyword OR
//                     deskripsi LIKE :keyword OR
//                     tgl_laporan LIKE :keyword";

    //     $this->db->query($query);
//     $this->db->bind(":keyword", "%$keyword%");
//     return $this->db->resultSet();
// }




    public function hapusData($id_frek)
    {
        $query = "DELETE FROM trx_frekuensi WHERE id_frek = :id_frek";
        $this->db->query($query);
        $this->db->bind("id_frek", $id_frek);


        $this->db->execute();
        return $this->db->rowCount();
    }


}