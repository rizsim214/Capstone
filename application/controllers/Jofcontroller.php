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



				if(isset($_POST['signIn'])) {

					$this->form_validation->set_rules('userLogName' , 'Username' , 'required' , array('required' => 'Username must be provided'));
					$this->form_validation->set_rules('passLogWord' , 'Password' , 'required' , array('required' => 'Password must be provided'));

					if ($this->form_validation->run() == TRUE) {

							$data['userLogName'] = $this->input->post('userLogName');
							$data['passLogWord'] = md5(md5($this->input->post('passLogWord')));


							$result = $this->jof_model->verifyUser($data);
							

																		// DEBUGGING SYNTAXES
																		//  echo $this->db->last_query();
																		// die();
																 // print_r($result);
																	// var_dump($data);
								if ($result != NULL) {

									$user_data = $result;
									$name = $user_data['username'];
									$email = $user_data['email_add'];
									$user_type = $user_data['user_type'];
										


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

								}	else{
										

										$this->session->set_flashdata('Error' , 'Account not found! Please provide a valid account');
										redirect('jofcontroller/view/login');

									}


								}	else {


										$temp_data['userLogName'] = $this->input->post('userLogName');


										$this->load->view('includes/header');
										$this->load->view('pages/login');
										$this->load->view('includes/footer');

										}
					

										
						}
				}
	

	public function register(){

		if (isset($_POST['submit'])) {
				
				$this->form_validation->set_rules('companyName', 'Company Name' , 'required', array('required' => 'Company Name must be provided'));
				
				$this->form_validation->set_rules('companyAdd', 'Company Address' , 'required' , array('required' => 'Company Address must be provided'));
				
				$this->form_validation->set_rules('firstName', 'First Name' , 'required' , array('required' => 'First Name must be provided'));
				
				$this->form_validation->set_rules('lastName', 'Last Name' , 'required'  , array('required' => 'Last Name must be provided'));
				
				$this->form_validation->set_rules('midInit', 'Middle Name' , 'required'  , array('required' => 'Middle Name must be provided'));
				
				$this->form_validation->set_rules('username', 'Username' , 'required|min_length[8]|max_length[30]|trim|is_unique[jof_users.userName]'  , array('required' => 'Username must be provided', 'min_length' => 'Username must be more than 8 characters', 'max_length' => 'Username must be less than 30 characters' , 'is_unique' => 'Must be a unique username'));
				
				$this->form_validation->set_rules('email', 'Email' , 'required|valid_email|is_unique[jof_users.email_add]' , array('required' => 'Email must be provided', 'valid_email'=> 'Must be a valid email' , 'is_unique' => 'Must be a unique Email Address'));
				
				$this->form_validation->set_rules('homeAdd', 'Address' , 'required' , array('required' => 'Home Address must be provided') );
				
				$this->form_validation->set_rules('contactInfo', 'Contact Information' , 'required' , array('required' => 'Contact Information must be provided'));
				
				$this->form_validation->set_rules('passWord', 'password' , 'required|min_length[8]'  , array('required' => 'Password must be provided', 'min_length' => 'Password must be more than 8 characters'));
				
				$this->form_validation->set_rules('passRepeat', 'Repeat Password' , 'required|matches[passWord]' , array('required' => 'Password must be provided' , 'matches' => 'Must be the same with password'));
				
				$this->form_validation->set_rules('cityAdd', 'City Address' , 'required' , array('required' => 'City Address must be provided'));
				
				$this->form_validation->set_rules('cityState', 'State' , 'required', array('required' => 'State must be provided'));
				
				$this->form_validation->set_rules('zipCode', 'Zip Code' , 'required', array('required' => 'Zip code must be provided'));

				


				if ($this->form_validation->run() == TRUE) {
				
					$data = array(
						'user_type' => 4, 
						'company_name' => $this->input->post('companyName'),
						'company_add' => $this->input->post('companyAdd'),
						'firstName' => $this->input->post('firstName'),
						'lastName' => $this->input->post('lastName'),
						'mid_init' => $this->input->post('midInit'),
						'userName' => $this->input->post('username'),
						'email_add' => $this->input->post('email'),
						'home_Add' => $this->input->post('homeAdd'),
						'contact_info' => $this->input->post('contactInfo'),
						'pass_Word' => md5(md5($this->input->post('passWord'))),
						'user_City' => $this->input->post('cityAdd'),
						'user_State' => $this->input->post('cityState'),
						'user_Zip' => $this->input->post('zipCode')

						);
							
					$check = $this->jof_model->addUser($data);

						if ($check !== false) {
							$user_data = array(
								'user_id' => $check,
								'username' => $this->input->post('username'),
								'email' => $this->input->post('email'),
								'firstName' => $this->input->post('firstName'),
								'lastName' => $this->input->post('lastName')
								);


						}

						$this->session->set_userdata($user_data);
						redirect('jofcontroller/view/login');

					}else{
				
			
						
						$temp['companyName'] = $this->input->post('companyName');
						$temp['companyAdd'] = $this->input->post('companyAdd');
						$temp['firstName'] = $this->input->post('firstName');
						$temp['lastName'] = $this->input->post('lastName');
						$temp['midInit'] = $this->input->post('midInit');
						$temp['username'] = $this->input->post('username');
						$temp['email'] = $this->input->post('email');
						$temp['homeAdd'] = $this->input->post('homeAdd');
						$temp['contactInfo'] = $this->input->post('contactInfo');
						$temp['passWord'] = md5($this->input->post('passWord'));
						$temp['cityAdd'] = $this->input->post('cityAdd');
						$temp['cityState'] = $this->input->post('cityState');
						$temp['zipCode'] = $this->input->post('zipCode');

				
						$this->load->view('includes/header');
						$this->load->view('pages/signup', $temp);
						$this->load->view('includes/footer');

				

					}
		
			}
	}

	public function logout(){

		$this->session->unset_userdata($ses_data);
		redirect('jofcontroller/view/login');
	}
}