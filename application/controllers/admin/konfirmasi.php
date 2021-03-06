<?php

defined('BASEPATH') or exit('No direct script access allowed');

class konfirmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->logged_in) {
            redirect('login_admin');
        }
        $this->load->model("model_konfirmasi");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['konfirmasi'] = $this->model_konfirmasi->getAllData();
        $data['model'] = $this->model_konfirmasi->getAllData();
        $data['pelanggan'] = $this->model_konfirmasi->getDataPelanggan();;
        $this->load->view("admin/konfirmasi", $data);
    }
}
