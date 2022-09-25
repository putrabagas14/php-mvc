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

    public function search()
    {
        $data["title"] = "Daftar Mahasiswa";
        $data["mahasiswa"] = $this->model("Mahasiswa_model")->search();
        $this->view("template/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("template/footer");
    }

    public function detail($id)
    {
        $data["title"] = "Detail Mahasiswa";
        $data["mahasiswa"] = $this->model("Mahasiswa_model")->detail($id);
        $this->view("template/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("template/footer");
    }

    public function tambah()
    {
        if($this->model("Mahasiswa_model")->tambah($_POST) > 0 ){
            Flasher::setFlash("berhasil", "ditambahkan", "success");
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash("berhasil", "ditambahkan", "danger");
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function delete($id)
    {
        if($this->model("Mahasiswa_model")->delete($id) > 0 ){
            Flasher::setFlash("berhasil", "menghapus", "success");
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash("berhasil", "menghapus", "danger");
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function update()
    {
        if($this->model("Mahasiswa_model")->update($_POST) > 0 ){
            Flasher::setFlash("berhasil", "diubah", "success");
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash("gagal", "diubah", "danger");
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}