<?php

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->load->view('template_login/header');
        $this->load->view('login/index');
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

    public function logout()
    {
        $this->session->sess_destroy(); #endregion
        redirect(base_url('login'));

    }
}
