<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if ($user = $this->user_model->auth($username, $password)) {
			$_SESSION['active_user'] = $user->id;
			redirect('/profile/', 'refresh');
		}
		$_SESSION['messages']['error'][] = 'Login failed.';
		redirect('/auth/', 'refresh');
	}

	public function logout()
	{
		unset($_SESSION['active_user']);
		redirect('/', 'refresh');
	}
}
