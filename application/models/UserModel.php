<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function inserData($userData)
	{	
		
		return $this->db->insert('tbl_users', $userData);
	}

	public function getData(){
		$query =  $this->db->query('select * from tbl_users');
		return $query->result_array();
	}

	public function getDataByUserId($userId){
		$query =  $this->db->query("select * from tbl_users where id=$userId");
		return $query->result_array();
	}

	public function updateData ($userDataArray, $userId){
		$this->db->where('id', $userId);
		return $this->db->update('tbl_users', $userDataArray);
	}
	public function DeleteData($userId){
		$this->db->where('id', $userId);
		return $this->db->delete('tbl_users');
	}
}
