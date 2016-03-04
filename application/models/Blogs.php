<?php

class Blogs extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper("url");
        $this->load->helper("form");
    }
    function index()
    {
        $query="select title from blog";
        $result_title=$this->db->query($query);
        
        $blog_title=array();
        if($result_title->num_rows()>0)
        {
            foreach($result_title->result_array() as $title){
                array_push($blog_title,$title['title']);
            }
           return $blog_title;
           
        }
        echo 'error in fetching data';
    }
    function insertIntoBlog($data)
    {
        return $this->db->insert('blog',$data);        
    }
    
}

?>