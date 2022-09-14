<?php

class About extends Controller {
    public function index() {
        $data["title"] = "About me";
        $this->view("template/header", $data);
        $this->view("about/index");
        $this->view("template/footer");
    }
    public function page($nama = "bagas"){
        $data["nama"] = $nama;
        $data["title"] = "My page";
        $this->view("template/header", $data);
        $this->view("about/page", $data);
        $this->view("template/footer");
    }
}