<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	
	public function header()
	{
		$this->load->view('header');
	}
	public function footer()
	{
		$this->load->view('footer');
	}

	function index()
  {
    $this->header();
    $this->load->view('beranda');    
    $this->footer();
	}
	
	

}







