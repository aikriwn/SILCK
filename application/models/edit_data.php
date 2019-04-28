<?php

class edit_data extends CI_Model
{

    public function tampil_edit($id)
    {
        return $this->db->where('id_harian_staff', $id)->get('laporan_staff')->result_array();
    }
    public function edit($nama_tabel, $data)
    {
        return $this->db->where('id_harian_staff', $data['id_harian_staff'])->update($nama_tabel, $data);
    }
}
