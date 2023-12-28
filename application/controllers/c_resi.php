<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_resi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_resi');

        if (!$this->session->userdata('id_pembeli')) {
            redirect(base_url('Auth/'));
        }
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_pembeli');

        $data['daftar'] = $this->m_resi->getDataPembayaran($id_user);
        $this->load->view('v_resi/v_resi', $data);
    }
}

/* End of cile .php */
