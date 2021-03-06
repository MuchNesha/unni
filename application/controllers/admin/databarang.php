<?php

defined('BASEPATH') or exit('No direct script access allowed');

class databarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->logged_in) {
            redirect('login_admin');
        }
        $this->load->model("model_barang");
        $this->load->model("model_kategori");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {

        $data["barang"] = $this->model_barang->getAll();
        $this->load->view("admin/databarang", $data);
    }

    public function form_add()
    {
        $data['kategori'] = $this->model_kategori->getAllGroups();
        $this->load->view("admin/tambahbarang", $data);
    }

    public function add()
    {

        $this->model_barang->save();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/databarang');
    }

    // public function edit($id_barang = null)
    // {
    //     if (!isset($id_barang)) redirect('admin/databarang');

    //     $data["groups"] = $this->model_kategori->getAllGroups();
    //     $barang = $this->model_barang;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($barang->rules());

    //     if ($validation->run()) {
    //         $barang->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["barang"] = $barang->getById($id_barang);
    //     if (!$data["barang"]) show_404();

    //     $this->load->view("admin/editbarang", $data);
    // }

    public function edit($id_barang = null)
    {
        $data['kategori'] = $this->model_kategori->getAllGroups();
        $data["barang"] = $this->model_barang->getById($id_barang);
        $this->load->view("admin/editbarang", $data);
    }


    public function editdata()
    {

        $this->model_barang->update();
        redirect('admin/databarang');
    }

    public function delete($id_barang = null)
    {
        if (!isset($id_barang)) show_404();

        if ($this->model_barang->delete($id_barang)) {
            redirect(site_url('admin/databarang'));
        }
    }
}
