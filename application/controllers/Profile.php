<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

	public function index()
	{
		$this->require_login();
		$this->render_view('profile');
	}

	public function logout()
	{
		unset($_SESSION['active_user']);
		redirect('/', 'refresh');
	}
}
