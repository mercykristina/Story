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

    public function genreAction($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreAction($genre)
        );
        $this->load->view('user/product/list_genre_action',$data);
    }

    public function genreAdventure($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreAdventure($genre)
        );
        $this->load->view('user/product/list_genre_adventure',$data);
    }

    public function genreComedy($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreComedy($genre)
        );
        $this->load->view('user/product/list_genre_comedy',$data);
    }

    public function genreFiction($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreFiction($genre)
        );
        $this->load->view('user/product/list_genre_fiction',$data);
    }

    public function genreHistory($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreHistory($genre)
        );
        $this->load->view('user/product/list_genre_history',$data);
    }

    public function genreHorror($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreHorror($genre)
        );
        $this->load->view('user/product/list_genre_horror',$data);
    }

    public function genreRomance($genre=NULL)
    {
        $data = array(
          'genre' => $this->Product_model->genreRomance($genre)
        );
        $this->load->view('user/product/list_genre_romance',$data);
    }

    public function tahun2019($tahun=NULL)
    {
        $data = array(
          'tahun' => $this->Product_model->tahun2019($tahun)
        );
        $this->load->view('user/product/list_2019',$data);
    }

    public function tahun2018($tahun=NULL)
    {
        $data = array(
          'tahun' => $this->Product_model->tahun2018($tahun)
        );
        $this->load->view('user/product/list_2018',$data);
    }

    public function tahun2017krg($tahun=NULL)
    {
        $data = array(
          'tahun' => $this->Product_model->tahun2017krg($tahun)
        );
        $this->load->view('user/product/list_2017krg',$data);
    }
}