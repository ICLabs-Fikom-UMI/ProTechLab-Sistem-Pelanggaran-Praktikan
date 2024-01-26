<?php

class Laporan_model{
    
    private $table = "data_laporan_view";
    
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    

    public function getAllLaporan(){
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataLaporan($data) {
        $query = ("INSERT INTO trx_laporan_pelanggaan (:id_laporan, :id_user, :id_frek_user, :tgl_pelaporan, :deskripsi)
        SELECT 
            mst_user.nama AS nama_praktikan,
            mst_user.nim AS nim,
            trx_frek_user.id_frek,
            trx_frekuensi.nama_frek AS frekuensi,
            mst_lab.nama_lab AS lab,
            trx_laporan_pelanggaran.deskripsi AS deskripsi,
            trx_laporan_pelanggaran.tgl_pelaporan AS tanggal
        FROM 
            mst_user
        INNER JOIN 
            trx_frek_user ON trx_frek_user.id_user = mst_user.id_user
        INNER JOIN 
            trx_frekuensi ON trx_frekuensi.id_frek = trx_frek_user.id_frek
        INNER JOIN 
            mst_lab ON mst_lab.id_lab = trx_frekuensi.id_lab
        INNER JOIN 
            trx_laporan_pelanggaran ON trx_laporan_pelanggaran.id_frek_user = trx_frek_user.id_frek_user");
    
        $this->db->query($query);
    
        $this->db->bind('nama_praktikan', $data["nama"]);
        $this->db->bind('nim', $data["nim"]);
        $this->db->bind('frekuensi', $data["frekuensi"]);
        $this->db->bind('lab', $data["lab"]);
        $this->db->bind('deskripsi', $data["deskripsi"]);
        $this->db->bind('tanggal', $data["tanggal"]);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    


}