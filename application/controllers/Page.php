<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('keranjang_model');
	}
	public function index()
		{
			$data['produk'] = $this->keranjang_model->get_produk_all();
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('header',$data);
			$this->load->view('belanja/list_produk',$data);
			$this->load->view('footer');
		}
	public function tentang()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('header',$data);
			//$this->load->view('pages/tentang',$data);
			$this->load->view('footer');
		}	
	public function cara_bayar()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('header',$data);
			//$this->load->view('pages/cara_bayar',$data);
			$this->load->view('footer');
		}		
}
