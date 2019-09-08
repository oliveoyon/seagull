<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$send['title']='Seagull Publications | Introducing Scientific Education to World';
		$send['newses']=$this->Mdb->getDataDescLimit('news',array('news_status'=>1),'created_at',6);
		$this->load->view('web/common/header',$send);
		$this->load->view('web/home');
		$this->load->view('web/common/footer');
	}

public function err404()
	{
		$send['title']='Seagull | Page Not Found';
	
		$this->load->view('web/common/header',$send);
		$this->load->view('web/common/err404');
		$this->load->view('web/common/footer');
	}
}
