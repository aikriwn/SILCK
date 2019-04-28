<?php

class staff extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['username'])) {
            redirect('login');
        }
        $this->load->model('insert_data');
        $this->load->model('daftar_karyawan');
        $this->load->model('get_data');
        $this->load->model('delete_data');
        $this->load->model('edit_data');
        $this->load->model('daftar_rencana');
    }
    public function index()
    {
        $this->load->view('staff/template/header');
        $this->load->view('staff/index');
        $this->load->view('staff/template/footer');
    }

    public function laporan_staff($id)
    {
        $data['kgt'] = $this->daftar_rencana->tampil_edit($id);
        $this->load->view('staff/template/header');
        $this->load->view('staff/laporan_staff', $data);
        $this->load->view('staff/template/footer');
    }
    public function laporan_harian()
    {
        $id_user = $this->session->userdata('id_user');
        $data['harian'] = $this->get_data->getDataLaporanStaff($id_user);
        $data['user'] = $this->get_data->getDataUser($id_user);

        $this->load->view('staff/template/header');
        $this->load->view('staff/laporan_harian', $data);
        $this->load->view('staff/template/footer');
    }

    public function daftar_perencanaan()
    {
        $data['perencanaan'] = $this->get_data->getAllRencana();
        $this->load->view('staff/template/header');
        $this->load->view('staff/daftar_perencanaan', $data);
        $this->load->view('staff/template/footer');
    }

    public function insert_laporan()
    {
        $hasil_query = false;
        if ($this->session->userdata('id_jabatan') == '02') {
            $data = array(
                'id_user' => $this->session->userdata('id_user'),
                'hari' => $this->input->post('hari'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'durasi' => $this->input->post('durasi'),
                'kegiatan' => $this->input->post('kegiatan'),
                'hasil' => $this->input->post('hasil'),
            );
            $hasil_query = $this->insert_data->insertData('laporan_staff', $data);
        } else {

            // $hasil_query = $this->daftar_rencana->insertData('laporan_staff', $data);

        }

        if ($hasil_query == 1) {
            echo $this->session->set_flashdata('message', 'Input berhasil!');
            redirect('staff/laporan_harian');
            //echo "Berhasil Disimpan";
        } else {
            redirect('staff/laporan_harian');
            //echo "Gagal Disimpan";
        }
    }

    public function hapus_laporan_harian($id)
    {
        $this->delete_data->hapusStaffLaporan($id);
        echo $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('staff/laporan_harian');
    }

    public function edit_laporan_harian($id)
    {
        $data['edit'] = $this->edit_data->tampil_edit($id);
        $this->load->view('staff/template/header');
        $this->load->view('staff/edit_laporan_harian', $data);
        $this->load->view('staff/template/footer');
    }

    public function edit()
    {
        $hasil_query = false;
        if ($this->session->userdata('id_jabatan') == '02') {
            $data = array(
                'id_harian_staff' => $this->input->post('id_harian_staff'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'durasi' => $this->input->post('durasi'),
                'kegiatan' => $this->input->post('kegiatan'),
                'hasil' => $this->input->post('hasil'),
            );
            $hasil_query = $this->edit_data->edit('laporan_staff', $data);
        } else {

            // $hasil_query = $this->daftar_rencana->insertData(' laporan_staff', $data);

        }

        if ($hasil_query == 1) {
            //berhasil
            echo $this->session->set_flashdata('message', 'Edit berhasil!');
            redirect('staff/laporan_harian');
        } else {
            //gagal
            redirect('staff/laporan_harian');
        }
    }
}
