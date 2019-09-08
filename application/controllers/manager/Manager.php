<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function dashboard()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/add_class');
		$this->load->view('manager/common/footer'); 
	}

	public function view_user_complaints()
	{
		$send['complaints']=$this->Mdb->getDataDesc('user_complaints',array(),'complaint_id');
		$this->load->view('manager/common/header');
		$this->load->view('manager/user_complaints/view_user_complaints',$send);
		$this->load->view('manager/common/footer');
	}

	public function getComplaints($id){
		$data=$this->Mdb->getData('user_complaints',array('complaint_hash_id'=>$id));
		echo "<div class=\"modal-header\">\n";
		echo "      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>\n";
		echo "      <h4 class=\"modal-title\">User Complaints From ".$id."</h4>\n";
		echo "    </div>\n";
		echo "    <div class=\"modal-body\">\n";
		echo "      <table class=\"table\">\n";
		echo "          <thead>\n";
		echo "          </thead>\n";
		echo "          <tbody>\n";
		echo "              <tr>\n";
		echo "                  <td>Name</td>\n";
		echo "                  <td>".$data[0]->complainant_fname.' '.$data[0]->complainant_lname."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>University</td>\n";
		echo "                  <td>".$data[0]->complainant_org."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>Country</td>\n";
		echo "                  <td>".$data[0]->complainant_country."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>Reff. No.</td>\n";
		echo "                  <td>".$data[0]->complainant_reff."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>Particular</td>\n";
		echo "                  <td>4</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>Email</td>\n";
		echo "                  <td>".$data[0]->complainant_particular."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>Area Code</td>\n";
		echo "                  <td>".$data[0]->complainant_areacode."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>District</td>\n";
		echo "                  <td>".$data[0]->complainant_district."</td>\n";
		echo "              </tr>\n";
		echo "              <tr>\n";
		echo "                  <td>Description</td>\n";
		echo "                  <td>".$data[0]->complainant_description."</td>\n";
		echo "              </tr>\n";

		echo "          </tbody>\n";
		echo "      </table>\n";
		echo "    </div>";
	}

	public function edit_complaints($id)
	{
		$data=$this->Mdb->getDataRow('user_complaints',array('complaint_hash_id'=>$id));
		echo $data->complaint_id;
	}

	public function delete_complaints($id)
	{
		$this->Mdb->delete('user_complaints',array('complaint_hash_id'=>$id));
		$this->session->set_flashdata('msg', 'Complaint successfully deleted!');
		redirect('manager/view_user_complaints');
	}

	public function view_user_message()
	{
		$send['contacts']=$this->Mdb->getDataDesc('contact_us',array('status'=>1),'contact_id');
		$this->load->view('manager/common/header');
		$this->load->view('manager/contact_us/view_user_message',$send);
		$this->load->view('manager/common/footer');
	}

	
	public function delete_user_message($id)
	{
		$this->Mdb->delete('contact_us',array('contact_id'=>$id));
		$this->session->set_flashdata('msg', 'Message successfully deleted!');
		redirect('manager/view_user_message');
	}

	public function view_editor_request()
	{
		$send['requests']=$this->Mdb->getData('editor_req_register');
		$this->load->view('manager/common/header');
		$this->load->view('manager/editor_request/view_editor_request',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_editor_request($id=NULL)
    {
        $fn=$this->Mdb->getDataRow('editor_req_register',array('editor_req_hash_id'=>$id));
        if(file_exists('uploads/editor_cv/'.$fn->editor_req_cv)){unlink('uploads/editor_cv/'.$fn->editor_req_cv);}
        $this->Mdb->delete('editor_req_register',array('editor_req_hash_id'=>$id));
        $this->session->set_flashdata('deleditor', 'Editor Request Deleted Successfully');
        redirect('manager/view_editor_request');
    }

    public function view_propose_journal()
	{
		$send['requests']=$this->Mdb->getData('propose_journal');
		$this->load->view('manager/common/header');
		$this->load->view('manager/propose_journal/view_propose_journal',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_propose_journal($id=NULL)
    {
        $fn=$this->Mdb->getDataRow('propose_journal',array('propose_journal_hash_id'=>$id));
        if(file_exists('uploads/propose_journal/'.$fn->cv)){unlink('uploads/propose_journal/'.$fn->cv);}
        $this->Mdb->delete('propose_journal',array('propose_journal_hash_id'=>$id));
        $this->session->set_flashdata('deleditor', 'Proposal for Journal Deleted Successfully');
        redirect('manager/view_propose_journal');
    }

    public function view_publisher()
	{
		$send['requests']=$this->Mdb->getData('publisher_request');
		$this->load->view('manager/common/header');
		$this->load->view('manager/publisher/view_publisher',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_publisher($id=NULL)
    {
        $this->Mdb->delete('publisher_request',array('publisher_req_hash_id'=>$id));
        $this->session->set_flashdata('delpublisher', 'Publisher Deleted Successfully');
        redirect('manager/view_publisher');
    }

	public function add_book_editor()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_editor/add_book_editor');
		$this->load->view('manager/common/footer'); 
	}

	public function view_book_editor()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_editor/view_book_editor');
		$this->load->view('manager/common/footer'); 
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
        		$authorid=0;
        		$var = $this->input->post();
	    		$var['reviewer_hash_id'] = md5(uniqid(rand(), true));
	    		$var['book_author_req_id']=$authorid;
	    		$var['reviewer_password']=$this->bcrypt->hash_password($var['reviewer_password']);
	    		$var['reviewer_type']="Internal";
	    		$this->Mdb->insert('book_reviewer',$var);
	    		$this->session->set_flashdata('revadd', 'Reviewer Added Successfully!');
	    		redirect(current_url());
        	}
        }
        $send['countries']=$this->Mdb->getData('apps_countries');

		$this->load->view('manager/common/header');
		$this->load->view('manager/book_reviewer/add_reviewer',$send);
		$this->load->view('manager/common/footer');
	}

	public function add_member()
	{
		if($this->input->post()){
		$this->load->library('bcrypt');
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('member_name', 'Reviewer Name', 'trim|required');
        	$this->form_validation->set_rules('member_department', 'Reviewer Department', 'trim|required');
        	$this->form_validation->set_rules('member_institution', 'Reviewer Institution', 'required');
        	
        	$this->form_validation->set_rules('member_phone', 'Reviewer PHone', 'trim|required');
        	$this->form_validation->set_rules('member_password', 'Reviewer Password', 'trim|required');
        	$this->form_validation->set_rules('member_country', 'Reviewer Country', 'trim|required');
        	
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$member_hash_id = md5(uniqid(rand(), true));
        		$pass=$this->bcrypt->hash_password($var['member_password']);
        			
        			$dbdata=array('member_hash_id'=>$member_hash_id,'member_name'=>$var['member_name'],'member_department'=>$var['member_department'],'member_institution'=>$var['member_institution'],'member_email'=>$var['member_email'],'member_phone'=>$var['member_phone'],'member_password'=>$pass,'member_country'=>$var['member_country'],'member_type'=>$var['table'],'member_status'=>$var['member_status']);
        			$this->Mdb->insert('book_member',$dbdata);

        		

	    		$this->session->set_flashdata('revadd', 'Member Added Successfully!');
	    		redirect(current_url());
        	}
        }
        $send['countries']=$this->Mdb->getData('apps_countries');

		$this->load->view('manager/common/header');
		$this->load->view('manager/member/add_member',$send);
		$this->load->view('manager/common/footer');
	}

	

	public function view_reviewer()
	{
		$send['revs']=$this->Mdb->getJoin('book_reviewer','apps_countries','book_reviewer.reviewer_country=apps_countries.country_id',array());
		$this->load->view('manager/common/header');
		$this->load->view('manager/book_reviewer/view_reviewer',$send);
		$this->load->view('manager/common/footer');
	}

	public function revtoggle($hash,$stat)
	{
		

		if($stat==1){
			$this->Mdb->update('book_reviewer',array('reviewer_status'=>0),array('reviewer_hash_id'=>$hash));
			$this->session->set_flashdata('delrev', 'Reviewer Deactivate!');
			redirect('manager/view_reviewer','refresh');
		}
		if($stat==0){
			$this->Mdb->update('book_reviewer',array('reviewer_status'=>1),array('reviewer_hash_id'=>$hash));
			$this->session->set_flashdata('delrev', 'Reviewer Activated!');
			redirect('manager/view_reviewer','refresh');
		}
	}

	public function add_ethics_member()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/ethics_board/add_ethics_member');
		$this->load->view('manager/common/footer'); 
	}

	public function view_ethics_member()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/ethics_board/view_ethics_member');
		$this->load->view('manager/common/footer'); 
	}



	public function add_referee()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/referee/add_referee');
		$this->load->view('manager/common/footer'); 
	}

	public function view_referee()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/referee/view_referee');
		$this->load->view('manager/common/footer'); 
	}

	public function accepted_papers()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_manuscript/accepted_papers');
		$this->load->view('manager/common/footer'); 
	}

	public function all_comments()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_manuscript/all_comments');
		$this->load->view('manager/common/footer'); 
	}

	public function content_edit_suggestion()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_manuscript/content_edit_suggestion');
		$this->load->view('manager/common/footer'); 
	}

	public function in_progress()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_manuscript/in_progress');
		$this->load->view('manager/common/footer'); 
	}

	public function published_books()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_manuscript/published_books');
		$this->load->view('manager/common/footer'); 
	}

	public function submitted_books()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/book_manuscript/submitted_books');
		$this->load->view('manager/common/footer'); 
	}


	public function book_reviewer_comments()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/comments/book_reviewer_comments');
		$this->load->view('manager/common/footer'); 
	}

	public function editors_comments()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/comments/editors_comments');
		$this->load->view('manager/common/footer'); 
	}

	public function ethics_board_comments()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/comments/ethics_board_comments');
		$this->load->view('manager/common/footer'); 
	}

	public function referee_comments()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/comments/referee_comments');
		$this->load->view('manager/common/footer'); 
	}

	public function all_documents()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/files/all_documents');
		$this->load->view('manager/common/footer'); 
	}

	public function all_figures()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/files/all_figures');
		$this->load->view('manager/common/footer'); 
	}

	public function all_files()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/files/all_files');
		$this->load->view('manager/common/footer'); 
	}

	public function uploaded_files()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/files/uploaded_files');
		$this->load->view('manager/common/footer'); 
	}



	
}
