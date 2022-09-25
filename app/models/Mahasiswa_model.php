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

    public function tambah($data)
    {
        $query = "INSERT INTO mahasiswa
                VALUES
                ('', :nama, :nrp, :email, :jurusan)
        ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->hitungBaris();
    }

    public function delete($id) {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->hitungBaris();
    }

    public function update($data){
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                    WHERE id = :id
        ";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->hitungBaris();
    }

    public function search(){
        $keyword = $_POST["keyword"];
        $this->db->query("SELECT * FROM ". $this->table . " WHERE nama LIKE :keyword");
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }
}