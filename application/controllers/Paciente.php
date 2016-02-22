<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {
	function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->user = $this->session->userdata('user');
    }

	public function index(){
		if ($this->user['logged']) {
			$data['content'] = 'pacientes/solicitar';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}

	public function pesquisar(){
		if ($this->user['logged']) {
			$data['content'] = 'pacientes/pesquisar_paciente';
			$this->load->view('includes/base', $data);
		} else {
			$this->load->view('login');
		}
	}
}