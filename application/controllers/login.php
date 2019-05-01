<?php

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('insert_data');
    }

    public function index()
    {
        $this->load->view('template_login/header');
        $this->load->view('login/index');
        $this->load->view('template_login/footer');
    }

    public function admin()
    {
        $this->load->view('template_login/header');
        $this->load->view('login/admin');
        $this->load->view('template_login/footer');
    }

    public function daftar()
    {
        $this->load->view('template_login/header');
        $this->load->view('login/daftar');
        $this->load->view('template_login/footer');
    }

    public function registrasi()
    {
        $hasil_query = false;
        $data = array(
            'nama' => $this->input->post('NamaLengkap'),
            'username' => $this->input->post('Username'),
            'nomor_induk' => $this->input->post('NIP'),
            'password' => $this->input->post('password'),
            'grade' => $this->input->post('Kelas'),
            'jabatan' => $this->input->post('jabatan'),
            'id_jabatan' => $this->input->post('id_jabatan'),
        );
        $hasil_query = $this->insert_data->insertData('user', $data);
        if ($hasil_query == 1) {
            //berhasil
            echo $this->session->set_flashdata('message', 'Daftar berhasil!');
            redirect('login');
        } else {
            //gagal
            redirect('login/daftar');
        }
    }
    public function proses_login()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        if ($login = $this->login_model->auth($data)->num_rows() > 0) {
            $data_user = $this->login_model->auth($data)->row();
            # code...
            if ($data_user->id_jabatan == 01) {
                $status = 'login Kepala';
            } else {
                $status = 'login staff';
            }
            $data_session = array(
                'username' => $data['username'],
                'id_jabatan' => $data_user->id_jabatan,
                'id_user' => $data_user->id_user,
                'status' => $status
            );

            // var_dump($data_session);
            $this->session->set_userdata($data_session);
            if ($status == 'login Kepala') {
                redirect(base_url('kepala'));
            } else {
                redirect(base_url('staff'));
            }
        } else {
            echo $this->session->set_flashdata('message', 'Login gagal!');
            redirect(base_url());
        }
    }

    public function login_admin()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        if ($login = $this->login_model->auth($data)->num_rows() > 0) {
            $data_user = $this->login_model->auth($data)->row();
            # code...
            if ($data_user->admin == 01) {
                $status = 'admin';
            } else {
                $status = 'non-admin';
            }
            $data_session = array(
                'username' => $data['username'],
                'id_jabatan' => $data_user->id_jabatan,
                'id_user' => $data_user->id_user,
                'status' => $status,
                'admin' => $admin
            );

            // var_dump($data_session);
            $this->session->set_userdata($data_session);
            if ($status == 'admin') {
                redirect(base_url('admin'));
            } else {
                echo $this->session->set_flashdata('message', 'Anda bukan Admin!');
                redirect(base_url('login\admin'));
            }
        } else {
            echo $this->session->set_flashdata('message', 'Login gagal!');
            redirect(base_url('login\admin'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy(); #endregion
        redirect(base_url('login'));
    }
}
