<?php

defined('BASEPATH') OR exit('no dirrect scipt access allowed');
class c_report extends CI_Controller
{
   public function __construct(){
    parent::__construct();
    $this->load->library('pdf_report');
    $this->load->model('harian_model');
   }

   public function index($tanggal,$id_user){
       $data_laporan = $this->harian_model->getDataHarian($tanggal);
       $data_user = $this->harian_model->getDataUser($id_user);
       $this->load->view('kepala/v_report',array('data_laporan'=> $data_laporan, 'data_user'=> $data_user));
   }
}
