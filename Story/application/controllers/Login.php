<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller
{
 
    function __construct() {
        parent::__construct();
        $this->load->model("Login_model");
        if(!empty($_SESSION['username']))
            redirect(site_url('user'));
    }
 
    public function index() {
        if($_POST) {
            $result = $this->Login_model->validate_user();
            if(!empty($result)) {
                $data = [
                    'username' => $result->username,
                    'nama' => $result->nama,
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('login');
            }
        }
 
        $this->load->view("register/login");
    }
}