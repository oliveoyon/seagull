 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');   
    }
        
	

    public function book_author()
    {
        $send['msg']="Sign in to start your session";
        if($this->input->post()){
            $this->load->library('bcrypt');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('your_email', 'Email', 'trim|required');
            $this->form_validation->set_rules('your_password', 'Password', 'trim|required');
            if($this->form_validation->run()){

                $chk=$this->Mdb->getDataRow('reg_book_author',array('your_email'=>$this->input->post('your_email')));
                //$chk=$this->Mdb->getDataRow('user',array('court_id'=>1,'user_name'=>'Arifur'));
                if(empty($chk)){
                    $this->session->set_flashdata('loginerror', 'User not found');
                    redirect('login/book_author');
                }else{
                    if ($this->bcrypt->check_password($this->input->post('your_password'), $chk->your_password))
                    {
                        $this->session->set_userdata('book_author',$chk);
                        redirect('book_author/dashboard');
                    }
                        
                    else{
                            // Password does not match stored password.
                        $this->session->set_flashdata('loginerror', 'Password does not match');
                       redirect('login/book_author');
                    }
                }
            }

            
        }
        $this->load->view('login/book_author_login',$send);
        
    }

    public function book_reviewer()
    {
        $send['msg']="Sign in to start your session";
        if($this->input->post()){
            $this->load->library('bcrypt');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('reviewer_email', 'Email', 'trim|required');
            $this->form_validation->set_rules('reviewer_password', 'Password', 'trim|required');
            if($this->form_validation->run()){

                $chk=$this->Mdb->getDataRow('book_reviewer',array('reviewer_email'=>$this->input->post('reviewer_email')));
                //$chk=$this->Mdb->getDataRow('user',array('court_id'=>1,'user_name'=>'Arifur'));
                if(empty($chk)){
                    $this->session->set_flashdata('loginerror', 'User not found');
                    redirect('login/book_reviewer');
                }else{
                    if ($this->bcrypt->check_password($this->input->post('reviewer_password'), $chk->reviewer_password))
                    {
                        $this->session->set_userdata('book_reviewer',$chk);
                        redirect('book_reviewer/dashboard');
                    }
                        
                    else{
                            // Password does not match stored password.
                        $this->session->set_flashdata('loginerror', 'Password does not match');
                       redirect('login/book_reviewer');
                    }
                }
            }

            
        }
        $this->load->view('login/book_reviewer_login',$send);
        
    }

    public function book_member()
    {
        $send['msg']="Sign in to start your session";
        if($this->input->post()){
            $this->load->library('bcrypt');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('member_email', 'Email', 'trim|required');
            $this->form_validation->set_rules('member_password', 'Password', 'trim|required');
            if($this->form_validation->run()){

                $chk=$this->Mdb->getDataRow('book_member',array('member_email'=>$this->input->post('member_email')));

                //$chk=$this->Mdb->getDataRow('user',array('court_id'=>1,'user_name'=>'Arifur'));
                if(empty($chk)){
                    $this->session->set_flashdata('loginerror', 'User not found');
                    redirect('login/book_member');
                }else{
                    if ($this->bcrypt->check_password($this->input->post('member_password'), $chk->member_password))
                    {
                        $this->session->set_userdata('book_member',$chk);
                        redirect('book_member/dashboard');
                    }
                        
                    else{
                            // Password does not match stored password.
                        $this->session->set_flashdata('loginerror', 'Password does not match');
                       redirect('login/book_member');
                    }
                }
            }

            
        }
        $this->load->view('login/book_member_login',$send);
        
    }

}

