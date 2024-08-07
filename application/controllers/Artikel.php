<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Ibu, Ini Pola Hidup Sehat untuk Anak dengan Thalasemia';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/artikel-first');
        $this->load->view('templates/footer', $data);
    }

    public function artikelsecond()
    {
        $data['judul'] = 'Ini Cara Menyembuhkan Trauma Pada Anak Korban Perceraian';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/artikelsecond');
        $this->load->view('templates/footer', $data);
    }

    public function artikelthird()
    {
        $data['judul'] = 'Ini Cara Menyembuhkan Trauma Pada Anak Korban Perceraian';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/artikelthird');
        $this->load->view('templates/footer', $data);
    }
}
