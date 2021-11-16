<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('get_resultados', 'url'));
		$this->load->model('ModeloResultados');
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('mensaje_inicio');
		$this->load->view('templates/footer');
	}

	public function mostrar_resultados() {
		$data['titulo'] = 'Mostrar resultados';
		$data['resultados'] = $this->ModeloResultados->mostrar();

		$this->load->view('templates/header');
		$this->load->view('mostrar_resultados', $data);
		$this->load->view('templates/footer');	
	}

}
