


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller {

  public function __construct() {

    parent::__construct();

    // load base_url
    $this->load->helper('url');
  }

  public function index(){

    $this->output->set_status_header('404'); 
    $this->load->view('web/common/header');
		    $this->load->view('web/common/err404');
		    $this->load->view('web/common/footer');
 
  }

}