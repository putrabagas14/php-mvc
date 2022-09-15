<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data["title"] = "Daftar Mahasiswa";
        $data["mahasiswa"] = $this->model("Mahasiswa_model")->index();
        $this->view("template/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("template/footer");
    }
}