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
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'farmacia/entrada';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'farmacêutico(a)':
                    $data['content'] = 'farmacia/entrada';
                    $this->load->view('farmaceutico/home', $data);
                    break;
                default:
                    echo 'Você não está autorizado a ver esta página, consulte o administrador do sistema.';
                    break;
            }
        } else {
            $this->load->view('login');
        }
    }

    public function saida(){
        if ($this->user['logged']) {
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'farmacia/saida';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'farmacêutico(a)':
                    $data['content'] = 'farmacia/saida';
                    $this->load->view('farmaceutico/home', $data);
                    break;
                default:
                    echo 'Você não está autorizado a ver esta página, consulte o administrador do sistema.';
                    break;
            }
        } else {
            $this->load->view('login');
        }
    }
	
}