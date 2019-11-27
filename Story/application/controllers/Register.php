<?php

class Register extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("user_model");
    $this->load->library("form_validation");
  }

  public function index(){
      if($_POST) {
        $setting = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($setting->rules());

        if ($validation->run()) {
            if($setting->save()){
              $this->session->set_flashData('success', 'Data already saved!');
              return redirect('login');
            }else{
               $this->session->set_flashData('success', 'Username sudah digunakan');
            }
        }
      }
      $this->load->view("register/regist");
  } 

  public function forgotpassword()
  {
        // load view register/forgot-password.php
        $this->load->view("register/forgot-password");
  }

}