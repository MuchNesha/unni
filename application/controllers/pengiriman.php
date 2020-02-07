<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengiriman extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("model_pelanggan");
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view("pengiriman/pengiriman");
        $this->load->view('footer');
        // $this->load->view('script');
    }

    public function add()
    {

        $this->model_pelanggan->save();
        // redirect('pengiriman');
    }

    public function input_data($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }
}
