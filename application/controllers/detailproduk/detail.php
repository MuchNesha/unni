<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('detailproduk/detail');
		$this->load->view('footer');
	}
}
