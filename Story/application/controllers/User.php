<?php

class User extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("user_model");


    if(empty($this->session->userdata('username'))) {
      $this->session->set_flashdata('flash_data', 'Please Login First!');
      redirect('login');
      }
    
  }

  public function index()
  {
    $data["userdata"] = $this->session->userdata('nama');
    $this->load->view('user/user_home',$data);
  }
  
  public function logout() {
    $this->session->sess_destroy();
      redirect('');
    
  }
}