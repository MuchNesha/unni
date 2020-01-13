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
        $this->gambar_bukti = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/upload/bukti';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['gambar']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
    }
    
    public function input_data($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

}
