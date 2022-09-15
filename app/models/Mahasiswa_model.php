<?php

class Mahasiswa_model {
    private $dbh;
    private $statementt;

    public function __construct()
    {
        // data source name
        $dsn = "mysql:host=localhost;dbname=php_mvc";

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function index(){
        $this->statementt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->statementt->execute();
        return $this->statementt->fetchAll(PDO::FETCH_ASSOC);
    }
}