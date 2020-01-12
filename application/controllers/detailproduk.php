<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detailproduk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("model_barang");
    }

    public function index($id_barang = null)
    {
        $data["barang"] = $this->model_barang->getById($id_barang);
        $this->load->view('header', $data);
        $this->load->view('detailproduk/detail', $data);
        $this->load->view('footer', $data);
    }
}
