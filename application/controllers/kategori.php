<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class kategori extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
    }
    public function index()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('kategori/index', $data);

    }
}