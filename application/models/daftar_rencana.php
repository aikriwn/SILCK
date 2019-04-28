<?php

class daftar_rencana extends CI_Model
{
    public function getAllRencana()
    {
        return $this->db->order_by("id_harian_kepala", "asc")->get('laporan_kepala')->result_array();
    }
    public function insertData($nama_tabel, $data)
    {
        return $this->db->insert($nama_tabel, $data);
    }
    public function tampil_edit($id)
    {
        return $this->db->where('id_harian_kepala', $id)->get('laporan_kepala')->result_array();
    }
    public function edit($nama_tabel, $data)
    {
        return $this->db->where('id_harian_kepala', $data['id_harian_kepala'])->update($nama_tabel, $data);
    }
    public function delete($id)
    {
        return $this->db->where('id_harian_kepala', $id)->delete('laporan_kepala');
    }

}
