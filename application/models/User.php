<?php

class User extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper("url");
        $this->load->helper("form");
    }
    function login($email,$pass)
    {
        if (strlen($pass)>=6)
        {
            $query="select * from users where email_id='".$email."' and password='".$pass."'";
            $result=$this->db->query($query);
            foreach ($result->result() as $x)
                {
                    $userData=array('id'=>$x->id,'fname'=>$x->first_name , 'lname'=> $x->last_name, 'role'=>$x->role);
                    $this->load->library('session');
                    $this->load->helper('url');
                    $this->session->set_userdata($userData);
                    $id=$this->session->userdata('id');
                }
            if($result->num_rows()>0)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
    }
    function userRegistration($data)
    {
        unset($data['confirm_password']);
        $data['role']='user';
        return $this->db->insert('users',$data);        
    }
}
    
    
?>