<?php
class Blog extends CI_Controller
{
     
    function index()
    {
        $this->load->model('Blogs');
        $result=$this->Blogs->index();
    }
    
    function insertBlog()
    {
        $this->load->view('header');
        if(!empty($_POST['title']) && !empty($_POST['description']))
        {
            $title=$_POST['title'];
            $description=$_POST['description'];
            $this->load->model('Blogs');
            $data=array('title'=>$title,'description'=>$description);
            $result=  $this->Blogs->insertIntoBlog($data);
            if($result)
            {
                return $this->load->view('admin');
                
            }
            else
            {
                echo "need to add flash";
            }
        }
        else
            return $this->load->view('admin');//need to add with flash message
        
    }
    function getBlogs(){
        $this->load->view('header');
        $this->load->model('Blogs');
        $data['blogs'] = $this->Blogs->getBlogs();
        return $this->load->view('importantupdate', $data);
    }
}
?>