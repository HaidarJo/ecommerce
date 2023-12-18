<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_payment');
        $this->load->model('m_cart');

        if (!$this->session->userdata('id_pembeli')) {
            redirect(base_url('Auth/'));
        }
    }

    public function index()
    {
        $id_user =   $this->session->userdata('id_pembeli');

        $data['tagihan'] = $this->m_payment->get_tagihan($id_user);
        // Tampilkan form pembayaran
        $this->load->view('V_payment/v_payment', $data);
    }

    public function save_payment()
    {

        // Proses penyimpanan pembayaran
        $data = array(
            'tgl_pembayaran' => date('Y-m-d H:i:s', strtotime($this->input->post('tgl_pembayaran'))),
            'id_tagihan' => $this->input->post('id_tagihan'),
            'bukti_pembayaran' => $_FILES['bukti_pembayaran']['name'],
            'status' => 'Sedang Diproses',
            // Anda dapat menambahkan field lain sesuai kebutuhan
        );

        // Unggah bukti pembayaran
        $config['upload_path'] = './asset/images/bukti_bayar/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('bukti_pembayaran')) {
            $upload_data = $this->upload->data();
            $data['bukti_pembayaran'] = $upload_data['file_name'];
        }

        // Panggil model untuk menyimpan data pembayaran
        $this->m_payment->insert_payment($data);

        // Set flash data untuk menampilkan pesan sukses
        $this->session->set_flashdata('success', 'Data pembayaran berhasil disimpan');

        // Redirect ke halaman home
        // $this->load->view('View File', $data, FALSE);
        redirect('c_home');
    }

    public function payment()
    {
        $add = array(
            'tgl_tagihan' => date('Y-m-d'),
            'jumlah_tagihan' => $this->input->post('total'),
            'id_pembeli' => $this->session->userdata('id_pembeli'),
            'id_penjual' => '2',
            'id_produk' => '2',
        );
        $this->db->insert('tb_tagihan', $add);

        $id_pembeli = $this->session->userdata('id_pembeli');
        $this->m_cart->delete_all_cart($id_pembeli);

        $this->sharedVariable = $this->input->post('total');
        $this->tagihan();
    }

    public function tagihan()
    {
        $id_user =   $this->session->userdata('id_pembeli');
        $data['tagihan'] = $this->m_payment->get_tagihan($id_user);

        // $this->load->view('v_temp', $data);
        $this->load->view('v_payment/v_bayar', $data);
    }
}
