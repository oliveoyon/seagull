<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archives extends CI_Controller {

	
	public function ebooks()
	{
        $this->load->library('pagination');
        $config['base_url'] = site_url('archives/ebooks');
        $config['total_rows'] = $this->Mdb->row_count('book_manuscript',array('book_manuscript_status'=>10));
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
        $send['manuscripts'] = $this->Mdb->paginate($config['per_page'], $send['page'],'book_manuscript','book_manuscript_id',array('book_manuscript_status'=>10));           

        $send['pagination'] = $this->pagination->create_links();
        $send['categories']=$this->Mdb->getData('product_category',array('pdt_cat_status'=>1));

		$this->load->view('web/common/header',$send);
		$this->load->view('web/home/browse_manuscripts');
		$this->load->view('web/common/footer');
	}

        public function ebook($manu,$title)
        {
            $send['data']=$this->Mdb->getDataRow('book_manuscript',array('manuscript_no'=>$manu));
            $send['chapters']=$this->Mdb->getData('book_chapter',array('manuscript_no'=>$manu));
            $this->load->view('web/common/header',$send);
            $this->load->view('web/home/chapter');
            $this->load->view('web/common/footer');    
        }

	
	
}
