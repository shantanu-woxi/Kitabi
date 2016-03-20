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
            $query="select id,first_name,last_name,email_id,phone_number,address,city,role,verified from users where email_id='".$email."' and password='".$pass."'";
            $result=$this->db->query($query);
            foreach ($result->result() as $x)
                {
                    $userData=array('id'=>$x->id,'fname'=>$x->first_name , 'lname'=> $x->last_name, 'role'=>$x->role, 'verified'=>$x->verified);
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
        $data['verified']=0;
        return $this->db->insert('users',$data);        
    }
    
    function getUsers()
    {
        $query="select id,first_name,last_name,email_id,phone_number,address,city,role,verified from users where role='user' order by id desc";
        $result = $this->db->query($query);
        if($result) return $result;
        else return 0;
        
    }
    function changeUserConfirmation($userid,$changeValue)
    {
        $query="update users set verified=".$changeValue." where id=".$userid."";
        $result=$this->db->query($query);
        if($result)
            return 1;
        else
            return 0;
    }
}
    
    
?>