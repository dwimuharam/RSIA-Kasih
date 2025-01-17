<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Pasien';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pasien'] = $this->db->get('pasien_baru')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('pasien/index', $data);
        //$this->load->view('templates/user_footer');
    }

    public function hapususer($id)
    {
        $this->M_user->hapususer($id);
        redirect('daftaruser');
    }
}
