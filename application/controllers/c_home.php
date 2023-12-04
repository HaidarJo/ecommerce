<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_home');
        $this->load->model('m_cart');
        if (!$this->session->userdata('id_pembeli')) {
            redirect(base_url('Auth/'));
        }
    }


    public function index()
    {
        $this->home();
    }

    public function home()
    {

        $user_id = $this->session->userdata('id_pembeli');
        $data = array(
            'produk' => $this->m_home->data_product($user_id),
            'jumlah_keranjang' => $this->m_home->jumlah_keranjang($user_id),
            'cart' => $this->m_cart->cart($user_id),
            'total_harga' => $this->m_home->total_harga($user_id),
            'id_penjual' => $this->input->post('id_penjual')

        );
        $this->load->view('V_home/v_home', $data);
    }

    public function lihat_produk()
    {
        $id_produk = $this->input->post('id_produk');
        $data = array(
            'lihat_produk' => $this->m_home->lihat_produk($id_produk)
        );
        $this->load->view('V_home/lihat_produk', $data);
    }
}

/* End of file C_home.php */
