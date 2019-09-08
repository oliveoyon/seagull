<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function view_news_category()
	{
		$send['categories']=$this->Mdb->getData('news_category');
		$this->load->view('manager/common/header');
		$this->load->view('manager/news/view_news_category',$send);
		$this->load->view('manager/common/footer');
	}

	public function add_news_category()
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('news_cat_name', 'Category Name', 'trim|required|is_unique[news_category.news_cat_name]');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['news_cat_hash_id'] = md5(uniqid(rand(), true));
        		$this->Mdb->insert('news_category',$var);
        		$this->session->set_flashdata('catmsg', 'News Category Added Successfully');
        		redirect(current_url());
        	}
        }
        $this->load->view('manager/common/header');
		$this->load->view('manager/news/add_news_category');
		$this->load->view('manager/common/footer');
	}

	public function edit_news_category($id)
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('news_cat_name', 'Category Name', 'trim|required');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$this->Mdb->update('news_category',$var,array('news_cat_hash_id'=>$id));
        		$this->session->set_flashdata('catmsg', 'Product Category Updated Successfully');
        		redirect(current_url());
        	}
        }
		$send['data']=$this->Mdb->getDataRow('news_category',array('news_cat_hash_id'=>$id));
		$this->load->view('manager/common/header');
		$this->load->view('manager/news/edit_news_category',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_news_category($id)
	{
		$this->Mdb->delete('news_category',array('news_cat_hash_id'=>$id));
		$this->session->set_flashdata('delcat', 'news Category Deleted Successfully');
        redirect('product/view_news_category');
	}

	public function add_news()
	{
		$send['error']='';
		if($this->input->post()){
            $nextid=$this->Mdb->nextAutoId('news');
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('news_cat_id', 'News Category', 'trim|required');
            $this->form_validation->set_rules('news_title', 'News Title', 'trim|required|is_unique[news.news_title]');
        	$this->form_validation->set_rules('news_description', 'News Description', 'trim|required');
        	if($this->form_validation->run()){
        		
        		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name'] = time();
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('news_image'))
                {
                    $err=$this->upload->display_errors();
                    $send['error']= "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a><strong> $err </strong></div>";
                }
                else
                {
                    $data=array('news_hash_id'=>md5(uniqid(rand(), true)),
                                'news_title'=>$this->input->post('news_title'),
                    			'news_title_slug'=>url_title($this->input->post('news_title'), 'dash', TRUE),
                    			'news_description'=>$this->input->post('news_description'),
                    			'news_cat_id'=>$this->input->post('news_cat_id'),
                    			'news_image'=>$this->upload->data()['file_name'],
                    			'news_create_by'=>1,
                    			'news_status'=>$this->input->post('news_status'));
                    
                    $args['image_library'] = 'gd2';
                    $args['source_image'] = './uploads/'.$this->upload->data()['file_name'];
                    $args['create_thumb'] = TRUE;
                    $args['maintain_ratio'] = TRUE;
                    $args['width']         = 370;
                    $args['height']       = 340;

                    $this->load->library('image_lib', $args);

                    $this->image_lib->resize();
                    $getinfo = $this->upload->data(); // Returns information about your uploaded file.
                    $thumb = $getinfo['raw_name'].'_thumb'.$getinfo['file_ext'];
                    $data['thumbnail']=$thumb;

        			$this->Mdb->insert('news',$data);
        			$this->session->set_flashdata('addnewsmsg', 'News Posted Successfully');
        			redirect(current_url());
                }
        		
        	}
        }
		$send['categories']=$this->Mdb->getData('news_category',array('news_cat_status'=>1));
		$this->load->view('manager/common/header');
		$this->load->view('manager/news/add_news',$send);
		$this->load->view('manager/common/footer');
	}

    public function view_news()
    {
        $send['newses']=$this->Mdb->getJoin('news','news_category','news.news_cat_id=news_category.news_cat_id',array());
        $this->load->view('manager/common/header');
        $this->load->view('manager/news/view_news',$send);
        $this->load->view('manager/common/footer');
    }

    public function edit_news($id=NULL)
    {
        $send['error']='';
        $getdetail=$this->Mdb->getDataRow('news',array('news_hash_id'=>$id));
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('news_cat_id', 'News Category', 'trim|required');
            $this->form_validation->set_rules('news_title', 'News Title', 'trim|required');
            $this->form_validation->set_rules('news_description', 'News Description', 'trim|required');
            if($this->form_validation->run()){
                $data=array(
                                'news_title'=>$this->input->post('news_title'),
                                'news_title_slug'=>url_title($this->input->post('news_title'), 'dash', TRUE),
                                'news_description'=>$this->input->post('news_description'),
                                'news_cat_id'=>$this->input->post('news_cat_id'),
                                'news_create_by'=>1,
                                'news_status'=>$this->input->post('news_status'));

                if(($_FILES['news_image']['name'])){

                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;
                    $config['overwrite']            = TRUE;
                    $config['file_name'] = $getdetail->news_image;
                    $this->load->library('upload', $config);
                        
                        if ( ! $this->upload->do_upload('news_image'))
                        {
                            $err=$this->upload->display_errors();
                            $this->session->set_flashdata('addnewsmsgs', $err);
                            redirect(current_url());
                        }else{
                            
                            $data['news_image']=$this->upload->data()['file_name'];
                            $args['image_library'] = 'gd2';
                            $args['source_image'] = './uploads/'.$this->upload->data()['file_name'];
                            $args['create_thumb'] = TRUE;
                            $args['maintain_ratio'] = TRUE;
                            $args['width']         = 370;
                            $args['height']       = 340;

                            $this->load->library('image_lib', $args);

                            $this->image_lib->resize();
                            $getinfo = $this->upload->data(); // Returns information about your uploaded file.
                            $thumb = $getinfo['raw_name'].'_thumb'.$getinfo['file_ext'];
                            $data['thumbnail']=$thumb;
                        }
                }

                    $this->Mdb->update('news',$data,array('news_hash_id'=>$id));
                    $this->session->set_flashdata('addnewsmsg', 'News Posted Successfully');
                    redirect(current_url());
               
            }
        }
        $send['details']=$this->Mdb->getDataRow('news',array('news_hash_id'=>$id));
        $send['categories']=$this->Mdb->getData('news_category',array('news_cat_status'=>1));
        $this->load->view('manager/common/header');
        $this->load->view('manager/news/edit_news',$send);
        $this->load->view('manager/common/footer');
    }

    public function delete_news($id=NULL)
    {
        $fn=$this->Mdb->getDataRow('news',array('news_hash_id'=>$id));
         
        if(file_exists('uploads/'.$fn->news_image)){unlink('uploads/'.$fn->news_image);}
        if(file_exists('uploads/'.$fn->thumbnail)){unlink('uploads/'.$fn->thumbnail);}
        $this->Mdb->delete('news',array('news_hash_id'=>$id));
        $this->session->set_flashdata('delnews', 'News Deleted Successfully');
        redirect('news/view_news');
    }



	

	

	
}
