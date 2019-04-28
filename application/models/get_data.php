<?php

class get_data extends CI_Model
{

    public function getStaff()
    {
        return $this->db->get('user')->result_array();
    }
    
    public function getAllRencana()
    {
        
        return $this->db->get('laporan_kepala')->result_array();
    }

    public function getAllLaporanStaff()
    {
        return $this->db->get('laporan_staff')->result_array();
    }

    public function getDataLaporanStaff($id_user)
    {
        //return $this->db->where('id_user',$id_user)->get('laporan_staff')->result_array();
        return $this->db->where('laporan_staff.id_user',$id_user)->join('user','laporan_staff.id_user = user.id_user')->get('laporan_staff')->result_array();
    }

    public function getDataUser($id_user){
        return $this->db->where('id_user',$id_user)->get('user')->result_array();
    }



}
