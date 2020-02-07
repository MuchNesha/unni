<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("keranjang_model");
	}

	public function index($kode)
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('header', $data);
		$this->load->view('pembayaran', $data);
		$this->load->view('footer', $data);
	}
	public function send($kode)
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$data['pelanggan'] = $this->keranjang_model->getPelanggan($kode);
		$this->load->view('header', $data);
		$this->load->view('pembayaran/pembayaran', $data);
		$this->load->view('footer', $data);
	}
	
}
