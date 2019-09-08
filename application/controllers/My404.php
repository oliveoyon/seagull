<?php 
class My404 extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 { 
    //$this->output->set_status_header('404'); 
    //$this->load->view('err404');//loading in custom error view
	$this->load->view('web/common/header');
	$this->load->view('web/common/web/err404');
	$this->load->view('web/common/footer'); 
 } 
} 