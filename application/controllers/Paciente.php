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
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'pacientes/solicitar';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'serviço social':
                    $data['content'] = 'pacientes/solicitar';
                    $this->load->view('serv-social/home', $data);
                    break;
                default:
                    echo 'Você não está autorizado a ver esta página, consulte o administrador do sistema.';
                    break;
            }
        } else {
            $this->load->view('login');
        }
    }

    public function pesquisar(){
        if ($this->user['logged']) {
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'pacientes/pesquisar_paciente';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'serviço social':
                    $data['content'] = 'pacientes/pesquisar_paciente';
                    $this->load->view('serv-social/home', $data);
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