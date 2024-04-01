<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {
	public function index()
	{
		$this->load->view('form');
	}
	public function create() {
		$this->load->model('UserModel');
		$data = array(
			'name' => $this->input->post('name'),
			'password' => $this->input->post('password')
		);
		$validated_result = $this->UserModel->validate_input($data);

		if ($validated_result['name_valid'] === true) {
			$data['name_valid'] = true;
		}
		if ($validated_result['password_valid'] === true) {
			$data['password_valid'] = true;
		}
		$this->load->view('form', $data);
	}
}
