<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_status extends CI_Model
{

    function cekStatus($id_user)
    {
        $query = $this->db->query("select * FROM tb_tagihan LEFT JOIN tb_pembayaran ON tb_tagihan.id_tagihan = tb_pembayaran.id_tagihan WHERE tb_tagihan.id_pembeli = $id_user ORDER BY tb_pembayaran.id_tagihan desc;");

        return $query->result_array();
    }
}

/* End of file m_status.php */
