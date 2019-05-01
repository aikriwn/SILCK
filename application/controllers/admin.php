<?php

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['username'])) {
            redirect('login');

        }
        $this->load->model('daftar_rencana');
        $this->load->model('daftar_karyawan');
        $this->load->model('harian_model');
    }
    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }

    public function daftar_pengguna()
    {
        $data['karyawan'] = $this->daftar_karyawan->getStaff();
        $this->load->view('admin/template/header');
        $this->load->view('admin/daftar_pengguna', $data);
        $this->load->view('admin/template/footer');
    }

    public function verifikasi_pengguna()
    {
        $data['karyawan'] = $this->daftar_karyawan->getStaff();
        $this->load->view('admin/template/header');
        $this->load->view('admin/daftar_pengguna', $data);
        $this->load->view('admin/template/footer');
    }

    public function laporan_admin()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/laporan_kepala');
        $this->load->view('admin/template/footer');
    }
    public function laporan_harian()
    {
        $data['harian'] = $this->harian_model->getData();
        $this->load->view('admin/template/header');
        $this->load->view('admin/laporan_harian', $data);
        $this->load->view('admin/template/footer');
    }
    // public function laporan_bulanan()
    // {
    //     $this->load->view('admin/template/header');
    //     $this->load->view('admin/laporan_bulanan');
    //     $this->load->view('admin/template/footer');
    // }

    public function daftar_perencanaan()
    {
        $data['perencanaan'] = $this->daftar_rencana->getAllRencana();
        $this->load->view('admin/template/header');
        $this->load->view('admin/daftar_perencanaan', $data);
        $this->load->view('admin/template/footer');
    }

    public function verifikasi_registrasi()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/verifikasi_registrasi');
        $this->load->view('admin/template/footer');
    }

    public function hapusRencana($id)
    {
        $this->daftar_rencana->delete($id);
        echo $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('admin/daftar_perencanaan');
    }
    public function editRencana($id)
    {
        $data['edit'] = $this->daftar_rencana->tampil_edit($id);;
        $this->load->view('admin/template/header');
        $this->load->view('admin/edit_rencana', $data);
        $this->load->view('admin/template/footer');
    }
    public function edit()
    {
        $hasil_query = false;
        if ($this->session->userdata('id_jabatan') == '01') {
            $data = array(
                'id_user' => $this->session->userdata('id_user'),
                'id_harian_kepala' => $this->input->post('id_harian_kepala'),
                'hari' => $this->input->post('hari'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'kegiatan' => $this->input->post('kegiatan'),
                'sifat_order' => $this->input->post('order'),
                'jenis_peralatan' => $this->input->post('peralatan'),
                'petugas' => $this->input->post('petugas'),
                'produser' => $this->input->post('produser'),
            );
            $hasil_query = $this->daftar_rencana->edit('laporan_kepala', $data);

        } else {

            // $hasil_query = $this->daftar_rencana->insertData(' laporan_staff', $data);

        }

        if ($hasil_query == 1) {
            //berhasil
            echo $this->session->set_flashdata('message', 'Edit berhasil!');
            redirect('admin/daftar_perencanaan');
        } else {
            //gagal
            redirect('admin/laporan_kepala');
        }
    }



    public function insert_rencana()
    {
        $hasil_query = false;
        if ($this->session->userdata('id_jabatan') == '01') {
            $data = array(
                'id_user' => $this->session->userdata('id_user'),
                'hari' => $this->input->post('hari'),
                'tanggal' => $this->input->post('tanggal'),
                'waktu' => $this->input->post('waktu'),
                'kegiatan' => $this->input->post('kegiatan'),
                'sifat_order' => $this->input->post('order'),
                'jenis_peralatan' => $this->input->post('peralatan'),
                'petugas' => $this->input->post('petugas'),
                'produser' => $this->input->post('produser'),
            );
            $hasil_query = $this->daftar_rencana->insertData('laporan_kepala', $data);

        } else {
         // $hasil_query = $this->daftar_rencana->insertData(' laporan_staff', $data);
        }
        if ($hasil_query == 1) {
            //berhasil
            echo $this->session->set_flashdata('message', 'Input berhasil!');
            redirect('admin/daftar_perencanaan');
        } else {
            //gagal
            redirect('admin/laporan_kepala');
        }
    }
}
