<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_konfirmasi1 extends CI_Model
{
    private $_table = "konfirmasi";
    public $id_konfirmasi;
    public $id_pesanan;
    public $id_pelanggan;
    public $tgl_bayar;
    public $metode_pembayaran;
    public $dari_bank;
    public $nama_pemilik_rekening;
    public $gambar_bukti;
    public $dikonfirmasi;


    public function rules()
    {
        return [
            [
                'field' => 'id_konfirmasi',
                'label' => 'id_konfirmasi',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_konfirmasi)
    {
        return $this->db->get_where($this->_table, ["id_konfirmasi" => $id_pelanggan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pesanan = $post["id_pesanan"];
        $this->tgl_bayar = $post["tgl_bayar"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        $this->metode_pembayaran = $post["metode_pembayaran"];
        $this->dari_bank = $post["dari_bank"];
        $this->nama_pemilik_rekening = $post["nama_pemilik_rekening"];
        $this->gambar_bukti = $post["gambar_bukti"];


        $this->db->insert($this->_table, $this);
    }
    
    public function input_data($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

}
