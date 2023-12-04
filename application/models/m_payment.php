
<?php
class m_payment extends CI_Model
{
    public function insert_payment($data)
    {
        $this->db->insert('tb_pembayaran', $data);
    }
}
?>