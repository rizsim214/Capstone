<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ses_Model extends CI_Model{
	public function __construct(){

		parent:: __construct();
	}


	public function get_session($ses_data){

		$newArray = array(
			'ses_username' => $ses_data['username'],
			'ses_email' => $ses_data['email_add'],
			'ses_user_type' => $ses_data['user_type'],
			'ses_company_name' => $ses_data['companyName'],
			'ses_company_add' => $ses_data['companyAdd'],
			'ses_contact_info' => $ses_data['contactInfo'],
			'ses_city_Add' => $ses_data['city_Add'],
			'ses_city_State' => $ses_data['city_State'],
			'ses_city_Zip' => $ses_data['city_Zip'],
			'ses_logged_in' => $ses_data['logged_in']

		);
		// var_dump($newArray);
		
		return $this->session->set_userdata($newArray);
		// var_dump($this->session->userdata($ses_data));
		// die();
		//  return $this->session->set_userdata($ses_data);

	}
}