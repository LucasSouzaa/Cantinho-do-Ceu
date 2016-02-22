<?php

Class Auth extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * LOGIN
     * @param string $name or $email
     * @param string $password
     * @return string OK, NOTFOUND, ERROR
     */
    function login($login, $password) {
        $this->db->select('*')
                ->from('cadastro')
                ->where('senha', $password)
                ->where('usuario', $login)
                ->limit(1);

        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $msg = $row->id;
        } else {
            $this->db->select('*')
                    ->from('cadastro')
                    ->where('senha', $password)
                    ->where('usuario', $login)
                    ->limit(1);

            $query2 = $this->db->get();

            if ($query2->num_rows() == 1) {
                $row2 = $query2->row();
                $msg = $row2->id;
            } else {
                $msg = "NOTFOUND";
            }
        }
        return $msg;
    }

}

?>