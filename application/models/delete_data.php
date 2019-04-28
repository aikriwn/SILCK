<?php

class delete_data extends CI_Model
{
    
    public function hapusStaffLaporan($id)
    {
        return $this->db->where('id_harian_staff',$id)->delete('laporan_staff');
    }

}