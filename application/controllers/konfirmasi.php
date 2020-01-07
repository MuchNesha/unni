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
		$data['konfirmasi'] = $this->model_konfirmasi1->getAll();
		$this->load->view('header');
		$this->load->view('konfirmasi/Konfirmasi');
		$this->load->view('footer');
	}
	public function add()
	{
        $id_pesanan = $this->input->post('id_pesanan');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $metode_pembayaran = $this->input->post('metode_pembayaran');
        $dari_bank = $this->input->post('dari_bank');
        $nama_pemilik_rekening = $this->input->post('nama_pemilik_rekening');
        $gambar_bukti = $this->input->post('gambar_bukti');
        $data = array(
            'id_pesanan' => $id_pesanan,
            'tgl_bayar' => $tgl_bayar,
            'jumlah_bayar' => $jumlah_bayar,
            'metode_pembayaran' => $metode_pembayaran,
            'dari_bank' => $dari_bank,
            'nama_pemilik_rekenig' => $nama_pemilik_rekening,
            'gambar_bukti' => $gambar_bukti,

        );
        $this->model_konfirmasi1->input_data($data, 'konfirmasi');
        redirect('konfirmas');
	}

	

}
