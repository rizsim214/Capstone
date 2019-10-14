<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsCon extends CI_Controller{

	function __construct(){

		parent:: __construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('jofcontroller/view/login');
		}
	}

	 public function index(){
		
		$this->consData();

	}

	public function consData(){

			$this->load->view('cons/con_incs/cons_header');
			$this->load->view('cons/cons_dash');
			$this->load->view('cons/con_incs/cons_footer');
		
	}


	
}
		