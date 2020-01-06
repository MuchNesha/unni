<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->logged_in) {
            redirect('login_admin');
        }
        $this->load->model("model_user");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data["admin"] = $this->model_user->getById($id_admin);
        $this->load->view("admin/user", $data);
    }

    public function edit($id_admin = null)
    {
        if (!isset($id_admin)) redirect('admin/user');

        $admin = $this->model_user;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->Simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["admin"] = $admin->getById($id_admin);
        if (!$data["admin"]) show_404();
    }
}
