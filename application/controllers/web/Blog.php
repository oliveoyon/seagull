<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	public function blog_list()
	{
		//$send['blogs']=$this->Mdb->getData('blog',array('blog_status'=>1));
	$this->load->library('pagination');
	$config['base_url'] = site_url('blog/blog_list');
        $config['total_rows'] = $this->Mdb->row_count('blog',array('blog_status'=>1));
        $config['per_page'] = 2;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        //$config["num_links"] = round($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagiNation">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="bg-theme">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev bg-theme">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="bg-theme">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="bg-theme">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active bg-theme"><a href="#">';  
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="bg-theme">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $send['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $send['blogs'] = $this->Mdb->paginate($config['per_page'], $send['page'],'blog','blog_id',array('blog_status'=>1));           

        $send['pagination'] = $this->pagination->create_links();


		$this->load->view('web/common/header',$send);
		$this->load->view('web/blog/blog_list');
		$this->load->view('web/common/small_footer');
	}

	public function blog_details($slug=null)
	{
		$send['title']=$slug;
		$this->load->view('web/common/header',$send);
		//$this->load->view('web/blog/blog_list');
		$this->load->view('web/common/footer');
	}

	
}
