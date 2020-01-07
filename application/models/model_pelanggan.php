<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_pelanggan extends CI_Model
{
    private $_table = "pelanggan";
    public $id_pelanggan;
    public $nama_pelanggan;
    public $no_hp_pelanggan;
    public $email_pelanggan;
    public $alamat;
    public $provinsi;
    public $kabupaten;
    public $kecamatan;
    public $kode_pos;


    public function rules()
    {
        return [
            [
                'field' => 'id_pelanggan',
                'label' => 'id_pelanggan',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_barang)
    {
        return $this->db->get_where($this->_table, ["id_pelanggan" => $id_pelanggan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_pelanggan = $post["nama_pelanggan"];
        $this->no_hp_pelanggan = $post["no_hp_pelanggan"];
        $this->email_pelanggan = $post["email_pelanggan"];
        $this->alamat = $post["alamat"];
        $this->provinsi = $post["provinsi"];
        $this->kabupaten = $post["kabupaten"];
        $this->kecamatan = $post["kecamatan"];
        $this->kode_pos = $post["kode_pos"];


        $this->db->insert($this->_table, $this);
    }
    
    public function input_data($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

}
