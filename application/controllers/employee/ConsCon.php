
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsCon extends CI_Controller{

	function __construct(){

		parent:: __construct();

			
			// if userdata not set redirect to login
		if ($this->session->userdata($ses_data) != TRUE ) {

			$this->session->set_flashdata('Error', 'Please Login your Account');
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
		