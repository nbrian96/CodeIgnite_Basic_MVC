<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}

	public function index()	{
		$this->load->view('login');
	}

	public function validate() {
		$this->form_validation->set_error_delimiters('', '');
		$rules = get_login_rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === FALSE) {
			$errors = array(
				'email' => form_error('email'),
				'password' => form_error('password'),
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		} else {
			$user = $this->input->post('email');
			$pass = $this->input->post('password');

			$res = $this->Auth->login($user, $pass);
			if(!$res) {
				echo json_encode(array('msg' => 'Verifique sus credenciales'));
				$this->output->set_status_header(401);
				exit;
			}
			echo json_encode(array('msg' => 'Bienvenido'));
		}
	}
}
