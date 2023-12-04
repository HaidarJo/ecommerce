<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_guest extends CI_Model
{
    function data_product()
    {
        $query = $this->db->query("select id_produk, nama_produk, deskripsi_produk, foto_produk, stok, id_penjual, CONCAT(FORMAT(harga, 0), '') AS harga from tb_produk");

        return $query->result_array();
    }

    function lihat_produk()
    {
        $query = $this->db->query("select * from tb_produk where id_produk = 1");

        return $query->result_array();
    }
}

/* End of file m_home.php */
