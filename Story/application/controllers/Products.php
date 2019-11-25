<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["products"] = $this->Product_model->getAll();
        $this->load->view("user/product/list", $data);
    }

    public function post_details($id_cerita=NULL){
        $produk = array(
          'data' => $this->Product_model->get_data_bykode($id_cerita)
        );
        $this->load->view('user/product/post_details',$produk);
    }

    public function readnow($id_cerita=NULL){
        $produk = array(
          'read' => $this->Product_model->get_data_bykode($id_cerita)
        );
        $this->load->view('user/product/readnow',$produk);
    }

    public function add()
    {
        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("user/product/new_form");
    }

    public function view()
    {
        $data["views"] = $this->Product_model->getAll();
        $this->load->view("user/product/view", $data);
    }


}