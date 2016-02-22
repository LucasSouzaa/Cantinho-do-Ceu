<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->user = $this->session->userdata('user');
    }
	
	public function index()
	{
		if (isset($this->user['logged']) && $this->user['logged']) {
            $this->homepage();
        } 
        else {
			$this->load->view('login');
		}
	}

	public function homepage(){
		if ($this->user['logged']) {
			$data['content'] = 'home';
			$this->load->view('includes/base', $data);
		} else{
			$this->load->view('login');
		}
	}
	
}

