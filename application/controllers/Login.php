<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Auth');
        $this->load->model('Usuario_Model');
        date_default_timezone_set('America/Sao_Paulo');
    }

    function check_login() {
        $usr = $this->input->post('username');
        $pwd = $this->input->post('password');
        $remember = $this->input->post('checkbox');

        $user = $this->Auth->login($usr, $pwd);
        
        //nao existe usuario com o login fornecido
        if ($user == 'NOTFOUND') {
            $status = 'ERROR';
            $message = 'Usuario ou senha incorreto';
        } else {            
            $user = $this->Usuario_Model->get_user($user);
            $session = array(
                    'user' => array(
                    'logged' => TRUE,
                    'id' => $user['id'],
                    'name' => $user['nome'],
                    'email' => $user['email']
                )
            );
            $this->session->set_userdata($session);
            //login com sucesso
            $status = "OK";
            $message = '';
            if ($remember == 'true') {
                /* Set cookie to last 1 year */
                setcookie('username', $usr, time() + 60 * 60 * 24 * 365, "/", NULL);
                setcookie('password', $pwd, time() + 60 * 60 * 24 * 365, "/", NULL);
                setcookie('check', $remember, time() + 60 * 60 * 24 * 365, "/", NULL);
            } else {
                /* Cookie expires when browser closes */
                setcookie('username', '', time() + 60 * 60 * 24 * 365, "/", NULL);
                setcookie('password', '', time() + 60 * 60 * 24 * 365, "/", NULL);
                setcookie('check', 'false', time() + 60 * 60 * 24 * 365, "/", NULL);
            }
        }

        echo json_encode(array(
            'status' => $status,
            'message' => $message
        ));
        exit;
    }

    function logout() {
        $this->session->sess_destroy();
        $this->load->view('login');
    }

}
?>