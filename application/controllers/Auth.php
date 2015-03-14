<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if ($user = $this->user_model->auth($username, $password)) {
			$_SESSION['active_user'] = $user->id;
			redirect('/profile/', 'refresh');
		}
		redirect('/auth/', 'refresh');
	}

	public function logout()
	{
		unset($_SESSION['active_user']);
	}
}
