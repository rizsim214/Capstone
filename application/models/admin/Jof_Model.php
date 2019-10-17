<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jof_Model extends CI_Model{
	public function __construct(){

		parent:: __construct();
	}

	public function verifyUser($data){

		
		$this->db->select('*');
		$this->db->from('jof_users');
		$this->db->where('userName', $data['userLogName']);
		$this->db->where('pass_Word', $data['passLogWord']);

		$query = $this->db->get();
			
		return $return = $query->row_array();
		// echo '<pre>';
		// echo $this->db->last_query();
		// print_r($return);

		// echo  '</pre>';
		// die('jere');
	}

	public function addUser($data){

			$this->db->select('*');
			$this->db->from('jof_users');
			$insert = $this->db->insert('jof_users',$data);

			if ($insert) {
				return $this->db->insert_id();
			}else {
				return false;
			}

	}
}