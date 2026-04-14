<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id'); 
        $data['buku'] = $this->db->get()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('judul', 'Judul Buku', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['kategori'] = $this->db->get('kategori')->result_array();
            
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('buku/input_form', $data);
            $this->load->view('templates/footer');
        } else {
            $data_simpan = [
                'kode_buku' => $this->input->post('kode_buku'),
                'judul_buku' => $this->input->post('judul'),
                'id_kategori' => $this->input->post('kategori'),
                'stok' => $this->input->post('stok'),
                'penulis' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'tahun' => $this->input->post('tahun'),
                'lokasi_rak' => $this->input->post('lokasi_rak'),
            ];
            $this->db->insert('buku', $data_simpan);
            $this->session->set_flashdata('success', 'Data buku berhasil ditambah');
            redirect('buku');
        }
    }

    public function edit($id) {
        // Mengambil data buku berdasarkan ID
        $data['buku'] = $this->db->get_where('buku', ['id_buku' => $id])->row_array();
        // Mengambil data kategori untuk pilihan dropdown
        $data['kategori'] = $this->db->get('kategori')->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data_update = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul_buku' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('kategori'),
            'stok' => $this->input->post('stok'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun'),
            'lokasi_rak' => $this->input->post('lokasi_rak'),
        ];

        $this->db->where('id_buku', $id);
        $this->db->update('buku', $data_update);
        $this->session->set_flashdata('success', 'Data buku berhasil diupdate');
        redirect('buku');
    }

    public function hapus($id) {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
        $this->session->set_flashdata('success', 'Data buku berhasil dihapus');
        redirect('buku');
    }
}