<?php

class user extends CI_Model
{
    public function getUser()
    {
        $this->db->where('id_jabatan !=','0');
        return $this->db->get('user')->result_array();
    }

    public function getUnverified()
    {
        $this->db->where('id_jabatan','0');
        return $this->db->get('user')->result_array();
    }

    public function tampil_edit($id)
    {
        return $this->db->where('id_user', $id)->get('user')->result_array();
    }

    public function delete_user($id)
    {
        return $this->db->where('id_user',$id)->delete('user');
    }

}
