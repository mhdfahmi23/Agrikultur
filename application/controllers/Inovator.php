<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inovator extends CI_Controller {



public function header()
{
    $this->load->view('header');
}
public function footer()
{
    $this->load->view('footer');
}

public function index()
{
    $this->header();
    $this->load->view('inovator');    
    $this->footer();
  }

}