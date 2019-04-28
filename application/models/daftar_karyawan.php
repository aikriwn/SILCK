<?php

class daftar_karyawan extends CI_Model
{
    public function getStaff()
    {
        return $this->db->get('user')->result_array();
    }

}
