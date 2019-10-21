<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrokerCon extends CI_Controller{

	function __construct(){

		parent:: __construct();

		$user_logged = $this->session->userdata();


		if ($user_logged['logged_in'] == FALSE) {

			$this->session->set_flashdata('Error' , 'Please Log in to your account!!');
			
			redirect('jofcontroller/view/login');

		}
	}

	 public function index(){
		
		
		$this->brokerData();

	}

	public function brokerData(){
		
			$this->load->view('broker/broker_incs/broker_header');
			$this->load->view('broker/broker_dash');
			$this->load->view('broker/broker_incs/broker_footer');
		
	}


	
}
		