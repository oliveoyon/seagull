<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_member extends CI_Controller {

	public function __construct() 
        {
            parent::__construct();
            if(($this->session->userdata('book_member')!=NULL) AND ($this->session->userdata('book_member')->member_status == 1)) { }
            	
				else{
            	$this->session->set_flashdata('loginerror', 'Login First');
            	redirect('login/book_member');
            } 
            date_default_timezone_set('Asia/Dhaka'); 
          	
        }

	public function dashboard()
	{
        $this->load->view('book_member/header');
		$this->load->view('book_member/dashboard');
		$this->load->view('book_member/footer'); 
	
	}
    
    public function review()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/review',$send);
		$this->load->view('book_member/footer');
	}

	public function my_reviewed_books()
	{
		$memberid=$this->session->userdata('book_member')->member_id;
		$send['pending_lists']=$this->Mdb->getmemberPaper($memberid,2);
		$this->load->view('book_member/header');
		$this->load->view('book_member/my_reviewed_books',$send);
		$this->load->view('book_member/footer');
	}

	public function accepted_reviews()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/accepted_reviews',$send);
		$this->load->view('book_member/footer');
	}

	public function pending_papers()
	{
		$reviewerid=$this->session->userdata('book_member')->member_id;
		$send['pending_lists']=$this->Mdb->getReviewerPaper($reviewerid,1);
		$this->load->view('book_member/header');
		$this->load->view('book_member/pending_papers',$send);
		$this->load->view('book_member/footer');
	}

	public function accepted_papers()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/accepted_papers',$send);
		$this->load->view('book_member/footer');
	}

	public function ethics_board_comments()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/ethics_board_comments',$send);
		$this->load->view('book_member/footer');
	}

	public function published_books()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/published_books',$send);
		$this->load->view('book_member/footer');
	}

	public function upload_new_file()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/upload_new_file',$send);
		$this->load->view('book_member/footer');
	}

	public function uploaded_files()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/uploaded_files',$send);
		$this->load->view('book_member/footer');
	}

   

	
	public function ethical_statement()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/ethical_statement',$send);
		$this->load->view('book_member/footer');
	}
	
	public function guidelines()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/guidelines',$send);
		$this->load->view('book_member/footer');
	}

	public function terms_of_services()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/terms_of_services',$send);
		$this->load->view('book_member/footer');
	}

	public function service_policy()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_member/header');
		$this->load->view('book_member/service_policy',$send);
		$this->load->view('book_member/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('book_member');
		redirect('login/book_member','refresh');
	}

	public function review_paper($id=NULL)
	{
		if(!($id)){redirect('book_member');}
		if($this->input->post()){
			$var=$this->input->post();
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('reviewer_comments', 'Reviewer Comments', 'trim|required');
        	if($this->form_validation->run()){
        		if($var['Save']=='Save'){
	    		$this->Mdb->update('book_assign_reviewer',array('reviewer_comments'=>$var['reviewer_comments']),array('assign_hash_id'=>$id));
	    		}else{
	    		$this->Mdb->update('book_assign_reviewer',array('reviewer_comments'=>$var['reviewer_comments'],'assign_status'=>2),array('assign_hash_id'=>$id));	
	    		}
	    		$this->session->set_flashdata('comments', 'Reviewer Comments Added Successfully!');
	    		redirect(current_url());
        	}
        }
		$send['details']=$this->Mdb->getReviewerPaperDetail($id);
		$this->load->view('book_member/header');
		$this->load->view('book_member/review_comment',$send);
		$this->load->view('book_member/footer');
		
	}

	public function view_my_reviewed_paper($id=NULL)
	{
		$send['details']=$this->Mdb->getReviewerPaperDetail($id);
		$this->load->view('book_member/header');
		$this->load->view('book_member/view_my_reviewed_paper',$send);
		$this->load->view('book_member/footer');
	}

	public function rev_comments_upload_img()
	{
		$config['upload_path']='uploads/reviewer_comments/';
		$config['allowed_types']='gif|jpg|jpeg';
		$config['max_size']=1024;
		$config['encrypt_name']=TRUE;
		$funcNum = $_GET['CKEditorFuncNum'];
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('upload')){
		echo json_encode(array('error'=>$this->upload->display_errors()));
		}else{
		$upload_data=$this->upload->data();
		$url = base_url('uploads/reviewer_comments/').$upload_data['file_name'];

		echo '<script>window.parent.CKEDITOR.tools.callFunction(0, "'.$url.'")</script>';

		}
	}

	
	
}
