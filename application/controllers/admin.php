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
        $this->load->model('user');
        $this->load->model('edit_data');
    }
    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/index');
        $this->load->view('admin/template/footer');
    }

    public function daftar_pengguna()
    {
        $data['pengguna'] = $this-> user->getUser();
        $this->load->view('admin/template/header');
        $this->load->view('admin/daftar_pengguna', $data);
        $this->load->view('admin/template/footer');
    }

    public function verifikasi_pengguna()
    {
        $data['pengguna'] = $this-> user->getUnverified();
        $this->load->view('admin/template/header');
        $this->load->view('admin/verifikasi_pengguna', $data);
        $this->load->view('admin/template/footer');
    }

    public function daftar_perencanaan()
    {
        $data['perencanaan'] = $this->daftar_rencana->getAllRencana();
        $this->load->view('admin/template/header');
        $this->load->view('admin/daftar_perencanaan', $data);
        $this->load->view('admin/template/footer');
    }

    public function hapus_pengguna($id)
    {
        $this->user->delete_user($id);
        echo $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('admin/daftar_pengguna');
    }
    public function batal_pengguna($id)
    {
        $this->user->delete_user($id);
        echo $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('admin/verifikasi_pengguna');
    }

    public function edit_pengguna($id)
    {
        $data['edit'] = $this-> user->tampil_edit($id);;
        $this->load->view('admin/template/header');
        $this->load->view('admin/edit_pengguna', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit_verifikasi($id)
    {
        $data['edit'] = $this-> user->tampil_edit($id);;
        $this->load->view('admin/template/header');
        $this->load->view('admin/edit_verifikasi', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit()
    {
        $hasil_query = false;

            $data = array(
                'id_user' => $this->input->post('id_user'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nomor_induk' => $this->input->post('nomor_induk'),
                'nama' => $this->input->post('nama'),
                'id_jabatan' => $this->input->post('id_jabatan'),
                'jabatan' => $this->input->post('jabatan'),
                'grade' => $this->input->post('grade'),
                'admin' => $this->input->post('admin')
            );
            $hasil_query = $this->edit_data->edit_user('user', $data);

        if ($hasil_query == 1) {
            //berhasil
            echo $this->session->set_flashdata('message', 'Edit berhasil!');
            redirect('admin/daftar_pengguna');
        } else {
            //gagal
            redirect('admin/daftar_pengguna');
        }
    }

    public function verifikasi()
    {
        $hasil_query = false;

            $data = array(
                'id_user' => $this->input->post('id_user'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nomor_induk' => $this->input->post('nomor_induk'),
                'nama' => $this->input->post('nama'),
                'id_jabatan' => $this->input->post('id_jabatan'),
                'jabatan' => $this->input->post('jabatan'),
                'grade' => $this->input->post('grade'),
                'admin' => $this->input->post('admin')
            );
            $hasil_query = $this->edit_data->edit_user('user', $data);

        if ($hasil_query == 1) {
            //berhasil
            echo $this->session->set_flashdata('message', 'Edit berhasil!');
            redirect('admin/verifikasi_pengguna');
        } else {
            //gagal
            redirect('admin/verifikasi_pengguna');
        }
    }
}
