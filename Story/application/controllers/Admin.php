<?php

class Admin extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("user_model");


    if(empty($this->session->userdata('username'))) {
      $this->session->set_flashdata('flash_data', 'Please Login First!');
      redirect('login');
      }
    
    if($this->session->userdata('status')==1) {
      redirect('admin');
      }
  }

  public function index()
  {
    $data["userdata"] = $this->session->userdata('nama');
    $this->load->view('admin/admin_home',$data);
  }
  
  public function logout() {
    $this->session->sess_destroy();
      redirect('guest');
    
  }
}