<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Registrasi Pasien Baru';
        $this->load->view('templates/register_header', $data);
        $this->load->view('home/register-pasien');
        $this->load->view('templates/footer', $data);
    }
}
