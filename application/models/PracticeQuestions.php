<?php

class PracticeQuestions extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper("url");
        $this->load->helper("form");
    }
    
    function store($data){
        if(!empty($data)){
            $result = $this->db->insert('practice_questions',$data);
            if($result){
                return true;
            }
            return false;
        }
        return false;
    }

    function getQuestions(){
        $query = 'select * from practice_questions ORDER BY `created_at` DESC';
        $questions = $this->db->query($query);
        if($questions->num_rows()>0)
        {            
            return $questions->result_array();           
        }
        return false;
    }
}
    
    
?>