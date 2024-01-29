<?php

class Laporan_model{
    
    private $table = "data_laporan";
    
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getLab() {
        $this->db->query("SELECT * FROM mst_lab");
        return $this->db->resultSet();
    }

    public function getFrekuensi() {
        $this->db->query("SELECT trx_frekuensi.nama_frek , mst_lab.nama_lab FROM trx_frekuensi INNER JOIN mst_lab ON trx_frekuensi.id_lab = mst_lab.id_lab");
        return $this->db->resultSet();
    }
    

    public function getAllLaporan(){
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();
    }

    public function getPraktikan($id_frek) {
        $this->db->query("SELECT mst_user.nama, mst_user.nim, trx_frekuensi.nama_frek
                          FROM mst_user
                          INNER JOIN trx_frek_user ON mst_user.id_user = trx_frek_user.id_user
                          INNER JOIN trx_frekuensi ON trx_frekuensi.id_frek = trx_frek_user.id_frek
                          WHERE trx_frek_user.id_frek = :id_frek");
        $this->db->bind('id_frek', $id_frek);
        return $this->db->resultSet();
    }
    


    public function tambahDataLaporan($data) {
        $query = "
            INSERT INTO trx_laporan_pelanggaran (id_user, id_frek_user, tgl_pelaporan, deskripsi, nama_user)
            SELECT
                mst_user.id_user,
                trx_frek_user.id_frek_user,
                :tanggal,
                :deskripsi,
                mst_user.nama AS nama_praktikan
            FROM
                mst_user
            JOIN
                trx_frek_user ON trx_frek_user.id_user = mst_user.id_user
            JOIN
                trx_frekuensi ON trx_frekuensi.id_frek = trx_frek_user.id_frek
            JOIN
                mst_lab ON mst_lab.id_lab = trx_frekuensi.id_lab
            JOIN
                trx_laporan_pelanggaran ON trx_laporan_pelanggaran.id_frek_user = trx_frek_user.id_frek_user
            WHERE
                mst_user.id_user = :id_user"; // Gantilah dengan kondisi yang sesuai
    
        $this->db->query($query);
    
        // Bind deskripsi, tanggal, dan parameter tambahan jika diperlukan
        $this->db->bind('deskripsi', $data["deskripsi"]);
        $this->db->bind('tanggal', $data["tanggal"]);
        $this->db->bind('id_user', $data["id_user"]); // Tambahkan parameter yang sesuai
    
        // Eksekusi query
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    

    
    
    
  


}