<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "cerita";

    public $id_cerita;
    public $judul;
    public $image = "default.jpg";
    public $sinopsis;
    public $cerita;
    public $penulis;
    public $tahun;
    public $genre;
    public $id_user;


    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'sinopsis',
            'label' => 'Synopsis',
            'rules' => 'required'],
            
            ['field' => 'cerita',
            'label' => 'Cerita',
            'rules' => 'required'],

            ['field' => 'penulis',
            'label' => 'Writer',
            'rules' => 'required'],

            ['field' => 'tahun',
            'label' => 'Year',
            'rules' => 'required'],
        ];
    }

    public function getAll($q)
    {
        if(empty($q)){
            return $this->db->get($this->_table)->result();
        }else{
            $query = "SELECT * FROM cerita WHERE judul like '%$q%' or penulis like '%$q%' or tahun like '%$q%' or genre like '%$q%'";
            return $this->db->query($query)->result();
        }
    }
    
    public function get_data_bykode($id_cerita) {
        $query = $this->db->get_where('cerita', array('id_cerita' => $id_cerita));
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_cerita = uniqid();
        $this->judul = $post["judul"];
        $this->sinopsis = $post["sinopsis"];
        $this->cerita = $post["cerita"];
        $this->penulis = $post["penulis"];
        $this->tahun = $post["tahun"];
        $this->genre = $post["genre"];
        $this->image = $this->_uploadImage();
        $this->id_user = $this->session->userdata('id_user');
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './img/upload/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_cerita;
    $config['overwrite']            = true;
    $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
        return "default.jpg";
    }

}