<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel', 'UM');
	}
	public function users()
	{	

		$this->load->view('users/add_user');//folder/filename
	}

	public function addUser(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$userData = array(
							'name' => $name,
							'email' => $email
						);

		$result = $this->UM->inserData($userData);
		if($result){
			$this->session->set_flashdata('msg', 'User has been created successfully');
			return redirect('users/show-users');
		}

	}
	/**
	* show all users
	*/
	public function showUsers(){
		$userdata = array();
		$userdata['users'] = $this->UM->getData();
		$this->load->view('users/show_users', $userdata);
	}

	public function editUser($userId){

		$userdata = array();
		$userdata['users'] = $this->UM->getDataByUserId($userId);
		$this->load->view('users/edit_user', $userdata);
	}

	public function updateUser(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$userId = $this->input->post('user_id');
		$userDataArray = array('name' => $name, 'email' => $email);
		$result = $this->UM->updateData($userDataArray, $userId);
		if($result){
			$this->session->set_flashdata('msg', 'User has been updated successfully');
			return redirect('users/show-users');
		}
	}

	public function deleteUser($userId){
		$result = $this->UM->DeleteData($userId);
		if($result){
			$this->session->set_flashdata('msg', 'User has been deleted successfully');
			return redirect('users/show-users');
		}
	}
}
