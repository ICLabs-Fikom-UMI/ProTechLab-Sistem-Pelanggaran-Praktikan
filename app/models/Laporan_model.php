<?php

class Laporan_model{
    private $table = "data_laporan";
    
    
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    

    public function getAllLaporan(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataLaporan($data) {
        $query = "SELECT * FROM  (nama_praktikan, nim, frekuensi, lab, deskripsi, tanggal) VALUES (:nama_praktikan, :nim, :frekuensi, :lab, :deskripsi, :tanggal)";
    
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