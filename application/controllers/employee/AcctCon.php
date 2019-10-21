<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcctCon extends CI_Controller{

	function __construct(){

		parent:: __construct();


			$user_logged = $this->session->userdata();


			if ($user_logged['logged_in'] == FALSE) {

				$this->session->set_flashdata('Error' , 'Please Log in to your account!!');
				
				redirect('jofcontroller/view/login');
			}
	}

	 public function index(){
		
		
				$this->acctData();
			
		}

	public function acctData(){
		
			$this->load->view('account/acct_incs/acct_header');
			$this->load->view('account/acct_dash');
			$this->load->view('account/acct_incs/acct_footer');
		
	}


	
}
		