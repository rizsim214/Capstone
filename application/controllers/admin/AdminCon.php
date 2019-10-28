<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCon extends CI_Controller{

	function __construct(){

		parent:: __construct();
			// requires user data
			$user_logged = $this->session->userdata();


		if ($user_logged['logged_in'] == FALSE) {

			$this->session->set_flashdata('Error' , 'Please Log in to your account!!');
			
			redirect('jofcontroller/view/login');
			
		}

		$this->load->model('admin/jof_model');
	}

	 public function index(){


		
		$this->adminData();
	

	}

	public function adminData(){
			$allData['transResult'] = $this->jof_model->getAllTransact();
			$allData['userResult'] = $this->jof_model->getAllUsers();

			$this->load->view('admin/admin_incs/admin_header');
			$this->load->view('admin/admin_dash',$allData);
			$this->load->view('admin/admin_incs/admin_footer');
		
	}



	
}
		