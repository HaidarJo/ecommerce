<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_about extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $this->load->view('v_about/v_about');
    }
}

/* End of file C_home.php */
