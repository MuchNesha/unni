<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('konfirmasi/Konfirmasi');
		$this->load->view('footer');
	}
}
