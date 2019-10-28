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

	public function adminData($admin_page = 'admin_dash'){
		if(!file_exists(APPPATH.'views/admin/'.$admin_page.'.php')){
			show_404();
		}

		$user_logged = $this->session->userdata();

		$name['username'] = $user_logged['username'];

		$this->load->view('admin/admin_incs/admin_header',$name);
		$this->load->view('admin/'.$admin_page. '.php');
		$this->load->view('admin/admin_incs/admin_footer');
	}

	
}
		