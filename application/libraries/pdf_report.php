<?php

defined('BASEPATH') OR exit('no dirrect scipt access allowed');
require_once dirname(__file__).'/tcpdf/tcpdf.php';
class pdf_report extends TCPDF
{
   protected $ci;
   
   public function __construct(){
       $this->ci =& get_instance();
   }
}
