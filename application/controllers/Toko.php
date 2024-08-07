<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Kesehatan';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/toko');
        //$this->load->view('templates/footer', $data);
    }

    public function bayianak()
    {
        $data['produk'] = $this->M_produk->SemuaData();
        $data['judul'] = 'Mom & Kids';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/bayianak', $data);
        //$this->load->view('templates/footer', $data);
    }

    public function popokdantisu()
    {
        $data['judul'] = 'Popok & Tisu Basah';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/popokdantisu');
    }

    public function kehamilan()
    {
        $data['judul'] = 'Kehamilan & Menyusui';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/kehamilan');
    }

    public function perlengkapan()
    {
        $data['judul'] = 'Perlengkapan Bayi';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('home/perlengkapan');
    }

    public function tambah_ke_keranjang($id_produk)
    {
        $produk = $this->M_produk->find($id_produk);
        $data = array(
            'id' => $produk->id_produk,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->nama_produk,
        );
        $this->cart->insert($data);
        redirect('toko/bayianak');
    }

    public function detail_keranjang()
    {
        $data['judul'] = 'Detail Keranjang';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('keranjang/keranjang');
        //$this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('toko/bayianak');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Detail Keranjang';
        $this->load->view('templates/artikel_header', $data);
        $this->load->view('keranjang/pembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function proses_pembayaran()
    {
        $is_processed = $this->M_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $data['judul'] = 'Proses Pembayaran';
            $this->load->view('templates/artikel_header', $data);
            $this->load->view('keranjang/proses_pembayaran', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pembayaran Anda Gagal diproses!";
        }
    }
}
