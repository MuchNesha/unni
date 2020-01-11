<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_user extends CI_Model
{
    private $_table = "admin";
    public $id_admin;
    public $username;
    public $password;

    public function rules()
    {

        return [
            [
                'field' => 'id_admin',
                'label' => 'id_admin',
                'rules' => 'required'
            ],

            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],

            ['required' => 'Username anda tidak boleh kosong!'],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required|matches[password]'
            ],

            ['matches' => 'Konfirmasi password anda salah!'],

            [
                'field' => 'password2',
                'label' => 'Konfirmasi Pasword',
                'rules' => 'required|matches[password2]'
            ]

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_admin)
    {
        return $this->db->get_where($this->_table, ["id_admin" => $id_admin])->row();
    }

    public function Simpan()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->username = $post["username"];
        $this->password = $post["password"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->username = $post["username"];
        $this->password = $post["password"];

        $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }
}
