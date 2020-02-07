<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konfirmasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("model_konfirmasi1");
	}

	public function index()
	{
		//$this->load->view('header');
		$this->load->view('konfirmasi/Konfirmasi');
		$this->load->view('footer');
	}

	public function save($kode)
	{
		//$this->load->view('header');
		$data['konfirmasi']= $this->model_konfirmasi1->getData($kode);
		$this->load->view('konfirmasi/Konfirmasi', $data);
		$this->load->view('footer');
	}
	public function add()
	{
        $this->model_konfirmasi1->save();
        redirect('konfirmasi');
	}

}
