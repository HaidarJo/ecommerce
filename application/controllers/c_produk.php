<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_produk');
        $this->load->model('m_cart');
        $this->load->model('m_home');
        $this->load->model('m_guest');
    }


    public function index()
    {
        $this->lihat_produk();
    }
    public function shop()
    {
        $data = array(
            'produk' => $this->m_guest->data_product(),
            'sess' => $this->session->userdata('id_pembeli')
        );
        $this->load->view('V_produk/all_produk', $data);
    }

    function cari_produk()
    {

        $keyword = $this->input->post('keyword');
        $data = $this->m_produk->cari_produk($keyword);
        $data = array(
            'keyword'    => $keyword,
            'data'        => $data,
            'produk' => $this->m_guest->data_product(),
            'sess' => $this->session->userdata('id_pembeli')
        );

        $this->load->view('V_produk/cari_produk', $data);
    }

    public function lihat_produk()
    {
        $user_id = $this->session->userdata('id_pembeli');
        $id_produk = $this->input->get('id_produk');

        $data = array(
            'lihat_produk' => $this->m_produk->lihat_produk($id_produk),
            'id_pembeli' => $this->session->userdata('id_pembeli'),
            'cart' => $this->m_cart->cart($user_id),
            'total_harga' => $this->m_home->total_harga($user_id),
            'jumlah_keranjang' => $this->m_home->jumlah_keranjang($user_id),


        );
        $this->load->view('V_produk/v_detail_produk', $data);
    }
    public function lihat_produk_guest()
    {
        $id_produk = $this->input->post('id_produk');
        $data = array(
            'lihat_produk' => $this->m_produk->lihat_produk($id_produk),
            'id_pembeli' => $this->session->userdata('id_pembeli'),

        );

        $this->load->view('V_produk/v_detail_produk_guest', $data);
    }
}

/* End of file C_home.php */
