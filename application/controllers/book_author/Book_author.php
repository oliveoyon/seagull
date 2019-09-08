<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_author extends CI_Controller {

	public function __construct() 
        {
            parent::__construct();
            if(($this->session->userdata('book_author')!=NULL) AND ($this->session->userdata('book_author')->book_author_status == 1)) { }
            
            elseif(($this->session->userdata('book_author')!=NULL) AND ($this->session->userdata('book_author')->book_author_status == 0)){
            	$this->session->set_flashdata('loginerror', 'Author is deactivated');
            	redirect('login/book_author');
            }else{
            	$this->session->set_flashdata('loginerror', 'Login First');
            	redirect('login/book_author');
            } 
            date_default_timezone_set('Asia/Dhaka'); 
          	
        }

	public function dashboard()
	{
        $this->load->view('book_author/header');
		$this->load->view('book_author/dashboard');
		$this->load->view('book_author/footer'); 
	}

	public function add_reviewer()
	{
		if($this->input->post()){
			$this->load->library('bcrypt');
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('reviewer_name', 'Reviewer Name', 'trim|required');
        	$this->form_validation->set_rules('reviewer_department', 'Reviewer Department', 'trim|required');
        	$this->form_validation->set_rules('reviewer_institution', 'Reviewer Institution', 'required');
        	$this->form_validation->set_rules('reviewer_email', 'Reviewer Email', 'trim|required|valid_email|is_unique[book_reviewer.reviewer_email]');
        	$this->form_validation->set_rules('reviewer_phone', 'Reviewer PHone', 'trim|required');
        	$this->form_validation->set_rules('reviewer_password', 'Reviewer Password', 'trim|required');
        	$this->form_validation->set_rules('reviewer_country', 'Reviewer Country', 'trim|required');
        	
        	if($this->form_validation->run()){
        		$authorid=$this->session->userdata('book_author')->book_author_req_id;
        		$var = $this->input->post();
	    		$var['reviewer_hash_id'] = md5(uniqid(rand(), true));
	    		$var['book_author_req_id']=$authorid;
	    		$var['reviewer_password']=$this->bcrypt->hash_password($var['reviewer_password']);
	    		$var['reviewer_type']="External";
	    		$this->Mdb->insert('book_reviewer',$var);
	    		$this->session->set_flashdata('revadd', 'Reviewer Added Successfully!');
	    		redirect(current_url());
        	}
        }
        $send['countries']=$this->Mdb->getData('apps_countries');

		$this->load->view('book_author/header');
		$this->load->view('book_author/add_reviewer',$send);
		$this->load->view('book_author/footer');
	}

	public function view_reviewer()
	{
		$send['revs']=$this->Mdb->getJoin('book_reviewer','apps_countries','book_reviewer.reviewer_country=apps_countries.country_id',array('book_author_req_id'=>$this->session->userdata('book_author')->book_author_req_id));
		$this->load->view('book_author/header');
		$this->load->view('book_author/view_reviewer',$send);
		$this->load->view('book_author/footer');
	}

	public function revtoggle($hash,$stat)
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
        $total=$this->Mdb->row_count('book_reviewer',array('book_author_req_id'=>$authorid,'reviewer_status'=>1));

		if($stat==1){
			$this->Mdb->update('book_reviewer',array('reviewer_status'=>0),array('reviewer_hash_id'=>$hash));
			$this->session->set_flashdata('delrev', 'Reviewer Deactivate!');
			redirect('book_author/view_reviewer','refresh');
		}
		if(($stat==0) AND ($total<3)){
			$this->Mdb->update('book_reviewer',array('reviewer_status'=>1),array('reviewer_hash_id'=>$hash));
			$this->session->set_flashdata('delrev', 'Reviewer Activated!');
			redirect('book_author/view_reviewer','refresh');
		}else{
			$this->session->set_flashdata('delrev', 'Limit Acceed to Activate!');
			redirect('book_author/view_reviewer','refresh');
		}
	}
    
    public function submit_new()
	{
		$send['error']='';
		$send['error1']='';
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		if($this->input->post()){
			$nextid=$this->Mdb->nextAutoId('book_manuscript');
			$manuscript_id = 'SB'.date('m').$nextid.date('d');
			if (!file_exists('uploads/book_manuscript/'.$manuscript_id)) {
			    mkdir('uploads/book_manuscript/'.$manuscript_id, 0777, true);
			}
        	$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Manuscript Title', 'trim|required|is_unique[book_manuscript.title]');
        	$this->form_validation->set_rules('subtitle', 'Manuscript Subtitle', 'trim|required');
        	if($this->form_validation->run()){
        		
        		$config = array();
			    $config['upload_path'] = './uploads/book_manuscript/'.$manuscript_id.'/';
			    $config['allowed_types'] = 'pdf';
			    $config['max_size'] = '10000';
			    $config['file_name'] = $manuscript_id;
			    $this->load->library('upload', $config, 'pdfupload'); // Create custom object for cover upload
			    $this->pdfupload->initialize($config);
			    $upload_pdf = $this->pdfupload->do_upload('manuscript_pdf');

			    // Catalog upload
			    $config = array();
			    $config['upload_path'] = './uploads/book_manuscript/'.$manuscript_id.'/';
			    $config['allowed_types'] = 'doc|docx';
			    $config['max_size'] = '100000';
			    $config['file_name'] = $manuscript_id;
			    $this->load->library('upload', $config, 'docupload'); // Create custom object for cover upload
			    $this->docupload->initialize($config);
			    $upload_doc = $this->docupload->do_upload('manuscript_doc');

        		//if ($upload_cover && $upload_catalog)
        		// echo "<pre>";
        		// print_r($upload_pdf);
        		// print_r($upload_doc);
			    // if ($upload_pdf && $upload_doc) {

			      
			    //   $pdf = $this->pdfupload->data();
			    //   print_r($pdf);

			    //   // Data of your catalog file
			    //   $doc = $this->docupload->data();          
			    //   print_r($doc);
			    // } else {

			    //   // Error Occured in one of the uploads

			    //   echo 'Cover upload Error : ' . $this->pdfupload->display_errors() . '<br/>';
			    //   echo 'Catlog upload Error : ' . $this->docupload->display_errors() . '<br/>';
			    // }




                if ( ! $upload_pdf)
                {
                    $err=$this->pdfupload->display_errors();
                    $send['error']= $this->pdfupload->display_errors();
                }

                elseif ( ! $upload_doc)
                {
                    $err1=$this->docupload->display_errors();
                    $send['error1']= $this->docupload->display_errors();
                }
                else
                {
                    $data=array('book_manuscript_hash_id'=>md5(uniqid(rand(), true)),
                    			'book_author_req_id'=>$authorid,
                    			'manuscript_no'=>$manuscript_id,
                                'title'=>$this->input->post('title'),
                    			'subtitle'=>$this->input->post('subtitle'),
                                'keyword'=>$this->input->post('keyword'),
                                'area_of_work'=>$this->input->post('area_of_work'),
                                'language'=>$this->input->post('language'),
                                'no_of_figure'=>$this->input->post('no_of_figure'),
                                'reviewer_deadline'=>$this->input->post('reviewer_deadline'),
                                'reviewer_id'=>implode(" ",$this->input->post('reviewer_id')),
                    			'manuscript_pdf'=>$this->pdfupload->data()['file_name'],
                    			'manuscript_doc'=>$this->docupload->data()['file_name'],
                    			'book_manuscript_status'=>1);
        			$this->Mdb->insert('book_manuscript',$data);
        			foreach ($this->input->post('reviewer_id') as $k) {
        				$data1=array('assign_hash_id'=>md5(uniqid(rand(), true)),
                    			'book_author_req_id'=>$authorid,
                    			'manuscript_id'=>$nextid,
                    			'manuscript_no'=>$manuscript_id,
                    			'reviewer_id'=>$k,
                    			'assign_status'=>1);
        				$this->Mdb->insert('book_assign_reviewer',$data1);
        			}
        			$this->session->set_flashdata('addmanuscript', 'Manuscript Posted Successfully');
        			redirect(current_url());
                }
        		
        	}
		}
		$send['revs']=$this->Mdb->getData('book_reviewer',array('book_author_req_id'=>$authorid,'reviewer_status'=>1));
		$this->load->view('book_author/header',$send);
		$this->load->view('book_author/submit_new');
		$this->load->view('book_author/footer');
	}

	public function submitted_books()
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		$send['books']=$this->Mdb->getData('book_manuscript',array('book_author_req_id'=>$authorid));
		$this->load->view('book_author/header');
		$this->load->view('book_author/submitted_books',$send);
		$this->load->view('book_author/footer');
	}

	public function chat($manuscript_no=NULL,$revid=NULL)
	{
		$reviewer_id=$this->Mdb->getDataRow('book_reviewer',array('reviewer_hash_id'=>$revid));
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		$chk=$this->Mdb->getData('book_manuscript',array('book_author_req_id'=>$authorid,'manuscript_no'=>$manuscript_no));
		if(empty($chk)){
			echo "Noooo";
			//redirect to another pages with massage
		}
		$send['data']=$chk;
		$send['messages']=$this->Mdb->getDataAsc('book_manuscript_comments',array('reviewer_id'=>$reviewer_id->reviewer_id,'book_author_req_id'=>$authorid,'manuscript_no'=>$manuscript_no),'created_at');
		$send['names']=array('authorname'=>$this->session->userdata('book_author')->your_fname,'reviwername'=>$reviewer_id->reviewer_name);
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
                    			'book_author_req_id'=>$authorid,
                    			'manuscript_no'=>$manuscript_no,
                    			'reviewer_id'=>$reviewer_id->reviewer_id,
                    			'ethics_member_id'=>1,
                    			'referee_id'=>1,
                    			'comment_description'=>trim($var['message']),
                    			'sender'=>'Author',
                    			'files'=>$var['files'],
                    			'comments_status'=>1);

			$this->Mdb->insert('book_manuscript_comments',$data);
			redirect(current_url());
		}
		$this->load->view('book_author/header');
		$this->load->view('book_author/chat',$send);
		$this->load->view('book_author/footer');
	}

	public function published_books()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/published_books',$send);
		$this->load->view('book_author/footer');
	}

	public function upload_new_file()
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		if($this->input->post()){
			$var=$this->input->post();
			$this->load->library('form_validation');
        	$this->form_validation->set_rules('file_type', 'File Type', 'trim|required');
        	$this->form_validation->set_rules('manuscript_no', 'Manuscript Number', 'trim|required');
        	$this->form_validation->set_rules('file_name', 'File Name', 'trim|required');
        	$this->form_validation->set_rules('file_no', 'File Number', 'required');
        	$this->form_validation->set_rules('file_privacy', 'File Privacy', 'trim|required');
        	$this->form_validation->set_rules('file_description', 'File Descricption', 'trim|required');
        	if (empty($_FILES['file_format']['name']))
				{
				    $this->form_validation->set_rules('userfile', 'File Upload', 'required');
				}
        	
        	if($this->form_validation->run()){

				$name=url_title($var['file_name']);

                    $config['upload_path'] = './uploads/files/author_file/' ;
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf';
                    $config['max_size']             = 1000;
                    $config['overwrite']            = TRUE;
                    $config['file_name'] = $name;
                    $this->load->library('upload', $config);
                        if ( ! $this->upload->do_upload('file_format'))
                        {
                            $err=$this->upload->display_errors();
                            $this->session->set_flashdata('uploaderror', $err);
                            redirect(current_url());
                        }
                	$data=array('file_hash_id'=>md5(uniqid(rand(), true)),
            			'file_owner_id'=>'author-'.$authorid,
            			'manuscript_no'=>$var['manuscript_no'],
            			'file_type'=>$var['file_type'],
            			'file_name'=>$this->upload->data()['file_name'],
            			'file_no'=>$var['file_no'],
            			'file_privacy'=>$var['file_privacy'],
            			'file_description'=>$var['file_description'],
            			'file_status'=>1);

						$this->Mdb->insert('files',$data);
						$this->session->set_flashdata('fileadd', 'Upload Successfully');
						redirect(current_url());

		}
		}
		$send['papers']=$this->db->query("select manuscript_no from book_manuscript where book_manuscript_status <>10 AND book_manuscript_status <>11 AND book_author_req_id = '".$authorid."'")->result();
		$this->load->view('book_author/header');
		$this->load->view('book_author/upload_new_file',$send);
		$this->load->view('book_author/footer');
	}

	public function edit_file($id)
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		if($this->input->post()){
			$var=$this->input->post();
			$this->load->library('form_validation');
        	$this->form_validation->set_rules('file_type', 'File Type', 'trim|required');
        	$this->form_validation->set_rules('manuscript_no', 'Manuscript Number', 'trim|required');
        	$this->form_validation->set_rules('file_no', 'File Number', 'required');
        	$this->form_validation->set_rules('file_privacy', 'File Privacy', 'trim|required');
        	$this->form_validation->set_rules('file_description', 'File Descricption', 'trim|required');
        	$this->Mdb->update('files',$var,array('file_hash_id'=>$id));
        	$this->session->set_flashdata('fileadd', 'File Updated Successfully');
						redirect(current_url());
        }
		$send['papers']=$this->db->query("select manuscript_no from book_manuscript where book_manuscript_status <>10 AND book_manuscript_status <>11 AND book_author_req_id = '".$authorid."'")->result();
		$send['data']=$this->Mdb->getDataRow('files',array('file_hash_id'=>$id));
		$this->load->view('book_author/header');
		$this->load->view('book_author/edit_file',$send);
		$this->load->view('book_author/footer');
	}
	public function delete_file($id)
	{
		$data = $this->Mdb->getDataRow('files',array('file_hash_id'=>$id));
		if(file_exists('uploads/files/author_file/'.$data->file_name)){
			unlink('uploads/files/author_file/'.$data->file_name);
		}
		$this->Mdb->delete('files',array('file_hash_id'=>$id));
		$this->session->set_flashdata('fileadd', 'File Deleted Successfully');
		redirect('book_author/uploaded_files');
	}

	public function uploaded_files()
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		$send['papers']=$this->Mdb->getData('files',array('file_owner_id'=>'author-'.$authorid));
		$this->load->view('book_author/header');
		$this->load->view('book_author/uploaded_files',$send);
		$this->load->view('book_author/footer');
	}

	public function update_profile()
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		//$send['error']='';
        //$getdetail=$this->Mdb->getDataRow('events',array('event_hash_id'=>$id));
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('your_department', 'Your Department', 'trim|required');
            $this->form_validation->set_rules('your_institution', 'Your Institute', 'trim|required');
            $this->form_validation->set_rules('your_email', 'Your Email', 'trim|required');
            $this->form_validation->set_rules('your_phone', 'Your Phone', 'trim|required');
            $this->form_validation->set_rules('your_expertise', 'Your Expertise', 'trim|required');
            $this->form_validation->set_rules('your_bio', 'Your Bio', 'trim|required');
            if($this->form_validation->run()){
                $var=$this->input->post();
                $data=array(
                                'your_department'=>$this->input->post('your_department'),
                                'your_institution'=>$this->input->post('your_institution'),
                                'your_email'=>$this->input->post('your_email'),
                                'your_phone'=>$this->input->post('your_phone'),
                                'your_expertise'=>$this->input->post('your_expertise'),
                                'your_bio'=>$this->input->post('your_bio'),
                                'your_orcid'=>$this->input->post('your_orcid'),
                                );

                if(($_FILES['your_image']['name'])){

                    $config['upload_path']          = './uploads/author_image/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;
                    $config['overwrite']            = TRUE;
                    $config['file_name'] = $authorid;
                    $this->load->library('upload', $config);
                        
                        if ( ! $this->upload->do_upload('your_image'))
                        {
                            $err=$this->upload->display_errors();
                            $this->session->set_flashdata('uploaderror', $err);
                            redirect(current_url());
                        }
                    $data['your_image']=$this->upload->data()['file_name'];
                }

                    $this->Mdb->update('reg_book_author',$data,array('book_author_req_id'=>$authorid));
                    $this->session->set_flashdata('updateprofile', 'Profile Updated Successfully');
                    redirect(current_url());
               
            }
        }
		$send['data']=$this->Mdb->getDataRow('reg_book_author',array('book_author_req_id'=>$authorid));
		$this->load->view('book_author/header');
		$this->load->view('book_author/update_profile',$send);
		$this->load->view('book_author/footer');
	}

	public function view_profile()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/view_profile',$send);
		$this->load->view('book_author/footer');
	}

	public function change_password()
	{
		$authorid=$this->session->userdata('book_author')->book_author_req_id;
		$this->load->library('bcrypt');
		if($this->input->post()){
			$var=$this->input->post();
			$this->load->library('form_validation');
        	$this->form_validation->set_rules('oldpass', 'Old Password', 'trim|required');
        	$this->form_validation->set_rules('newpass', 'New Password', 'trim|required');
			$this->form_validation->set_rules('confpass', 'Confirm Password', 'trim|required|matches[newpass]');
			$chk=$this->Mdb->getDataRow('reg_book_author',array('book_author_req_id'=>$authorid));
			if($this->form_validation->run()){
			if ($this->bcrypt->check_password($this->input->post('oldpass'), $chk->your_password))
                {
                    $this->Mdb->update('reg_book_author',array('your_password'=>$this->bcrypt->hash_password($var['newpass'])),array('book_author_req_id'=>$authorid));
                    $this->session->set_flashdata('passchng', 'Password Changed Successfully');
					redirect(current_url());
                }else{
                	$this->session->set_flashdata('err', 'Password is not matched');
					redirect(current_url());
                }
            }



        	
        }
		$this->load->view('book_author/header');
		$this->load->view('book_author/change_password');
		$this->load->view('book_author/footer');
	}

    

	public function ethical_statement()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/ethical_statement',$send);
		$this->load->view('book_author/footer');
	}
	
	public function guidelines()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/guidelines',$send);
		$this->load->view('book_author/footer');
	}

	public function terms_of_services()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/terms_of_services',$send);
		$this->load->view('book_author/footer');
	}

	public function service_policy()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/service_policy',$send);
		$this->load->view('book_author/footer');
	}

	public function in_progress()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/in_progress',$send);
		$this->load->view('book_author/footer');
	}

	public function accepted_papers()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/accepted_papers',$send);
		$this->load->view('book_author/footer');
	}

	public function ethics_board_comments()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/ethics_board_comments',$send);
		$this->load->view('book_author/footer');
	}

	public function reviewer_comments()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/reviewer_comments',$send);
		$this->load->view('book_author/footer');
	}

	public function content_edit_suggestion()
	{
		$send['countries']=$this->Mdb->getData('apps_countries');
		$this->load->view('book_author/header');
		$this->load->view('book_author/content_edit_suggestion',$send);
		$this->load->view('book_author/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('book_author');
		redirect('login/book_author','refresh');
	}

	

	
	
}
