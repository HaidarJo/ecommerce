
<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_produk extends CI_Model
{
    function data_product()
    {
        $query = $this->db->query("select id_produk, nama_produk, deskripsi_produk, foto_produk, stok, id_penjual, CONCAT(FORMAT(harga, 0), '') AS harga from tb_produk");

        return $query->result_array();
    }

    function lihat_produk($id_produk)
    {
        $query = $this->db->query("select id_produk, nama_produk, deskripsi_produk, foto_produk, stok, id_penjual, CONCAT(FORMAT(harga, 0), '') AS harga from tb_produk where id_produk = $id_produk;");

        return $query->result_array();
    }
    function lihat_produk_guest($id_produk)
    {
        $query = $this->db->query("select id_produk, nama_produk, deskripsi_produk, foto_produk, stok, id_penjual, CONCAT(FORMAT(harga, 0), '') AS harga from tb_produk where id_produk = $id_produk;");

        return $query->result_array();
    }

    function data_keranjang()
    {
        return $this->db->get('tb_keranjang')->result_array();
    }

    public function jumlah_keranjang($id_user)
    {
        $query = $this->db->query("select count(id_penjual) as id_penjual from tb_keranjang where id_pembeli = $id_user;");
        $result = $query->row_array();
        return $result['id_penjual'];
    }

    function cart($id_user)
    {
        $query = $this->db->query("select *
        from tb_keranjang
        inner join tb_produk ON tb_keranjang.id_produk = tb_produk.id_produk where id_pembeli = $id_user;");

        return $query->result_array();
    }

    function total_harga()
    {
        $query = $this->db->query("select (SUM(jumlah*harga)) as total from tb_keranjang INNER JOIN tb_produk ON tb_keranjang.id_produk = tb_produk.id_produk;");

        return $query->result_array();
    }

    public function cari_produk($keyword)
    {

        $this->db->select('*');
        $this->db->from('tb_produk');
        if (!empty($keyword)) {
            $this->db->like('nama_produk', $keyword);
            // $this->db->or_like('isi', $keyword);
            $this->db->order_by('nama_produk', 'ASC');
        }
        return $this->db->get()->result_array();
    }
}

/* End of file m_home.php */
