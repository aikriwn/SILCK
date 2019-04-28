<?php

class login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function auth($where)
    {
        return $this->db->get_where('user', $where);
    }

}
