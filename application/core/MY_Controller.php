<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('debug');
		$this->load->model('user_model');
	}

	function get_active_user() {
		if (!empty($_SESSION['active_user'])) {
			return $this->user_model->get($_SESSION['active_user']);
		}
		return FALSE;
	}
}
