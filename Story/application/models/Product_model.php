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
            $query = "SELECT C.id_cerita,C.judul,C.image,C.tahun,C.penulis,C.genre,AVG(rating) as avg_rat FROM cerita C lEFT JOIN rating R ON C.id_cerita=R.id_cerita GROUP BY C.id_cerita";
            return $this->db->query($query)->result();
        }else{
            $query = "SELECT C.id_cerita,C.judul,C.image,C.tahun,C.penulis,C.genre,AVG(rating) as avg_rat FROM cerita C LEFT JOIN rating R ON C.id_cerita=R.id_cerita WHERE C.judul like '%$q%' or C.penulis like '%$q%' or C.tahun like '%$q%' or C.genre like '%$q%' GROUP BY C.id_cerita";
            return $this->db->query($query)->result();
        }
    }
 

    public function getAllRecommend($list){
         $imp = implode(',', $list);
         $query = "SELECT C.id_cerita,C.judul,C.sinopsis,C.cerita,C.image,C.tahun,C.penulis,C.genre,AVG(rating) as avg_rat FROM cerita C LEFT JOIN rating R ON C.id_cerita=R.id_cerita WHERE C.id_cerita IN ('$imp') GROUP BY C.id_cerita";
         return $this->db->query($query)->result();
    }
    
    public function get_data_bykode($id_cerita) {
         $query = "SELECT C.id_cerita,C.judul,C.sinopsis,C.cerita,C.image,C.tahun,C.penulis,C.genre,AVG(rating) as avg_rat FROM cerita C LEFT JOIN rating R ON C.id_cerita=R.id_cerita WHERE C.id_cerita='$id_cerita' GROUP BY C.id_cerita";
            return $this->db->query($query)->result();
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
    $config['max_size']             = 4096; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
        return "default.jpg";
    }

}