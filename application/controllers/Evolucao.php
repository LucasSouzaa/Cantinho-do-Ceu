<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evolucao extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->user = $this->session->userdata('user');
    }

    public function index() {
        if ($this->user['logged']) {
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'evolucao/historico_semanal';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'serviço social':
                    $data['content'] = 'evolucao/historico_semanal';
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
