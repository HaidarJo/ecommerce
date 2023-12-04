
<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_cart extends CI_Model
{
    function data_cart()
    {
        $query = $this->db->query("select * from tb_keranjang");

        return $query->result_array();
    }



    function cart($id_user)
    {
        // $query = $this->db->query("select *
        // from tb_keranjang
        // inner join tb_produk ON tb_keranjang.id_produk = tb_produk.id_produk where id_pembeli = $id_user;");
        $query = $this->db->query("select *, count(tb_keranjang.id_produk) as total from tb_keranjang 
        inner join tb_produk ON tb_keranjang.id_produk = tb_produk.id_produk 
        where tb_keranjang.id_pembeli = '$id_user'
        GROUP BY tb_keranjang.id_produk;");

        return $query->result_array();
    }
    function delete_item($id_keranjang)
    {
        $this->db->where('id_keranjang', $id_keranjang);
        $result = $this->db->delete('tb_keranjang');
        return $result;
    }






    function total_harga()
    {
        $query = $this->db->query("select (SUM(jumlah*harga)) as total from tb_keranjang INNER JOIN tb_produk ON tb_keranjang.id_produk = tb_produk.id_produk;");

        return $query->result_array();
    }
}

/* End of file m_cart.php */
