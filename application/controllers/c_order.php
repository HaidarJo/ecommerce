<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_cart');
        $this->load->model('m_produk');
        $this->load->model('m_home');
        $this->load->model('m_payment');

        if (!$this->session->userdata('id_pembeli')) {
            redirect(base_url('Auth/'));
        }
    }

    public $api_key = "b0dd9be02367ed05907fafd02e6846dc";

    public function index()
    {
        $id_user =   $this->session->userdata('id_pembeli');
        $data = array(
            'cart' => $this->m_cart->cart($id_user),
            'total_harga' => $this->m_home->total_harga($id_user),
            'jumlah_keranjang' => $this->m_home->jumlah_keranjang($id_user),

        );

        // API PROVINSI
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . $this->api_key,
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $data['provisi'] = array('error' => true);
        } else {
            $data['provinsi'] = json_decode($response);
        }

        // API KABUPATEN
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . $this->api_key,
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $data['kota'] = array('error' => true);
        } else {
            $data['kota'] = json_decode($response);
        }
        // print_r($data['kota']);
        // $this->load->view('v_temp', $data);


        $this->load->view('V_order/v_order', $data);
    }

    public function tagihan()
    {
        $add = array(
            'tgl_tagihan' => date('Y-m-d'),
            'jumlah_tagihan' => $this->input->post('total'),
            'id_pembeli' => $this->session->userdata('id_pembeli'),
            'id_penjual' => '2',
            'id_produk' => '2',
        );
        $this->db->insert('tb_tagihan', $add);

        $id_user =   $this->session->userdata('id_pembeli');
        $data = array(
            'cart' => $this->m_cart->cart($id_user),
            'total_harga' => $this->m_home->total_harga($id_user),
            'jumlah_keranjang' => $this->m_home->jumlah_keranjang($id_user),
        );

        $data['provinsi'] = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=128&destination=" . $kabupaten . "&weight=2000&courier=jne",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: " . $this->api_key,
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $data['hasil'] = array('error' => true);
        } else {
            $data['hasil'] = json_decode($response);
        }


        // print_r($data['hasil']);
        $this->load->view('v_order/v_tagihan', $data);
    }
}

/* End of file C_home.php */
