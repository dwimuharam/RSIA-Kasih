<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('produk')->result_array();
    }

    public function hapusdata($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)
            ->limit(1)
            ->get('produk');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
