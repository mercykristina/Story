<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rating_model extends CI_Model
{
    private $_table = "rating";

    public $id_rating;
    public $komentar;
    public $rating;
    public $id_user;
    public $id_cerita;

    public function rules()
    {
        return [
            ['field' => 'rating',
            'label' => 'Rating',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function get_data_bykode($id_rating) {
        $query = $this->db->get_where('rating', array('id_rating' => $id_rating));
        return $query->result();
    }

    public function save($id_user,$id_cerita)
    {
        $post = $this->input->post();
        $this->komentar = $post["komentar"];
        $this->rating = $post["rating"];
        $this->id_user = $id_user;
        $this->id_cerita = $id_cerita;
        $this->id_rating = uniqid();

        $result = $this->db->get_where($this->_table, array('id_cerita' => $id_cerita,'id_user'=>$id_user))->result();
        if(empty($result)){
            $this->db->insert($this->_table, $this);
        }else{
             $query = "UPDATE rating set rating='$this->rating',komentar='$this->komentar' where id_cerita='$id_cerita' and id_user='$id_user'";
            $this->db->query($query);
        }
    }
}    