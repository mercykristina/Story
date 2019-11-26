<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{

    public $query;
    public $id_cerita;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model"); 
        $this->load->model("Rating_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->query =  $this->input->get('q');

        $data["products"] = $this->Product_model->getAll($this->query);
        $this->load->view("user/product/list", $data);
    }

    public function post_details($id_cerita=NULL){
        $produk = array(
          'data' => $this->Product_model->get_data_bykode($id_cerita)
        );
        $this->load->view('user/product/post_details',$produk);
    }

    public function readnow($id_cerita=NULL){
        if(empty($this->session->userdata('username'))) {
          $this->session->set_flashdata('flash_data', 'Please Login First!');
          return redirect('login');
        }

        $this->id_cerita = $id_cerita;

        $produk = array(
          'read' => $this->Product_model->get_data_bykode($id_cerita)
        );
        $this->load->view('user/product/readnow',$produk);
    }

    public function addRating($id_cerita=NULL){
      if($_POST) {
                $rating = $this->Rating_model;
                $validation = $this->form_validation;
                $validation->set_rules($rating->rules());

                if ($validation->run()) {
                    $id_user = $this->session->userdata('id_user');
                    $rating->save($id_user,$id_cerita);
                    $this->session->set_flashdata('success', 'Berhasil disimpan');
                }
                redirect("/story/read/".$id_cerita);
       }
    
    }



    public function add()
    {  
        if(empty($this->session->userdata('username'))) {
          $this->session->set_flashdata('flash_data', 'Please Login First!');
          redirect('login');
        }else{
            if($_POST) {
                $product = $this->Product_model;
                $validation = $this->form_validation;
                $validation->set_rules($product->rules());

                if ($validation->run()) {
                    $product->save();
                    $this->session->set_flashdata('success', 'Berhasil disimpan');
                }
            }
        
            $this->load->view("user/product/new_form");
        }
    }
}