<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_regist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $this->regist();
    }

    public function regist()
    {


        $this->load->view('v_regist/v_regist');
    }
}

/* End of file C_home.php */
