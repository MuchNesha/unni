<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_barang extends CI_Model
{
    private $_table = "barang";
    public $id_barang;
    public $nama_barang;
    public $jenis_barang;
    public $deskripsi_barang;
    public $gambar_barang;
    public $harga_barang;
    public $grosir_barang;
    public $diskon_barang;

    public function rules()
    {
        return [
            [
                'field' => 'id_barang',
                'label' => 'Name',
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
        return $this->db->get_where($this->_table, ["id_barang" => $id_barang])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_brg"];
        $this->jenis_barang = $post["jenis_brg"];
        $this->deskripsi_barang = $post["deskripsi"];
        $this->gambar_barang = $this->UploadFoto();
        $this->harga_barang = $post["harga"];
        $this->grosir_barang = $post["grosir"];
        $this->diskon_barang = $post["diskon"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_brg"];
        $this->jenis_barang = $post["jenis_brg"];
        $this->deskripsi_barang = $post["deskripsi"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->UploadFoto()();
        } else {
            $this->foto = $post["foto"];
        };
        $this->harga_barang = $post["harga"];
        $this->grosir_barang = $post["grosir"];
        $this->diskon_barang = $post["diskon"];

        $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
    }

    public function delete($id_barang)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id_barang));
    }

    private function UploadFoto()
    {
        $config['upload_path']          = ('./assets/img/upload/databarang');
        $config['allowed_types']        = 'gif|png|jpg';
        $config['file_name']            = $this->id_barang;
        $config['overwrite']            = true;
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }

}
