<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->user = $this->session->userdata('user');
    }
	
    public function index(){
        if (isset($this->user['logged']) && $this->user['logged']) {
            $type = $this->session->userdata('type');
            switch ($type) {
                case 'serviço social':
                    $data['content'] = 'serv-social/dashboard.php';
                    $this->load->view('serv_social/home', $data);
                    break;
                case 'administrador(a)':
                    $data['content'] = 'administrator/dashboard.php';
                    $this->load->view('administrator/home', $data);
                default:
                    $this->load->view('login');
                    break;
            }               
        }else{
            $this->load->view('login');
        }
    }
    
    public function administrator(){
        if($this->user['logged']){
            $data['content'] = 'administrator/dashboard.php';
            $this->load->view('administrator/home', $data);
        }else{
            $this->load->view('login');
        }
    }

    public function servico_social(){
        if ($this->user['logged']) {
            $data['content'] = 'serv-social/dashboard.php';
            $this->load->view('serv-social/home', $data);
        } else{
            $this->load->view('login');
        }
    }
    
    public function farmaceutico(){
        if ($this->user['logged']) {
            $data['content'] = 'farmaceutico/dashboard.php';
            $this->load->view('farmaceutico/home', $data);
        } else{
            $this->load->view('login');
        }
    }

    public function rh(){
        if ($this->user['logged']) {
            $data['content'] = 'rh/dashboard.php';
            $this->load->view('rh/home', $data);
        } else{
            $this->load->view('login');
        }
    }
	
}

