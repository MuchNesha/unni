<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keranjang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('keranjang/keranjang');
		$this->load->view('footer');
	}
}
