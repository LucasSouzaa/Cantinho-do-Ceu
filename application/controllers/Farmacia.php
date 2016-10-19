<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmacia extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->user = $this->session->userdata('user');
	}

	public function entrada(){
		if ($this->user['logged']) {
			$data['content'] = 'farmacia/entrada';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}

	public function saida(){
		if ($this->user['logged']) {
			$data['content'] = 'farmacia/saida';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}
	
}