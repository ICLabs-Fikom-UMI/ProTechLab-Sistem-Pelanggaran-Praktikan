<?php

class Laporan_model{
    private $table = "trx_laporan";
    
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    

    public function getAllLaporan(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataLaporan($data) {
        $query = "INSERT INTO trx_laporan (nama, nim, frekuensi, lab, deskripsi, tgl_laporan) VALUES (:nama, :nim, :frekuensi, :lab, :deskripsi, :tgl_laporan)";
    
        $this->db->query($query);
    
        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('nim', $data["nim"]);
        $this->db->bind('frekuensi', $data["frekuensi"]);
        $this->db->bind('lab', $data["lab"]);
        $this->db->bind('deskripsi', $data["deskripsi"]);
        $this->db->bind('tgl_laporan', $data["tgl_laporan"]);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    


}