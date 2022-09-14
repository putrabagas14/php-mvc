<?php

class Controller {
    public function view($url, $data = []) {
        require "../app/views/". $url . ".php";
    }
}