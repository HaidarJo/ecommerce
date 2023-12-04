<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_payment');
    }

    public function index()
    {
        // Tampilkan form pembayaran
        $this->load->view('V_payment/v_payment');
    }

    public function save_payment()
    {
        // Proses penyimpanan pembayaran
        $data = array(
            'tgl_pembayaran' => date('Y-m-d H:i:s', strtotime($this->input->post('tgl_pembayaran'))),
            'id_tagihan' => $this->input->post('id_tagihan'),
            'bukti_pembayaran' => $_FILES['bukti_pembayaran']['name'],
            // Anda dapat menambahkan field lain sesuai kebutuhan
        );

        // Unggah bukti pembayaran
        $config['upload_path'] = './uploads/';
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
        redirect('c_payment/index');
    }
}
