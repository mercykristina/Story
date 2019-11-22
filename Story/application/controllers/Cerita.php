<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("cerita_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ceritas"] = $this->cerita_model->getAll();
        $this->load->view("list", $data);
    }

    public function add()
    {
        $cerita = $this->cerita_model;
        $validation = $this->form_validation;
        $validation->set_rules($cerita->rules());

        if ($validation->run()) {
            $cerita->save();
            $this->session->set_flashdata('success', 'Saved!');
        }

        $this->load->view("admin/cerita/new_cerita");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('ceritas');
       
        $cerita = $this->cerita_model;
        $validation = $this->form_validation;
        $validation->set_rules($cerita->rules());

        if ($validation->run()) {
            $cerita->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["cerita"] = $cerita->getById($id);
        if (!$data["cerita"]) show_404();
        
        $this->load->view("admin/cerita/edit_cerita", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->cerita_model->delete($id)) {
            redirect(site_url('cerita'));
        }
    }
}