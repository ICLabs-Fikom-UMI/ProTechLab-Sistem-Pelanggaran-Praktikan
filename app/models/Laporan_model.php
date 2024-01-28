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
        $this->db->query("SELECT * FROM trx_frekuensi ORDER BY nama_frek");
        return $this->db->resultSet();
    }
    

    public function getAllLaporan(){
        $this->db->query("SELECT * FROM ". $this->table);
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
    
    public function getLabByFrekuensi($id_frek) {
        $this->db->query("SELECT * FROM mst_lab WHERE id_lab = (SELECT id_lab FROM trx_frekuensi WHERE id_frek = :id_frek)");
        $this->db->bind('id_frek', $id_frek);
        return $this->db->single();
    }
    
    
    // Contoh model
 


}