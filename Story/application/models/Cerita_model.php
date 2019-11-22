<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita_model extends CI_Model
{
    private $_table = "cerita";

    public $id_cerita;
    public $judul;
    public $gambar = "default.jpg";
    public $sinopsis;
    public $cerita;
    public $penulis;
    public $tahun;

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
            'rules' => 'numeric|required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_cerita" => $id])->row();
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
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_cerita = uniqid();
        $this->judul = $post["judul"];
        $this->sinopsis = $post["sinopsis"];
        $this->cerita = $post["cerita"];
        $this->penulis = $post["penulis"];
        $this->tahun = $post["tahun"];
        $this->db->update($this->_table, $this, array('id_cerita' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_cerita" => $id));
    }
}