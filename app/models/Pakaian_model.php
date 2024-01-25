<?php

class Pakaian_model{
private $table = "pakaian";
private $db;
public function __construct(){
    $this->db = new Database;
}

    public function getPakaian(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getPakaianById($id){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }    

    public function tambahDataPakaian($data){
        $query = "INSERT INTO pakaian (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";
    
        $this->db->query($query);
    
        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('nrp', $data["nrp"]);
        $this->db->bind('email', $data["email"]);
        $this->db->bind('jurusan', $data["jurusan"]);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    public function hapusDataPakaian($id){
        $query = "DELETE FROM pakaian WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $id);


        $this->db->execute();   
        return $this->db->rowCount();
    }


}