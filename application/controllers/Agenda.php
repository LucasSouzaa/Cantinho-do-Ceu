<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    function __construct() {
            parent::__construct();
            date_default_timezone_set('America/Sao_Paulo');
            $this->user = $this->session->userdata('user');
    }
}