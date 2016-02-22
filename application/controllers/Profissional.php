<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profissional extends CI_Controller {

	function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->user = $this->session->userdata('user');
    }

	public function index(){
		if ($this->user['logged']) {
			$data['content'] = 'profissional/cadastro';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}

	public function pesquisar(){
		if ($this->user['logged']) {
			$data['content'] = 'profissional/pesquisar';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}

	public function editar(){
		if ($this->user['logged']) {
			$data['content'] = 'profissional/editar';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}

}