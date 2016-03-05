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
        $query="select title from blogs";
        $result_title = $this->db->query($query);
        
        $blog_title=array();
        if($result_title->num_rows()>0)
        {
            foreach($result_title->result_array() as $title){
                array_push($blog_title,$title['title']);
            }
           return $blog_title;
           
        }
        //echo 'error in fetching data';
    }
    function insertIntoBlog($data)
    {
        return $this->db->insert('blogs',$data);        
    }
    function getBlogs()
    {
        $query="select title, description from blogs ORDER BY `created_at` DESC";
        $blogs = $this->db->query($query);
        if($blogs->num_rows()>0)
        {            
            return $blogs->result_array();           
        }
        return false;       
    }
    
}
?>