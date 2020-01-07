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
		$data['pelanggan'] = $this->model_pelanggan->getAll();
		$this->load->view('header');
		$this->load->view("pengiriman/pengiriman", $data);
		$this->load->view('footer');
	}

	public function add()
	{
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $no_hp_pelanggan = $this->input->post('no_hp_pelanggan');
        $email_pelanggan = $this->input->post('email_pelanggan');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $kecamatan = $this->input->post('kecamatan');
        $kode_pos = $this->input->post('kode_pos');
        $data = array(
            'nama_pelanggan' => $nama_pelanggan,
            'no_hp_pelanggan' => $no_hp_pelanggan,
            'email_pelanggan' => $email_pelanggan,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kode_pos' => $kode_pos,

        );
        $this->model_pelanggan->input_data($data, 'pelanggan');
        redirect('pengiriman');
	}

	public function input_data($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

}
