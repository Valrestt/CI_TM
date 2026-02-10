<?php
class hello extends CI_controller{
    public function index()
    {
        $data['nama'] = "aditya pratama";
        $this->load->view('hello_view',$data);
    }
}
