<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarproduk extends CI_Controller
{
    public function index()
    {
        $data['produk'] = $this->M_produk->SemuaData();
        $data['judul'] = "Toko Kesehatan";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('daftarproduk/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function hapus($id_produk)
    {
        $where = array('id_produk' => $id_produk);
        $this->M_produk->hapusdata($where, 'produk');
        redirect('daftarproduk');
    }
}
