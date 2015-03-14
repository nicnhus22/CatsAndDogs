<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function index()
	{
		$this->render_view('profile');
	}

	public function logout()
	{
		unset($_SESSION['active_user']);
		redirect('/', 'refresh');
	}
}
