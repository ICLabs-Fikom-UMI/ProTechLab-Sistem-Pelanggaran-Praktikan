<?php

class UserModel {
    private $table = "mst_user";
        
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function authenticateUser($username, $password) {
        
        $query = "SELECT * FROM $this->table WHERE BINARY username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $this->db->execute();

        return $this->db->rowCount() == 1;
    }

    public function regis($data) {
        $query = "INSERT INTO mst_user (nama, nim, username, role, password) VALUES (:nama, :nim, :username, :role, :password)";
        $this->db->query($query);
    
        
        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('nim', $data["nim"]);
        $this->db->bind('username', $data["username"]);
        $this->db->bind('role', isset($data["role"]) ? $data["role"] : 'praktikan');
        $this->db->bind('password', isset($data["password"]) ? $data["password"] : 'praktikan123');
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    
}
