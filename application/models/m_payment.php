
<?php
class m_payment extends CI_Model
{
    public function insert_payment($data)
    {
        $this->db->insert('tb_pembayaran', $data);
    }
    public function get_tagihan($id_user)
    {
        $query = $this->db->query("select * from tb_tagihan where id_pembeli = $id_user ORDER BY id_tagihan desc;");

        return $query->result_array();

        // $this->db->where('id_pembeli', $id_user);
        // $this->db->order_by('tgl_tagihan', 'DESC');
        // $query = $this->db->get('tb_tagihan');
        // return $query->result();
    }

    public function update_tagihan($id_tagihan, $new_jumlah)
    {
        $this->db->set('jumlah_tagihan', $new_jumlah);
        $this->db->where('id_tagihan', $id_tagihan);
        $this->db->update('tb_tagihan');

        return $this->db->affected_rows(); // Return the number of affected rows after update
    }
}
?>