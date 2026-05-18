<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')){
            redirect('login');
        }
    }   

    public function index()
    {
        $data['total_kategori'] = $this->db->count_all('kategori');
        $data['total_buku']     = $this->db->count_all('buku');
        $data['total_anggota']  = $this->db->count_all('anggota');
        $data['total_pinjam']   = $this->db->count_all('peminjaman');

        $data['dipinjam'] = $this->db
            ->where('status', 'dipinjam')
            ->count_all_results('peminjaman');

        $data['dikembalikan'] = $this->db
            ->where('status !=', 'dipinjam')
            ->count_all_results('peminjaman');

        $this->db->select('peminjaman.*, anggota.nama AS nama_anggota');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');
        $this->db->order_by('peminjaman.id', 'DESC');
        $this->db->limit(5);

        $data['peminjaman_terbaru'] = $this->db->get()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}