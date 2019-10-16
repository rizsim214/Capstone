<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCon extends CI_Controller{

	function __construct(){

		parent:: __construct();
		
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('jofcontroller/view/login');
		}
	}

	 public function index(){
		
		$this->adminData();

	}

	public function adminData(){

			$this->load->view('admin/admin_incs/admin_header');
			$this->load->view('admin/admin_dash');
			$this->load->view('admin/admin_incs/admin_footer');
		
	}


	
}
		