<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_status extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_status');

        if (!$this->session->userdata('id_pembeli')) {
            redirect(base_url('Auth/'));
        }
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_pembeli');

        $data['cekStatus'] = $this->m_status->cekStatus($id_user);

        $this->load->view('v_status/v_status', $data);
    }
}

/* End of cile .php */
