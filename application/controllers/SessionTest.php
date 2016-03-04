<?php


class SessionTest extends CI_Controller
{
    function index()
    {
        $this->load->library('session');
        $userInfo=array('userid'=>'1' ,'username'=>'laxdeep');
        $this->session->set_userdata($userInfo);
        print_r( $this->session->all_userdata());
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
