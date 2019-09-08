<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function view_product_category()
	{
		$send['categories']=$this->Mdb->getData('product_category');
		$this->load->view('manager/common/header');
		$this->load->view('manager/ecom/view_product_category',$send);
		$this->load->view('manager/common/footer');
	}

	public function add_product_category()
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('pdt_cat_name', 'Category Name', 'trim|required|is_unique[product_category.pdt_cat_name]');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['pdt_cat_hash_id'] = md5(uniqid(rand(), true));
        		$this->Mdb->insert('product_category',$var);
        		$this->session->set_flashdata('catmsg', 'Product Category Added Successfully');
        		redirect(current_url());
        	}
        }
        $this->load->view('manager/common/header');
		$this->load->view('manager/ecom/add_product_category');
		$this->load->view('manager/common/footer');
	}

	public function edit_product_category($id)
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('pdt_cat_name', 'Category Name', 'trim|required');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$this->Mdb->update('product_category',$var,array('pdt_cat_hash_id'=>$id));
        		$this->session->set_flashdata('catmsg', 'Product Category Updated Successfully');
        		redirect(current_url());
        	}
        }
		$send['data']=$this->Mdb->getDataRow('product_category',array('pdt_cat_hash_id'=>$id));
		$this->load->view('manager/common/header');
		$this->load->view('manager/ecom/edit_product_category',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_product_category($id)
	{
		$this->Mdb->delete('product_category',array('pdt_cat_hash_id'=>$id));
		$this->session->set_flashdata('delcat', 'Product Category Deleted Successfully');
        redirect('product/view_product_category');
	}

	public function view_product_subcategory()
	{
		$send['subcategories']=$this->Mdb->getJoin('product_subcategory','product_category','product_subcategory.pdt_cat_id=product_category.pdt_cat_id');

		$this->load->view('manager/common/header');
		$this->load->view('manager/ecom/view_product_subcategory',$send);
		$this->load->view('manager/common/footer');
	}

	public function add_product_subcategory()
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('pdt_subcat_name', 'Sub Category Name', 'trim|required|is_unique[product_subcategory.pdt_subcat_name]');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$var['pdt_subcat_hash_id'] = md5(uniqid(rand(), true));
        		$this->Mdb->insert('product_subcategory',$var);
        		$this->session->set_flashdata('catmsg', 'Product Sub Category Added Successfully');
        		redirect(current_url());
        	}
        }
        $send['categories']=$this->Mdb->getData('product_category',array('pdt_cat_status'=>1));
        $this->load->view('manager/common/header');
		$this->load->view('manager/ecom/add_product_subcategory',$send);
		$this->load->view('manager/common/footer');
	}

	public function edit_product_subcategory($id)
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('pdt_subcat_name', 'Sub Category Name', 'trim|required');
        	if($this->form_validation->run()){
        		$var = $this->input->post();
        		$this->Mdb->update('product_subcategory',$var,array('pdt_subcat_hash_id'=>$id));
        		$this->session->set_flashdata('catmsg', 'Product Sub Category Updated Successfully');
        		redirect(current_url());
        	}
        }
        $send['categories']=$this->Mdb->getData('product_category',array('pdt_cat_status'=>1));
		$send['data']=$this->Mdb->getDataRow('product_subcategory',array('pdt_subcat_hash_id'=>$id));
		$this->load->view('manager/common/header');
		$this->load->view('manager/ecom/edit_product_subcategory',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_product_subcategory($id)
	{
		$this->Mdb->delete('product_subcategory',array('pdt_subcat_hash_id'=>$id));
		$this->session->set_flashdata('delcat', 'Product Sub Category Deleted Successfully');
        redirect('product/view_product_subcategory');
	}

	public function add_product()
	{
		if($this->input->post()){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('pdt_cat_id', 'Category Name', 'trim|required');
        	$this->form_validation->set_rules('pdt_title', 'Product Title', 'trim|required|is_unique[product.pdt_title]');
        	$this->form_validation->set_rules('short_desc', 'Short Description', 'trim|required');
        	$this->form_validation->set_rules('pdt_desc', 'Product Description', 'trim|required');
        	$this->form_validation->set_rules('sale_price', 'Sale Price', 'trim|required');
        	$this->form_validation->set_rules('pdt_stock', 'Product Stock', 'trim|required|numeric');
        	if($this->form_validation->run()){
        		
        		$config['upload_path']          = './uploads/products/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name'] = time();
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('pdt_image'))
                {
                    $err=$this->upload->display_errors();
                    $send['error']= "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a><strong> $err </strong></div>";
                }
                else
                {
                    $var = $this->input->post();
	        		$var['pdt_hash_id'] = md5(uniqid(rand(), true));
	        		$var['pdt_by'] = 1;
	        		$var['pdt_image']=$this->upload->data()['file_name'];
	        		$this->Mdb->insert('product',$var);
	        		$this->session->set_flashdata('pdtadd', 'Product Added Successfully');
	        		redirect(current_url());
                    
                }
        	}
        }
        $send['categories']=$this->Mdb->getData('product_category',array('pdt_cat_status'=>1));
        $this->load->view('manager/common/header');
		$this->load->view('manager/ecom/add_product',$send);
		$this->load->view('manager/common/footer');
	}

	public function delete_product($id=NULL)
    {
        $fn=$this->Mdb->getDataRow('product',array('pdt_hash_id'=>$id));
         
        if(file_exists('uploads/products/'.$fn->pdt_image)){unlink('uploads/products/'.$fn->pdt_image);}
        $this->Mdb->delete('product',array('pdt_hash_id'=>$id));
        $this->session->set_flashdata('delpdt', 'Product Deleted Successfully');
        redirect('product/view_product');
    }

	public function getsubcat($id=NULL)
   		{
   			$chk=$this->Mdb->getData('product_subcategory',array('pdt_cat_id'=>$id));
	        echo "<select class='form-control' name='pdt_subcat_id' >";
	        echo "<option value=''>--SELECT--</option>";
	        foreach ($chk as $ch) {
	            echo "<option value='".$ch->pdt_subcat_id."'>";
	            //echo "<option value='".$ch['subject_name']"'>";
	            echo $ch->pdt_subcat_name;
	            echo "</option>";
	        }
	        echo "</select>";
	   	}

	public function view_product()
	{
		$send['products']=$this->Mdb->getDataDesc('product',array(),'pdt_id');

		$this->load->view('manager/common/header');
		$this->load->view('manager/ecom/view_product',$send);
		$this->load->view('manager/common/footer');
	}

	

	
}
