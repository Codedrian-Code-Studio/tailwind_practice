<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {
	public function index()
	{
		$this->load->view('form');
	}
	public function create() {
		$this->load->model('UserModel');

		$validated_result = $this->UserModel->validate_input();
		$this->load->view('form', $validated_result);
	}
}
