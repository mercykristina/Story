<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model
{
 
    private $_table = "user";
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user() {
        $post = $this->input->post();
        $username = $post["username"];
        return $this->db->get_where($this->_table, ["username" => $username])->row();
    }
 
    function __destruct() {
        $this->db->close();
    }
}