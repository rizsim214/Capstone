<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcctCon extends CI_Controller{

	function __construct(){

		parent:: __construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('jofcontroller/view/login');
		}
	}

	 public function index(){
		
		// if userdata not set redirect to login
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('jofcontroller/view/login');
			
			 } else {

				$this->acctData();
			}
		
		

	}

	public function acctData(){
		
			$this->load->view('account/acct_incs/acct_header');
			$this->load->view('account/acct_dash');
			$this->load->view('account/acct_incs/acct_footer');
		
	}


	
}
		