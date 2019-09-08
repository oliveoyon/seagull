<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_manuscript extends CI_Controller {

	public function dashboard()
	{
        $send['title']='Privacy Policy';
        $this->load->view('manager/common/header');
		$this->load->view('manager/add_class');
		$this->load->view('manager/common/footer'); 
	}

	public function submitted_books()
	{
		$send['status']=$this->Mdb->getData('book_manuscript_status');
        $this->load->view('manager/common/header');
		$this->load->view('manager/Book_manuscript/submitted_books',$send);
		$this->load->view('manager/common/footer'); 
	}

	public function getBooks($id=NULL)
	{
		$data=$this->Mdb->getData('book_manuscript',array('book_manuscript_status'=>$id));
		echo "<table id='example1' class='table table-bordered table-striped dataTable' role='grid' aria-describedby='example1_info'>";
		echo "<thead><tr><th>Manuscript ID</th><th>Title</th><th>Keywords</th><th>Area</th><th>Action</th></tr></thead><tbody>";
		foreach ($data as $d) {
			
			if($d->book_manuscript_status == 9){$a=site_url('book_manuscript/publish/'.$d->manuscript_no);}else{$a=site_url('book_manuscript/update_book/'.$d->book_manuscript_hash_id);}
		 	echo "<tr><td>$d->manuscript_no</td><td>$d->title</td><td>$d->keyword</td><td>$d->area_of_work</td><td><a href='".$a."'><span class='btn-sm btn-flat btn-success'><i class='fa fa-eye'></i> Action</span></a></td></tr>";
		 } 
		echo "</tbody></table>";
	}

	public function update_book($id)
	{
		$send['stats']=$this->Mdb->getPaperDetail($id);
		$send['members']=$this->Mdb->getDataAsc('book_member',array('member_status'),'member_type');
		// echo "<pre>";
		// print_r($send['stats']);
		$send['rev_comm']=$this->Mdb->getRevComm($send['stats'][0]->manuscript_no);
		// echo "<pre>";
		// print_r($send['rev_comm']);
        $this->load->view('manager/common/header');
		$this->load->view('manager/Book_manuscript/update_book',$send);
		$this->load->view('manager/common/footer');
	}

	public function publish($manuscript)
	{
        if (!file_exists('uploads/book_manuscript/'.$manuscript.'/chapter')) {
			    mkdir('uploads/book_manuscript/'.$manuscript.'/chapter', 0777, true);
			}
        if($this->input->post()){
            $var=$this->input->post();
            $var=array_filter($var);

            if($_FILES['cover_image']['name'])
            {
                $this->load->library('imgprocess');
                $this->imgprocess->load($_FILES['cover_image']['tmp_name']);
                $this->imgprocess->resize(800,532);
                $allowed =  array('jpeg','png' ,'jpg');
				$filename = $_FILES['cover_image']['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(in_array($ext,$allowed) ) {
				   $namee=$manuscript.'.'.$ext;
                	$this->imgprocess->save('uploads/book_manuscript/'.$manuscript.'/'.$namee);
				}
            }

            

            $count=count($var['chapter_title']);
            $data=array();

            for($i=0;$i<$count;$i++){
            
                if(!empty($_FILES['files']['name'][$i])){
		          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
		          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
		          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
		          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
		          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
		          // Set preference
		          //$config['upload_path'] = 'uploads/'; 
		          $config['upload_path'] = './uploads/book_manuscript/'.$manuscript.'/chapter/'; 
		          $config['allowed_types'] = 'pdf';
		          $config['max_size'] = '5000'; // max_size in kb
		          $config['file_name'] = $_FILES['files']['name'][$i];
		 
		          $this->load->library('upload',$config); 
		 
		          if($this->upload->do_upload('file')){
		            $uploadData = $this->upload->data();
		            $filename = $uploadData['file_name'];

		            $data['filenames'][] = $filename;
		          }
		        }

                $arr=array('book_chapter_hash_id'=>md5(uniqid(rand(), true)),'manuscript_no'=>$manuscript,
                           'chapter_title'=>$var['chapter_title'][$i],
                           'description'=>$var['description'][$i],
                           'author_name'=>$var['author_name'][$i],'author_department'=>$var['author_department'][$i],'author_institution'=>$var['author_institution'][$i],'author_email'=>$var['author_email'][$i],'editor_name'=>$var['editor_name'][$i],'editor_department'=>$var['editor_department'][$i],'editor_institution'=>$var['editor_institution'][$i],'editor_email'=>$var['editor_email'][$i],
                           'page_from'=>$var['page_from'][$i],'page_to'=>$var['page_to'][$i],
                           'doi'=>$var['doi'][$i],'chapter_price'=>$var['chapter_price'][$i],'files'=>$filename,'book_chapter_status'=>1);
                $this->Mdb->insert('book_chapter',$arr);
            }

            $this->Mdb->update('book_manuscript',array('cover_image'=>$namee,'book_editor'=>$var['book_editor'],'eisbn'=>$var['eisbn'],'manuscript_doi'=>$var['manuscript_doi'],'pages'=>$var['pages'],'price'=>$var['price'],'book_manuscript_status'=>10),array('manuscript_no'=>$manuscript));
            redirect('book_manuscript/submitted_books');
           
        }
        $send['books']=$this->Mdb->getDataRow('book_manuscript',array('manuscript_no'=>$manuscript));
        $send['data']=$this->Mdb->getDataRow('reg_book_author',array('book_author_req_id'=>$send['books']->book_author_req_id));
        $this->load->view('manager/common/header');
		$this->load->view('manager/Book_manuscript/publish',$send);
		$this->load->view('manager/common/footer');
	}	

	


	
}
