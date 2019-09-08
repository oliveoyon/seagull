<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Src extends CI_Controller {

	public function src_member_registration()
	{
        //$this->load->library('email');
        $this->load->library('bcrypt');
        if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('src_fname', 'First Name', 'trim|required');
        	$this->form_validation->set_rules('src_lname', 'Last Name', 'trim|required');
        	$this->form_validation->set_rules('src_email', 'Email', 'trim|required|valid_email|is_unique[src_register.src_email]');
        	$this->form_validation->set_rules('src_password', 'Password', 'required|min_length[5]|callback_is_password_strong');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[src_password]');        	
        	
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['src_hash_id'] = md5(uniqid(rand(), true));
        		unset($var['cpassword']);
        		$var['src_password']=$this->bcrypt->hash_password($var['src_password']);
        		$this->Mdb->insert('src_register',$var);
        		$this->session->set_flashdata('msg', 'Application sent successfully!');
        		
        		$name=$var['src_title'].' '.$var['src_lname'];
        		$link=$var['src_hash_id'];
        		
                
                $htmlContent = "<div style='max-width: 500px;max-height: 500px;border:5px solid yellowgreen; position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto; padding:10px;'>";
                $htmlContent .= "<h2 style='text-align:center';><span style='padding:10px;background-color:indigo;color:white'>SRC</span></h2>";
                $htmlContent .= "<h3 style='text-align:center';>Welcome to Seagull Research Community</h3>";
                $htmlContent .= "<p style='font-size:20px;color:gray'>Hello $name,</p>";
                $htmlContent .= "<p style='font-size:18px;color:gray'>You have successfully placed a request to join Seagull Research Community as an author.</p>";
                $htmlContent .= "<p style='font-size:18px;color:gray'>To proceed to further option and complete your profile please verify your account clicking the button bellow.</p>";
                $htmlContent .= "<p style='text-align:center'><a href='arif.com/".$link."' style='background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;'>Verify Account</a></p>";
                $htmlContent .= "<p style='font-size:20px;color:gray';font-weight:bold;>Thank You<br>SRC Admin</p>";
                $htmlContent .= "</div>";
                    
                //$config['mailtype'] = 'html';
                //$this->email->initialize($config);
                //$this->email->to($var['src_email']);
                //$this->email->from('arif@seagullpublications.com','Arif');
                //$this->email->subject('New Registration Successfull');
                //$this->email->message($htmlContent);
                //$this->email->send();
                
            $config['protocol'] = '';
            $config['smtp_host'] = '';
            $config['smtp_port'] = '';
            $config['smtp_user'] = 'arif@seagullpublications.com';
            $config['smtp_pass'] = 'SeaBird@123';
            $config['newline']  = "\r\n";
            $config['crlf'] = "\r\n";
            $config['mailtype'] = "html";
            $this->load->library('email');
            $this->email->initialize($config);
       
            $this->email->set_newline("\r\n");
            
            $this->email->from('arif@seagullpublications.com','Author Seagull'); // change it to yours
            $this->email->to($var['src_email']);// change it to yours
            $this->email->subject('Activation Account! IJTEM');
            $this->email->message($htmlContent);
            if($this->email->send()){}else{show_error($this->email->print_debugger());}


        		redirect(current_url());
        	}
        }
        $send['countries']=$this->Mdb->getData('apps_countries');
        $send['title']='SRC Member Registration';
        $this->load->view('web/common/header',$send);
		$this->load->view('web/src/src_member_registration');
		$this->load->view('web/common/footer'); 
	}

	public function is_password_strong($password)
	{
	   if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password)) {
	     return TRUE;
	   }
	   $this->form_validation->set_message('is_password_strong', 'The {field} field should be Complex');
	   return FALSE;
	}

	

	
}
