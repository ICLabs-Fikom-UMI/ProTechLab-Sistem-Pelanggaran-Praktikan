<?php

class User_model{
    private $nama = "naufal";

    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getUser(){
        return $this->nama;
    }

    public function jumlahPeringatan() {
        $query = "SELECT COUNT(*) AS jumlah_data FROM trx_tindak_lanjut WHERE id_status = 1";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function dataLaporan()
    {
        $this->db->query("SELECT COUNT(*) as total FROM trx_laporan");
        return $this->db->single();
    }
    
}

