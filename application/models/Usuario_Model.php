<?php

Class Usuario_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($id) {
         return $this->db->select('*')
                ->from('cadastro')
                ->where('id', $id)
                ->limit(1)
                ->get()->row_array();
    }

}

?>