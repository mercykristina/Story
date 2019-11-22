<?php

class Guest extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
  }

  public function index()
  {
        // load view admin/home.php
        $this->load->view("guest/home");
  }

}