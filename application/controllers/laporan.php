<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('login');
        }
    }

    public function anggota()
{
    $data['anggota'] = $this->db->get('anggota')->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/anggota', $data);
    $this->load->view('templates/footer');
}

public function buku()
{
    $data['buku'] = $this->db->get('buku')->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/buku', $data);
    $this->load->view('templates/footer');
}

    public function peminjaman()
{
    $bulan = $this->input->get('bulan');

    $this->db->select('
        peminjaman.id,
        peminjaman.kode_peminjaman,
        peminjaman.anggota_id,
        peminjaman.tanggal_pinjam,
        peminjaman.status,
        anggota.nama AS nama_anggota
    ');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id', 'left');

    if (!empty($bulan)) {
        $tanggal_awal  = $bulan . '-01';
        $tanggal_akhir = date('Y-m-t', strtotime($tanggal_awal));

        $this->db->where('peminjaman.tanggal_pinjam >=', $tanggal_awal);
        $this->db->where('peminjaman.tanggal_pinjam <=', $tanggal_akhir);
    }

    $data['data'] = $this->db->get()->result();
    $data['bulan'] = $bulan;

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/peminjaman', $data);
    $this->load->view('templates/footer');
    }
    public function cetak_peminjaman()
{
    $bulan = $this->input->get('bulan');

    $this->db->select('peminjaman.*, anggota.nama AS nama_anggota');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id', 'left');

    if (!empty($bulan)) {
        $tanggal_awal  = $bulan . '-01';
        $tanggal_akhir = date('Y-m-t', strtotime($tanggal_awal));

        $this->db->where('peminjaman.tanggal_pinjam >=', $tanggal_awal);
        $this->db->where('peminjaman.tanggal_pinjam <=', $tanggal_akhir);
    }

    $data['data'] = $this->db->get()->result();
    $data['bulan'] = $bulan;

    $this->load->view('laporan/cetak_pinjam', $data);
    }

    public function cetak_anggota()
    {
        $data['anggota'] = $this->db->get('anggota')->result();
        $this->load->view('laporan/cetak_anggota', $data);
    }

    public function cetak_buku()
{
    $data['buku'] = $this->db->get('buku')->result();
    $this->load->view('laporan/cetak_buku', $data);
}
    
}