<?php

class Mahasiswa_model {
    // private $dbh;
    // private $statementt;

    // public function __construct()
    // {
    //     // data source name
    //     $dsn = "mysql:host=localhost;dbname=php_mvc";

    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    private $table = "mahasiswa";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function index(){
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();
    }

    public function detail($id)
    {
        // $this->db->query("SELECT * FROM ". $this->table ." WHERE id = ". $id);
        $this->db->query("SELECT * FROM ". $this->table ." WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}