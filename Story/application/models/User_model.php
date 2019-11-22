<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $nama;
    public $email;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Full Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function getData()
    {
    return $this->db->get($this->_table)->result();;
    }
    
 public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}

