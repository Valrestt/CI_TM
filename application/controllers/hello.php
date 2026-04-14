<?php

class hello extends CI_Controller {

    public function index()
{
    $data['nama'] = "Mahesa Ibrahim";
    $this->load->view('hello_view' ,$data);
}
    public function namasaya()
{
    $data['nama'] = "mahesa";
    $this->load->view('hello_view' ,$data);
}
}

