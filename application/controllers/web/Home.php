<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka'); 
        $this->load->helper('form');
        $this->load->library('cart');  
    }
    public function manuscript_tracking()
	{
        $send['title']='Seagull | Track Manuscript Progress';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/manuscript_tracking');
		$this->load->view('web/common/small_footer'); 
	}
	 public function imprint()
	{
        $send['title']='Seagull | Imprint';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/imprint');
		$this->load->view('web/common/small_footer'); 
	}
	 public function award_and_certificate()
	{
        $send['title']='Seagull | Award and Certificate';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/award_and_certificate');
		$this->load->view('web/common/small_footer'); 
	}
	public function order_tracking()
	{
        $send['title']='Seagull | Track Product Delivery Progress';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/order_tracking');
		$this->load->view('web/common/small_footer'); 
	}
	public function conference_solution()
	{
        $send['title']='Seagull | Conference Solution';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/conference_solution');
		$this->load->view('web/common/small_footer'); 
	}
	public function seagull_research_community()
	{
        $send['title']='Seagull Research Community';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/seagull_research_community');
		$this->load->view('web/common/small_footer'); 
	}
	public function privacy_policy()
	{
        $send['title']='Seagull | Privacy Policy';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/privacy_policy');
		$this->load->view('web/common/footer'); 
	}

	public function about_us()
	{
        $send['title']='Seagull | About Us';
        $this->load->view('web/common/second_header',$send);
		$this->load->view('web/home/about_us');
		$this->load->view('web/common/footer'); 
	}

	public function request_service()
	{
        $send['title']='Seagull | Request a Service';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/request_service');
		$this->load->view('web/common/small_footer'); 
	}

	public function contact_us()
	{
        if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('name', 'Name', 'trim|required');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required');
        	$this->form_validation->set_rules('subject', 'Subject', 'trim');
        	$this->form_validation->set_rules('message', 'Message', 'trim|required');
        	
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['status']=1;
        		$this->Mdb->insert('contact_us',$var);
        		$this->session->set_flashdata('msg', 'Message successfully sent!');
        		redirect(current_url());
        	}
        }
        $send['title']='Seagull | Contact Us';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/contact_us');
		$this->load->view('web/common/footer'); 
	}

	public function gallery()
	{
        $send['title']='Seagull | Gallery';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/gallery');
		$this->load->view('web/common/footer'); 
	}

	public function help_and_support()
	{
        $send['title']='Seagull | Help and Support';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/help_and_support');
		$this->load->view('web/common/footer'); 
	}

	public function our_directors()
	{
        $send['title']='Seagull | Our Directors';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/our_directors');
		$this->load->view('web/common/footer'); 
	}

	public function meet_our_team()
	{
        $send['title']='Seagull | Our Team';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/meet_our_team');
		$this->load->view('web/common/footer'); 
	}

	public function book_authors()
	{
        $send['title']='Seagull Author Services | Book Authors';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/book_authors');
		$this->load->view('web/common/footer'); 
	}

	public function journal_authors()
	{
        $send['title']='Seagull Author Services | Journal Authors';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/journal_authors');
		$this->load->view('web/common/footer'); 
	}

	public function author_services()
	{
        $send['title']='Author Services';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/author_services');
		$this->load->view('web/common/small_footer'); 
	}

	public function editor_services()
	{
        $send['title']='Seagull | Editor Services';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/editor_services');
		$this->load->view('web/common/small_footer'); 
	}

	public function reviewer_services()
	{
        $send['title']='Seagull | Reviewer Services';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/reviewer_services');
		$this->load->view('web/common/small_footer'); 
	}

	public function librarian_services()
	{
        $send['title']='Seagull | Librarian Services';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/librarian_services');
		$this->load->view('web/common/small_footer'); 
	}

	public function terms_of_service()
	{
        $send['title']='Seagull | Terms of Service';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/terms_of_service');
		$this->load->view('web/common/footer'); 
	}

	public function file_a_complaint()
	{
        if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('complainant_fname', 'First Name', 'trim|required');
        	$this->form_validation->set_rules('complainant_lname', 'Last Name', 'trim|required');
        	$this->form_validation->set_rules('complainant_country', 'Country', 'required');
        	$this->form_validation->set_rules('complainant_email', 'Email', 'trim|required');
        	$this->form_validation->set_rules('complainant_description', 'Last Name', 'trim|required');
        	
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['complaint_hash_id'] = md5(uniqid(rand(), true));
        		$this->Mdb->insert('user_complaints',$var);
        		$this->session->set_flashdata('msg', 'Complaint successfully sent!');
        		redirect(current_url());
        	}
        }
        $send['title']='Seagull | File a Complaint';
        $send['countries']=$this->Mdb->getData('apps_countries');
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/file_a_complaint');
		$this->load->view('web/common/footer'); 
	}

	public function advertiser()
	{
        $send['title']='Seagull | Adversiter';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/advertiser');
		$this->load->view('web/common/footer'); 
	}

	public function journal_list($id=null)
	{
        $send['title']='Seagull | A to Z Journal List';
        $send['journals']=$this->Mdb->getDataAsc('reg_journal',array(),'journal_title');
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/journal_list');
		$this->load->view('web/common/small_footer'); 
	}

	public function browse_products($id=NULL)
	{
        $send['title']='Seagull | Browse Products';
        $this->load->library('pagination');
		$config['base_url'] = site_url('browse_products');
		if(empty($id)){
        $config['total_rows'] = $this->Mdb->row_count('product',array('pdt_status'=>1));
    	}else{$config['total_rows'] = $this->Mdb->row_count('product',array('pdt_status'=>1,'pdt_cat_id'=>$id));}
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
        if(empty($id)){
        $send['products'] = $this->Mdb->paginate($config['per_page'], $send['page'],'product','pdt_id',array('pdt_status'=>1));  
        }else{
        	$send['products'] = $this->Mdb->paginate($config['per_page'], $send['page'],'product','pdt_id',array('pdt_status'=>1,'pdt_cat_id'=>$id)); 
        }         

        $send['pagination'] = $this->pagination->create_links();
        $send['categories']=$this->Mdb->getData('product_category',array('pdt_cat_status'=>1));
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/browse_products');
		$this->load->view('web/common/footer'); 
	}
    
    public function checkout()
	{
        $send['title']='Seagull | Checkout';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/checkout');
		$this->load->view('web/common/small_footer'); 
	}
	public function e_services()
	{
        $send['title']='Seagull | E-Services for Researchers';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/e_services');
		$this->load->view('web/common/small_footer'); 
	}

	public function learn_about_src()
	{
		$send['title']='Seagull | Learn About SRC';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/learn_about_src');
		$this->load->view('web/common/footer');
	}

	public function news_details()
	{
		$send['title']='Seagull | News Details';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/news_details');
		$this->load->view('web/common/footer');
	}

	public function submit_manuscript()
	{
		$send['title']='Seagull | Submit Manuscript';
		if($this->input->post()){
			$this->load->library('form_validation');
            $this->form_validation->set_rules('search', 'Keyword', 'trim|required');
            if($this->form_validation->run()){
                $var = $this->input->post();
            	
            	$this->db->like('journal_title', $this->input->post('search'));
            	$this->db->or_like('journal_issn_online',$this->input->post('search'));
            	$this->db->or_like('journal_issn_print',$this->input->post('search'));
            	$query = $this->db->get('reg_journal')->result();
                $this->session->set_flashdata('searchdata', $query);
                redirect('journal-finder');
            }
		}
        $this->load->view('web/common/header',$send);
		$this->load->view('web/home/submit_manuscript');
		$this->load->view('web/common/small_footer');
	}

	public function journal_finder()
	{
		$send['title']='Seagull | Journal Finder';
		$this->load->view('web/common/header',$send);
		$this->load->view('web/home/journal_finder');
		$this->load->view('web/common/small_footer');
	}
	
	public function editor_request()
	{
		$this->load->helper(array('form', 'url'));
		$send['title']='Seagull | Editor Request';
		$send['error']='';
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('editor_req_fname', 'First Name', 'trim|required');
        	$this->form_validation->set_rules('editor_req_lname', 'Last Name', 'trim|required');
        	$this->form_validation->set_rules('editor_req_email', 'Email', 'trim|required|valid_email|is_unique[editor_req_register.editor_req_email]');
        	$this->form_validation->set_rules('editor_req_country', 'Country', 'trim|required');

        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['editor_req_hash_id'] = md5(uniqid(rand(), true));
        	
		        	if(($_FILES['editor_req_cv']['name'])){	
		        		$config['upload_path']          = './uploads/editor_cv/';
		                $config['allowed_types']        = 'pdf';
		                $config['max_size']             = 1000;
		                
		                $config['file_name'] = time();
		                $this->load->library('upload', $config);

		                //echo $this->upload->data()['file_name'];exit;

		                if ( ! $this->upload->do_upload('editor_req_cv'))
		                {
		                    $err=$this->upload->display_errors();
		                    $send['error']= "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a><strong> $err </strong></div>";
		                }else{
						
						$var['editor_req_cv']=$this->upload->data()['file_name'];
		                $this->Mdb->insert('editor_req_register',$var);
		        		$this->session->set_flashdata('msg', 'Editor Request successfully sent!');
		        		redirect(current_url());
		                }
		            }
        		
        	}
        }
		$send['countries']=$this->Mdb->getData('apps_countries');
		$send['journals']=$this->Mdb->getData('reg_journal',array('journal_status'=>1));
		$this->load->view('web/common/header',$send);
		$this->load->view('web/home/editor_request');
		$this->load->view('web/common/small_footer');
	}

	public function propose_new_journal()
	{
		$this->load->helper(array('form', 'url'));
		$send['title']='Seagull | Propose New Journal';
		$send['error']='';
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        	$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        	$this->form_validation->set_rules('editor_in_chief', 'Editor in Chief', 'trim|required');
        	$this->form_validation->set_rules('editor', 'Editor', 'trim|required');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[propose_journal.email]');
        	$this->form_validation->set_rules('country', 'Country', 'trim|required');

        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['propose_journal_hash_id'] = md5(uniqid(rand(), true));
        	
		        	if(($_FILES['cv']['name'])){	
		        		$config['upload_path']          = './uploads/propose_journal/';
		                $config['allowed_types']        = 'pdf';
		                $config['max_size']             = 1000;
		                
		                $config['file_name'] = time();
		                $this->load->library('upload', $config);

		                if ( ! $this->upload->do_upload('cv'))
		                {
		                    $err=$this->upload->display_errors();
		                    $send['error']= "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a><strong> $err </strong></div>";
		                }else{
						
						$var['cv']=$this->upload->data()['file_name'];
		                $this->Mdb->insert('propose_journal',$var);
		        		$this->session->set_flashdata('msg', 'Proposal for Journal successfully sent!');
		        		redirect(current_url());
		                }
		            }
        		
        	}
        }
		$send['countries']=$this->Mdb->getData('apps_countries');
		$send['journals']=$this->Mdb->getData('reg_journal',array('journal_status'=>1));
		$this->load->view('web/common/header',$send);
		$this->load->view('web/home/propose_journal');
		$this->load->view('web/common/small_footer');
	}

	public function publisher_request()
	{
		$this->load->library('bcrypt');
		$send['title']='Seagull | Publisher Request';
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('publication_name', 'Publication Name', 'trim|required');
        	$this->form_validation->set_rules('publisher_fname', 'First Name', 'trim|required');
        	$this->form_validation->set_rules('publisher_lname', 'Last Name', 'trim|required');
        	$this->form_validation->set_rules('publisheremail', 'Publisher Email', 'trim|required|is_unique[publisher_request.publisheremail]');
        	$this->form_validation->set_rules('publisher_password', 'Password', 'required|min_length[5]|callback_is_password_strong');
			$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[publisher_password]');
			$this->form_validation->set_rules('publisher_year', 'Year', 'required|min_length[4]|max_length[4]|numeric');
        	$this->form_validation->set_rules('publisher_country', 'Country', 'trim|required');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		unset($var['cpass']);
        		$var['publisher_password']=$this->bcrypt->hash_password($var['publisher_password']);
        		$var['publisher_req_hash_id'] = md5(uniqid(rand(), true));
        		$this->Mdb->insert('publisher_request',$var);
        		$this->session->set_flashdata('pubreq', 'Request Sent Successfully');
        		redirect(current_url());
        	}
        }
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('web/common/header',$send);
		$this->load->view('web/home/publisher_request');
		$this->load->view('web/common/small_footer');
	}

	public function is_password_strong($password)
	{
	   if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password)) {
	     return TRUE;
	   }
	   $this->form_validation->set_message('is_password_strong', 'The {field} field should be Complex');
	   return FALSE;
	}

	public function submit_book_manuscript()
	{
		$this->load->library('bcrypt');
		$send['title']='Book Manuscript Submission';
		$send['error']='';
		if($this->input->post()){
			$var = $this->input->post();
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('your_email', 'The Author Email', 'trim|required|is_unique[reg_book_author.your_email]');
        	$this->form_validation->set_rules('your_password', 'Password', 'required|min_length[5]|callback_is_password_strong');
        	$this->form_validation->set_rules('your_cpassword', 'Confirm Password', 'required|matches[your_password]');
        	if($this->form_validation->run()){
        		array_map('trim', $var);
        		unset($var['your_cpassword']);
        		$var['your_password']=$this->bcrypt->hash_password($var['your_password']);
        		$var['book_author_req_hash_id'] = md5(uniqid(rand(), true));
        		
        		if(($_FILES['book_submission_form']['name'])){	
		        		$config['upload_path']          = './uploads/book_submission_form/';
		                $config['allowed_types']        = 'pdf|doc|docx';
		                $config['max_size']             = 1000;
		                
		                $config['file_name'] = time();
		                $this->load->library('upload', $config);

		                //echo $this->upload->data()['file_name'];exit;

		                if ( ! $this->upload->do_upload('book_submission_form'))
		                {
		                    $err=$this->upload->display_errors();
		                    $send['error']= "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a><strong> $err </strong></div>";
		                }else{
						
						$var['book_submission_form']=$this->upload->data()['file_name'];
		                $this->Mdb->insert('reg_book_author',$var);
        	        	$this->session->set_flashdata('pubreq', 'Request Sent Successfully');
        		        redirect(current_url());
		                }
		            }
        		
        		
        		
        		
        		
        		
        		
        	}
        }
        $send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('web/common/header');
		$this->load->view('web/home/submit_book_manuscript',$send);
		$this->load->view('web/common/small_footer');
	}

	public function product_detail($id=NULL)
	{
		$send['product']=$this->Mdb->getDataRow('product',array('pdt_hash_id'=>$id));
		$send['review']=$this->Mdb->getData('product_review',array('pdt_id'=>$send['product']->pdt_id));
		$send['categories']=$this->Mdb->getData('product_category',array('pdt_cat_status'=>1));
		$this->load->view('web/common/header',$send);
		$this->load->view('web/home/product_detail');  
		$this->load->view('web/common/small_footer');
	}

	public function addtocart()
	 {
	    if($this->input->post())
	       {
	          $var=$this->input->post();
	          $data = array(
	                  'id'      => $var['id'],
	                  'qty'     => $var['qty'],
	                  'price'   => $var['price'],
	                  'name'    => $var['name'],
	          );

	          $this->cart->insert($data);
	          redirect('browse_products');
	       }
	 }

    public function cart_destroy()
     {
         $this->cart->destroy();
         redirect('browse_products');
     }

     public function view_cart()
         {
            if($this->input->post()){
               $var=$this->input->post();
               print_r($var);exit;
               $data=array('rowid'=>$var['rowid'],'qty'=>$var['qty'] );
               $this->cart->update($data);
               redirect('view-cart');
               }
            $this->load->view('web/common/header');
			$this->load->view('web/home/view_cart');  
			$this->load->view('web/common/small_footer');
         }

    public function cart_delete($id=NULL)
         {
            $data=array(
               'rowid'=>$id,
               'qty'=>'0'
            );
            $this->cart->update($data);
            redirect('view-cart');
         }

    public function cart_edit()
	 {
	    if($this->input->post()){
	       $var=$this->input->post();
	       //$var['qty'] = trim(preg_replace('/([^0-9\.])/i', '', $var['qty']));
	       $data=array('rowid'=>$var['rowid'],'qty'=>$var['qty'] );

	       $this->cart->update($data);
	       redirect('view-cart');
	       }
	               
	 }

	public function product_review()
	{
		if($this->input->post()){
			$var=$this->input->post();
			//print_r($var);exit;
			$data=array('name'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'text'=>$this->input->post('text'),
						'review_status'=>1,
						'pdt_id'=>$this->input->post('pdt_id')
						);
			$this->Mdb->insert('product_review',$data);
			$this->session->set_flashdata('review', 'Product Reviewed Successfully');
			redirect('product_detail/'.$this->input->post('pdt_hash_id'));
		}
	}

	
}
