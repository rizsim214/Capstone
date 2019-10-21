
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsCon extends CI_Controller{

	function __construct(){

		parent:: __construct();

			
		$user_logged = $this->session->userdata();


		if ($user_logged['logged_in'] == FALSE) {

			$this->session->set_flashdata('Error' , 'Please Log in to your account!!');
			
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
		