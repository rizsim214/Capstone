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

			$this->view_admin();
		}

	public function view_admin($page_admin = 'admin_dash'){
		if(!file_exists(APPPATH.'views/admin/'.$page_admin.'.php')){
			show_404();
		}
			$data['title'] = ucfirst($page_admin);

			$this->load->view('admin/admin_incs/admin_header');
			$this->load->view('admin/'.$page_admin, $data);
			$this->load->view('admin/admin_incs/admin_header');

	}

	//  public function index(){
		
	// 	$this->adminData();

	// }

	// public function adminData(){

	// 		$this->load->view('admin/admin_incs/admin_header');
	// 		$this->load->view('admin/admin_dash');
	// 		$this->load->view('admin/admin_incs/admin_footer');
		
	// }



	
}
		