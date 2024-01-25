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
}
