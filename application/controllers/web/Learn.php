<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learn extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka'); 
        $this->load->helper('form');
        $this->load->library('cart');  
    }
    public function open_access()
	{
        $send['title']='Seagull | Open Access Info';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/learn/open_access');
		$this->load->view('web/common/small_footer'); 
	}
	public function editor_responsibilities()
	{
        $send['title']='Seagull | Editor Duties and Responsibilities';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/learn/editor_responsibilities');
		$this->load->view('web/common/small_footer'); 
	}
	public function plagiarism_ethics()
	{
        $send['title']='Seagull | Plagiarism Guidelines';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/learn/plagiarism_ethics');
		$this->load->view('web/common/small_footer'); 
	}
	public function reviewer_reponsibilities()
	{
        $send['title']='Seagull | Reviewer Duties and Reponsibilities';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/learn/reviewer_reponsibilities');
		$this->load->view('web/common/small_footer'); 
	}
}
