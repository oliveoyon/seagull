<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka'); 
        $this->load->helper('form');  

    }

	public function view_journal_category()
    {
        $send['categories']=$this->Mdb->getData('journal_category');
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/view_journal_category',$send);
        $this->load->view('manager/common/footer');
    }

    public function add_journal_category()
    {
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('journal_cat_title', 'Jolurnal Category Name', 'trim|required|is_unique[journal_category.journal_cat_title]');
            if($this->form_validation->run()){
                $var = $this->input->post();
                $var['journal_cat_hash_id'] = md5(uniqid(rand(), true));
                $this->Mdb->insert('journal_category',$var);
                $this->session->set_flashdata('catmsg', 'Journal Category Added Successfully');
                redirect(current_url());
            }
        }
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/add_journal_category');
        $this->load->view('manager/common/footer');
    }

    public function edit_journal_category($id)
    {
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('journal_cat_title', 'Category Name', 'trim|required');
            if($this->form_validation->run()){
                $var = $this->input->post();
                $this->Mdb->update('journal_category',$var,array('journal_cat_hash_id'=>$id));
                $this->session->set_flashdata('catmsg', 'Product Category Updated Successfully');
                redirect(current_url());
            }
        }
        $send['data']=$this->Mdb->getDataRow('journal_category',array('journal_cat_hash_id'=>$id));
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/edit_journal_category',$send);
        $this->load->view('manager/common/footer');
    }
    


    public function view_journal_subcategory()
    {
        $send['subcategories']=$this->Mdb->getJoin('journal_subcategory','journal_category','journal_subcategory.journal_cat_id=journal_category.journal_cat_id',array());
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/view_journal_subcategory',$send);
        $this->load->view('manager/common/footer');
    }

    public function add_journal_subcategory()
    {
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('journal_subcat_title', 'Jolurnal SubCategory Name', 'trim|required|is_unique[journal_subcategory.journal_subcat_title]');
            $this->form_validation->set_rules('journal_cat_id', 'Jolurnal Category Name', 'trim|required');
            if($this->form_validation->run()){
                $var = $this->input->post();
                $var['journal_subcat_hash_id'] = md5(uniqid(rand(), true));
                $this->Mdb->insert('journal_subcategory',$var);
                $this->session->set_flashdata('catmsg', 'Journal SubCategory Added Successfully');
                redirect(current_url());
            }
        }
        $send['categories']=$this->Mdb->getData('journal_category');
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/add_journal_subcategory',$send);
        $this->load->view('manager/common/footer');
    }

    public function edit_journal_subcategory($id)
    {
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('journal_subcat_title', 'SubCategory Name', 'trim|required');
            $this->form_validation->set_rules('journal_cat_id', 'Jolurnal Category Name', 'trim|required');
            if($this->form_validation->run()){
                $var = $this->input->post();
                $this->Mdb->update('journal_subcategory',$var,array('journal_subcat_hash_id'=>$id));
                $this->session->set_flashdata('catmsg', 'Product SubCategory Updated Successfully');
                redirect(current_url());
            }
        }
        $send['data']=$this->Mdb->getDataRow('journal_subcategory',array('journal_subcat_hash_id'=>$id));
        $send['categories']=$this->Mdb->getData('journal_category');
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/edit_journal_subcategory',$send);
        $this->load->view('manager/common/footer');
    }
    

    public function add_journal()
    {
        if($this->input->post()){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('journal_title', 'Journal Title', 'trim|required|is_unique[reg_journal.journal_title]');
            $this->form_validation->set_rules('journal_cat_id', 'Journal Category Name', 'trim|required');
            $this->form_validation->set_rules('journal_subcat_id', 'Journal Subcategory Name', 'trim|required');
            if($this->form_validation->run()){
                $var = $this->input->post();
                $var['journal_hash_id'] = md5(uniqid(rand(), true));
                $var['journal_title_slug']=url_title($this->input->post('journal_title'), 'dash', TRUE);
                $this->Mdb->insert('reg_journal',$var);
                $this->session->set_flashdata('addjrnmsg', 'Journal Added Successfully');
                redirect(current_url());
            }
        }
        $send['categories']=$this->Mdb->getData('journal_category');
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/add_journal',$send);
        $this->load->view('manager/common/footer');
    }

    public function fetchsubcat($id)
    {
        if ($id)

            {
                $data= $this->Mdb->getData('journal_subcategory',array('journal_cat_id'=>$id));
                echo "<select class='form-control' name='journal_subcat_id' required id='journal_subcat_id'>";
                foreach ($data as $row) {
                    echo "<option value='".$row->journal_subcat_id."'>";
                    echo $row->journal_subcat_title;
                    echo "</option>";
                }
                echo "</select>";

            }
    }

    public function view_journal()
    {
        $send['journals']=$this->Mdb->getData('reg_journal');
        $this->load->view('manager/common/header');
        $this->load->view('manager/journal/view_journal',$send);
        $this->load->view('manager/common/footer');
    }


    

   
	
}
