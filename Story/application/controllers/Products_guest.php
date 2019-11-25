<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products_guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
    }

    public function index()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("guest/list", $data);
    }

    public function post_details($id_cerita=NULL){
        $produk = array(
          'data' => $this->Product_model->get_data_bykode($id_cerita)
        );
        $this->load->view('guest/post_details',$produk);
    }


}