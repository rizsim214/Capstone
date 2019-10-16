<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jof_Model extends CI_Model{
	public function __construct(){

		parent:: __construct();
	}

	public function verifyUser($arr){

		
		$this->db->select('*');
		$this->db->from('jof_users');
		$this->db->where('userName', $arr['username']);
		$this->db->where('pass_Word', $arr['password']);

		$query = $this->db->get();
			
		return $query;
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