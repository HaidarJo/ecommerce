<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_cart');
        $this->load->model('m_produk');
        $this->load->model('m_home');
        if (!$this->session->userdata('id_pembeli')) {
            redirect(base_url('Auth/'));
        }
    }


    public function index()
    {

        $id_user =   $this->session->userdata('id_pembeli');
        $data = array(
            'cart' => $this->m_cart->cart($id_user),
            'total_harga' => $this->m_home->total_harga($id_user),
            'jumlah_keranjang' => $this->m_home->jumlah_keranjang($id_user),

        );

        $this->load->view('V_cart/v_cart', $data);
    }

    public function cart()
    {
        $id_produk = $this->input->post('id_produk');
        $data = array(
            'lihat_produk' => $this->m_produk->lihat_produk($id_produk)
        );
        $this->m_cart->data_keranjang();
        redirect(base_url('c_produk/lihat_produk'));
    }

    public function method()
    {
        $tambah = array(
            'id_pembeli' => $this->session->userdata('id_pembeli'),
            'id_produk' => $this->input->post('id_produk'),
            'id_penjual' => $this->input->post('id_penjual'),
        );
        $result = $this->db->insert('tb_keranjang', $tambah);
        echo json_encode($result);
    }

    public function delete_item()
    {

        $id_keranjang = $this->input->post('id_keranjang');


        // $this->m_cart->delete_item($id_keranjang);
        // redirect(base_url('c_produk/lihat_produk'));

        $this->db->query("delete from tb_keranjang WHERE `tb_keranjang`.`id_keranjang` = $id_keranjang;");


        $user_id = $this->session->userdata('id_pembeli');
        $id_produk = $this->input->post('id_produk');

        $data = array(
            'lihat_produk' => $this->m_produk->lihat_produk($id_produk),
            'cart' => $this->m_cart->cart($user_id),
            'total_harga' => $this->m_home->total_harga($user_id),
            'jumlah_keranjang' => $this->m_home->jumlah_keranjang($user_id),

        );
        // $this->load->view('V_produk/v_detail_produk', $data);
    }

    public function delete_data()
    {
        $dataId = $this->input->post('id');
        // Panggil model atau lakukan query untuk menghapus data dari database
        $this->m_cart->delete_item($dataId);
        // Beri respons ke AJAX
        echo 'success';
    }

    public function hapus_keranjang()
    {
        $id = $this->input->post('id_keranjang');

        $result = $this->db->query("delete from tb_keranjang WHERE `tb_keranjang`.`id_keranjang` = $id;");;
        echo json_encode($result);
    }
}

/* End of file C_home.php */
