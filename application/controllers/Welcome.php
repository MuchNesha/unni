<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('model_barang');
	}

	public function index()
	{
		$data['brg'] =$this->model_barang->getAll();
		$this->load->view('header', $data);
		$this->load->view('home/home', $data);
		$this->load->view('footer', $data);
	}
}
