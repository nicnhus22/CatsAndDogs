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

	function require_login() {
		if (!$this->get_active_user()) {
			redirect('/', 'refresh');
		}
	}

	function render_view($view) {
		$this->load->view('layout/header');
		$messages = isset($_SESSION['messages']) ? $_SESSION['messages'] : array();
		$this->load->view('layout/messages', array('messages' => $messages));
		unset($_SESSION['messages']);
		$this->load->view($view, array('title' => 'CS Games Web Challenge'));
		$this->load->view('layout/footer');
	}
}
