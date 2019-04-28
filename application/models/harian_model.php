<?php

class harian_model extends CI_Model
{
    public function getData()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('laporan_staff', 'user.id_user = laporan_staff.id_user');
        return $this->db->get()->result_array();
    }

    public function getDataHarian($tanggal){
        $this->db->select('*');
        $this->db->from('laporan_staff');
        $this->db->where(array('tanggal' => $tanggal));
        $this->db->order_by("waktu","asc");
        return $this->db->get()->result_array();
    }

    public function getDataUser($id_user){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('id_user' => $id_user));
        return $this->db->get()->result_array();
    }

}
