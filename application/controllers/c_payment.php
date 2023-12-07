<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_payment');

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
        $this->load->view('View File', $data, FALSE);
    }

    public function payment()
    {
        // $id_tagihan =  $this->input->post('tagihan');

        // $this->m_payment->update_tagihan($id_tagihan, $new_jumlah);

        $this->sharedVariable = $this->input->post('total');
        $this->paymentt();
    }

    public function paymentt()
    {
        $id_user =   $this->session->userdata('id_pembeli');

        $data['tagihan'] = $this->m_payment->get_tagihan($id_user);
        $data['total'] = $this->sharedVariable;

        // $this->load->view('v_temp', $data);
        $this->load->view('v_payment/v_bayar', $data);
    }
}
