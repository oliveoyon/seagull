<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function add_events()
	{
        $send['error']='';
		if($this->input->post()){
            $nextid=$this->Mdb->nextAutoId('events');
        	$this->load->library('form_validation');
            $this->form_validation->set_rules('event_title', 'event Title', 'trim|required|is_unique[events.event_title]');
        	$this->form_validation->set_rules('event_short_description', 'Events Short Description', 'trim|required');
            $this->form_validation->set_rules('event_description', 'event Description', 'trim|required');
        	if($this->form_validation->run()){
        		
        		$config['upload_path']          = './uploads/events/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name'] = time();
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('event_image'))
                {
                    $err=$this->upload->display_errors();
                    $send['error']= "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a><strong> $err </strong></div>";
                }
                else
                {
                    $var=$this->input->post();
                    $d1=date('Y-m-d', strtotime($var['start_date1']));
                    $d3=date('H:i:s', strtotime($var['start_date2']));
                    $d2=$d1.' '.$d3;
                    

                    $m1=date('Y-m-d', strtotime($var['end_date1']));
                    $m3=date('H:i:s', strtotime($var['end_date2']));
                    $m2=$m1.' '.$m3;

                    $data=array('event_hash_id'=>md5(uniqid(rand(), true)),
                                'event_title'=>$this->input->post('event_title'),
                    			'event_title_slug'=>url_title($this->input->post('event_title'), 'dash', TRUE),
                    			'event_location'=>$this->input->post('event_location'),
                                'event_short_description'=>$this->input->post('event_description'),
                                'event_description'=>$this->input->post('event_description'),
                    			'event_cat_id'=>1,
                                'event_start'=>$d2,
                                'event_end'=>$m2,
                    			'event_image'=>$this->upload->data()['file_name'],
                    			'event_create_by'=>1,
                    			'event_status'=>$this->input->post('event_status'));
        			$this->Mdb->insert('events',$data);
        			$this->session->set_flashdata('addeventmsg', 'event Posted Successfully');
        			redirect(current_url());
                }
        		
        	}
        }
		$this->load->view('manager/common/header');
		$this->load->view('manager/event/add_events',$send);
		$this->load->view('manager/common/footer');
	}

    public function view_events()
    {
        $send['events']=$this->Mdb->getData('events');
        $this->load->view('manager/common/header');
        $this->load->view('manager/event/view_events',$send);
        $this->load->view('manager/common/footer');
    }

    public function edit_events($id=NULL)
    {
        $send['error']='';
        $getdetail=$this->Mdb->getDataRow('events',array('event_hash_id'=>$id));
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('event_title', 'event Title', 'trim|required');
            $this->form_validation->set_rules('event_short_description', 'Short Description', 'trim|required');
            $this->form_validation->set_rules('event_description', 'event Description', 'trim|required');
            if($this->form_validation->run()){
                $var=$this->input->post();
                $d1=date('Y-m-d', strtotime($var['start_date1']));
                $d3=date('H:i:s', strtotime($var['start_date2']));
                $d2=$d1.' '.$d3;
                

                $m1=date('Y-m-d', strtotime($var['end_date1']));
                $m3=date('H:i:s', strtotime($var['end_date2']));
                $m2=$m1.' '.$m3;
                $data=array(
                                'event_title'=>$this->input->post('event_title'),
                                'event_title_slug'=>url_title($this->input->post('event_title'), 'dash', TRUE),
                                'event_location'=>$this->input->post('event_location'),
                                'event_short_description'=>$this->input->post('event_description'),
                                'event_description'=>$this->input->post('event_description'),
                                'event_start'=>$d2,
                                'event_end'=>$m2,
                                'event_cat_id'=>1,
                                'event_create_by'=>1,
                                'event_status'=>$this->input->post('event_status'));

                if(($_FILES['event_image']['name'])){

                    $config['upload_path']          = './uploads/events/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;
                    $config['overwrite']            = TRUE;
                    $config['file_name'] = $getdetail->event_image;
                    $this->load->library('upload', $config);
                        
                        if ( ! $this->upload->do_upload('event_image'))
                        {
                            $err=$this->upload->display_errors();
                            $this->session->set_flashdata('addeventmsgs', $err);
                            redirect(current_url());
                        }
                }

                    $this->Mdb->update('events',$data,array('event_hash_id'=>$id));
                    $this->session->set_flashdata('addeventmsg', 'Event Posted Successfully');
                    redirect(current_url());
               
            }
        }
        $send['details']=$this->Mdb->getDataRow('events',array('event_hash_id'=>$id));
        $this->load->view('manager/common/header');
        $this->load->view('manager/event/edit_events',$send);
        $this->load->view('manager/common/footer');
    }

    public function delete_events($id=NULL)
    {
        $fn=$this->Mdb->getDataRow('events',array('event_hash_id'=>$id));
         
        if(file_exists('uploads/events/'.$fn->event_image)){unlink('uploads/'.$fn->event_image);}
        $this->Mdb->delete('events',array('event_hash_id'=>$id));
        $this->session->set_flashdata('delevent', 'Event Deleted Successfully');
        redirect('events/view_events');
    }

     public function delete_eventss()
        {
            $id = $this->input->post("id");
            $this->Mdb->delete('events',array('event_id'=>$id));
            redirect('events/view_events');
        }



	

	

	
}
