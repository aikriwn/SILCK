<?php

class insert_data extends CI_Model
{
    
    public function insertData($nama_tabel, $data)
    {
        return $this->db->insert($nama_tabel, $data);
    }

}