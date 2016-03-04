<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->view('header');
    }

    public function index() {
        $this->load->helper('url');
        $this->load->model("Blogs");
        $blog_titles=$this->Blogs->index();
        $data = array();
        $data['blog_title']=$blog_titles;
        $this->load->view('index', $data);
        
    }
    public function contact(){
        $this->load->view('contact');
    }
    public function aboutus(){
        $this->load->view('aboutus');
    }
    public function impupdates(){
        $this->load->view('impupdates');
    }
    public function practiceques(){
        $this->load->view('practiceques');
    }
}
