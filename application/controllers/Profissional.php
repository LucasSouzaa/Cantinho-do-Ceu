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
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'profissional/cadastro';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'recursos humanos':
                    $data['content'] = 'profissional/cadastro';
                    $this->load->view('rh/home', $data);
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
                    $data['content'] = 'profissional/pesquisar';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'recursos humanos':
                    $data['content'] = 'profissional/pesquisar';
                    $this->load->view('rh/home', $data);
                    break;
                default:
                    echo 'Você não está autorizado a ver esta página, consulte o administrador do sistema.';
                    break;
            }
        } else {
            $this->load->view('login');
        }
    }

    public function editar(){
        if ($this->user['logged']) {
            $type = $this->user['type'];
            switch ($type) {
                case 'administrador(a)':
                    $data['content'] = 'profissional/editar';
                    $this->load->view('administrator/home', $data);
                    break;
                case 'recursos humanos':
                    $data['content'] = 'profissional/editar';
                    $this->load->view('rh/home', $data);
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