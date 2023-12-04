<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $this->login();
    }

    public function login()
    {


        $this->load->view('v_login/v_login');
    }
}

/* End of file C_home.php */
