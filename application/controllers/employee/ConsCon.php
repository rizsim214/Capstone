<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsCon extends CI_Controller{

	function __construct(){

		parent:: __construct();

		
		
	}

	 public function index(){
		
		// if userdata not set redirect to login
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('jofcontroller/view/login');
			 } else {

				$this->consData();
			}

		

	}

	public function consData(){




			$this->load->view('cons/con_incs/cons_header');
			$this->load->view('cons/cons_dash');
			$this->load->view('cons/con_incs/cons_footer');
		
	}


	
}
		