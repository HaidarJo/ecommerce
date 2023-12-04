<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_guest extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_guest');
    }


    public function index()
    {
        $data = array(
            'produk' => $this->m_guest->data_product(),
        );
        if (!$this->session->userdata('id_pembeli')) {
            $this->load->view('V_home/v_guest', $data);
        } else {
            redirect('c_home');
        }
    }
}
/* End of file C_home.php */
