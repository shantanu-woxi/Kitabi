<?php

class modelinfo extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper("url");
        $this->load->helper("form");
    }
    function fetch_from_db()
    {
        $this->db->select("id");
        $this->db->where("email","admin");                            
        $result=$this->db->get("users");
        if($result->num_rows()>0)
        {
            return $result;
        }
        else
            echo "here";
    }
}
    
    
?>