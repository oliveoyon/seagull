<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_reviewer extends CI_Controller {

	public function __construct() 
        {
            parent::__construct();
            if(($this->session->userdata('book_reviewer')!=NULL) AND ($this->session->userdata('book_reviewer')->reviewer_status == 1)) { }
            	
				else{
            	$this->session->set_flashdata('loginerror', 'Login First');
            	redirect('login/book_reviewer');
            } 
            date_default_timezone_set('Asia/Dhaka'); 
          	
        }

	public function dashboard()
	{
        $this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/dashboard');
		$this->load->view('book_reviewer/footer'); 
	
	}
    
    public function review()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/review',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function my_reviewed_books()
	{
		$reviewerid=$this->session->userdata('book_reviewer')->reviewer_id;
		$send['pending_lists']=$this->Mdb->getReviewerPaper($reviewerid,2);
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/my_reviewed_books',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function accepted_reviews()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/accepted_reviews',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function pending_papers()
	{
		$reviewerid=$this->session->userdata('book_reviewer')->reviewer_id;
		$send['pending_lists']=$this->Mdb->getReviewerPaper($reviewerid,1);
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/pending_papers',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function accepted_papers()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/accepted_papers',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function ethics_board_comments()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/ethics_board_comments',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function published_books()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/published_books',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function upload_new_file()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/upload_new_file',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function uploaded_files()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/uploaded_files',$send);
		$this->load->view('book_reviewer/footer');
	}

    public function chats()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/chat',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function chat($manuscript_no=NULL,$authid=NULL)
	{
		$reviewer_id=$this->session->userdata('book_reviewer')->reviewer_id;
		$auth_name=$this->Mdb->getData('reg_book_author',array('book_author_req_id'=>$authid));
		//print_r($auth_name); exit;
		$chk=$this->Mdb->getData('book_assign_reviewer',array('reviewer_id'=>$reviewer_id,'manuscript_no'=>$manuscript_no));
		if(empty($chk)){
			echo "Noooo";
			//redirect to another pages with massage
		}
		$send['data']=$chk;
		$send['messages']=$this->Mdb->getDataAsc('book_manuscript_comments',array('reviewer_id'=>$reviewer_id,'book_author_req_id'=>$authid,'manuscript_no'=>$manuscript_no),'created_at');
		$send['names']=array('authorname'=>$auth_name[0]->your_fname,'reviwername'=>$this->session->userdata('book_reviewer')->reviewer_name);
		if($this->input->post()){
			$var=$this->input->post();
			$var['files']="";	
				if (!file_exists('uploads/book_manuscript/'.$manuscript_no.'/chat_file/')) {
			    mkdir('uploads/book_manuscript/'.$manuscript_no.'/chat_file/', 0777, true);
				}

				if (!empty($_FILES['file']['size']))
				{
					$config = array();
				    $config['upload_path'] = './uploads/book_manuscript/'.$manuscript_no.'/chat_file/';
				    $config['allowed_types'] = '*';
				    $config['max_size'] = '10000';
				    //$config['file_name'] = $manuscript_no;
				    $this->load->library('upload', $config, 'fileupload'); // Create custom object for cover upload
				    $this->fileupload->initialize($config);
				    $upload_pdf = $this->fileupload->do_upload('file');
				    $var['files']=$this->fileupload->data()['file_name'];
				}	


			$data=array('comment_hash_id'=>md5(uniqid(rand(), true)),
                    			'book_author_req_id'=>$authid,
                    			'manuscript_no'=>$manuscript_no,
                    			'reviewer_id'=>$reviewer_id,
                    			'ethics_member_id'=>1,
                    			'referee_id'=>1,
                    			'comment_description'=>trim($var['message']),
                    			'sender'=>'Reviewer',
                    			'files'=>$var['files'],
                    			'comments_status'=>1);

			$this->Mdb->insert('book_manuscript_comments',$data);
			redirect(current_url());
		}
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/chat',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function ethical_statement()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/ethical_statement',$send);
		$this->load->view('book_reviewer/footer');
	}
	
	public function guidelines()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/guidelines',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function terms_of_services()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/terms_of_services',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function service_policy()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/service_policy',$send);
		$this->load->view('book_reviewer/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('book_reviewer');
		redirect('login/book_reviewer','refresh');
	}

	public function review_paper($id=NULL)
	{
		if(!($id)){redirect('book_reviewer');}
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
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/review_comment',$send);
		$this->load->view('book_reviewer/footer');
		
	}

	public function view_my_reviewed_paper($id=NULL)
	{
		$send['details']=$this->Mdb->getReviewerPaperDetail($id);
		$this->load->view('book_reviewer/header');
		$this->load->view('book_reviewer/view_my_reviewed_paper',$send);
		$this->load->view('book_reviewer/footer');
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
