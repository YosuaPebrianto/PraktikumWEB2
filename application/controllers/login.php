<?php
defined('BASEPATH') OR exit('No Direct script access allwoed');
class login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    
  }
}