<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jofcontroller extends CI_Controller{
	
	public function __construct(){

		parent:: __construct();

		$this->load->model('admin/jof_model');
	}


	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
			$data['title'] = ucfirst($page);

			$this->load->view('includes/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('includes/footer');

	}

	public function accounts(){

		if(isset($_POST['submit'])) {


		$arr['username'] = $this->input->post('username'); 
		$arr['password'] = $this->input->post('password'); 

		
		
		$result = $this->jof_model->verifyUser($arr);



		if ($result->num_rows() > 0) {

			$data = $result ->row_array();
			$name = $data['username'];
			$email = $data['email_add'];
			$user_type = $data['user_type'];

			$ses_data = array(
				'username' => $name,
				'email_add' => $email,
				'user_type' => $user_type,
				'logged_in' => TRUE

				);		
		
				
			$this->session->set_userdata($ses_data);

				if ($user_type === '1') {
					redirect('jof/admin');

				}elseif ($user_type === '2') {
					redirect('jof/accounting');

				}elseif ($user_type === '3') {
					redirect('jof/broker');

				}elseif($user_type === '4'){

					redirect('jof/consignee');
				}
			
			}else{

			

				redirect('jofcontroller/view/login','refresh');
			}
			

		}else{

			
			redirect();
		}
		
				
	}
	

	public function register(){

		if (isset($_POST['signup'])) {
				
			$this->form_validation->set_rules('companyName', 'Company Name' , 'required');
			$this->form_validation->set_rules('companyAdd', 'Company Address' , 'required');
			$this->form_validation->set_rules('firstName', 'First Name' , 'required');
			$this->form_validation->set_rules('lastName', 'Last Name' , 'required');
			$this->form_validation->set_rules('midInit', 'Middle Name' , 'required');
			$this->form_validation->set_rules('username', 'Username' , 'required|min_length[8]|max_length[20]|xss_trim|alpha|callback_username_check');
			$this->form_validation->set_rules('email', 'Email' , 'required|valid_email', array('required'=>'Please input email address', 'valid_email'=>'Invalid Email'));
			$this->form_validation->set_rules('homeAdd', 'Address' , 'required|xss_trim');
			$this->form_validation->set_rules('contactInfo', 'Contact Information' , 'required');
			$this->form_validation->set_rules('passWord', 'password' , 'required|min_length[8]|max_length[20]|xss_trim|md5');
			$this->form_validation->set_rules('passRepeat', 'Repeat Password' , 'required|matches[passWord]|xss_trim|md5');
			$this->form_validation->set_rules('cityAdd', 'City Address' , 'required');
			$this->form_validation->set_rules('cityState', 'State' , 'required');
			$this->form_validation->set_rules('zipCode', 'Zip Code' , 'required');

			
					$data = array(
						'user_type' => '4',
						'companyName' => $this->input->post('companyName'),
						'companyAdd' => $this->input->post('companyAdd'),
						'firstName' => $this->input->post('firstName'),
						'lastName' => $this->input->post('lastName'),
						'midInit' => $this->input->post('midInit'),
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'homeAdd' => $this->input->post('homeAdd'),
						'contactInfo' => $this->input->post('contactInfo'),
						'passWord' => md5($this->input->post('passWord')),
						'cityAdd' => $this->input->post('cityAdd'),
						'cityState' => $this->input->post('cityState'),
						'zipCode' => $this->input->post('zipCode')

						);
		// echo form_error('companyAdd');

			// var_dump($this->input->post());
			// die;
			
			if ($this->form_validation->run() == TRUE) {

				die('here');
					
					$data = array(
						'user_type' => '4',
						'companyName' => $this->input->post('companyName'),
						'companyAdd' => $this->input->post('companyAdd'),
						'firstName' => $this->input->post('firstName'),
						'lastName' => $this->input->post('lastName'),
						'midInit' => $this->input->post('midInit'),
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'homeAdd' => $this->input->post('homeAdd'),
						'contactInfo' => $this->input->post('contactInfo'),
						'passWord' => md5($this->input->post('passWord')),
						'cityAdd' => $this->input->post('cityAdd'),
						'cityState' => $this->input->post('cityState'),
						'zipCode' => $this->input->post('zipCode')

						);
							
					$check = $this->jof_model->addUser($data);

						if ($check !== FALSE) {

							$user_data = array(
								'user_id' => $check,
								'username' => $this->input->post('username'),
								'email' => $this->input->post('email'),
								'firstName' => $this->input->post('firstName'),
								'lastName' => $this->input->post('lastName')
								);


							}

								$this->session->set_userdata($user_data);
								redirect('jof/consignee');

			} else {

// print_r($data);
// 				die();

			$this->load->view('includes/header');
			$this->load->view('pages/signup', $data);
			$this->load->view('includes/footer');

				// redirect('jofcontroller/view/signup');
			}

		}

	}

		public function username_check($str){

			$userCheck = $this->jof_model->checkUser($str);

			if ($userCheck->num_rows() > 0 ) {

				$this->form_validation->set_message('username_check','Username is already taken');
				return FALSE;

			}else{
				return TRUE;
			}

		}
}

