<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_barang extends CI_Model
{
    private $_table = "barang";
    public $nama_barang;
    public $id_jenis;
    public $ukuran;
    public $harga_barang;
    public $grosir_barang;
    public $per;
    public $stok;
    public $diskon_barang;
    public $gambar;
    public $deskripsi_barang;


    public function rules()
    {
        return [
            [
                'field' => 'id_barang',
                'label' => 'id_barang',
                'rules' => 'required'
            ],

            [
                'field' => 'id_jenis',
                'label' => 'id_jenis',
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
        $this->nama_barang = $post["nama_brg"];
        $this->id_jenis = $post["id_jenis"];
        $this->harga_barang = $post["harga_brg"];
        $this->grosir_barang = $post["grosir_barang"];
        $this->per = $post["per"];
        $this->stok = $post["stok"];
        $this->diskon_barang = $post["diskon_barang"];
        $this->gambar = $this->_uploadImage();
        $this->deskripsi_barang = $post["deskripsi"];
        $this->ukuran = $post["ukuran"];


        $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->id_jenis = $post["id_jenis"];
        $this->harga_barang = $post["harga_brg"];
        $this->grosir_barang = $post["grosir_barang"];
        $this->per = $post["per"];
        $this->stok = $post["stok"];
        $this->diskon_barang = $post["diskon_barang"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->deskripsi_barang = $post["deskripsi"];
        $this->ukuran = $post["ukuran"];

        $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
    }

    public function delete($id_barang)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id_barang));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/upload/produk';
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

    // private function UploadFoto()
    // {
    //     $config['upload_path']          = ('./assets/img/upload/databarang');
    //     $config['allowed_types']        = 'gif|png|jpg';
    //     $config['file_name']            = $this->id_barang;
    //     $config['overwrite']            = true;
    //     $config['max_size']             = 2048;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto')) {
    //         return $this->upload->data('file_name');
    //     }
    //     return "default.jpg";
    // }

    public function input_data($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function update_data($data, $id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update()('barang', $data);
    }
    function getDataBarang()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT * FROM barang');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }

    public function tampilan()
    {
        $query = $this->db->query("SELECT * FROM barang limit 6 asc");
        return $query->result();
    }
}
