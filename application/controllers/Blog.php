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
                $data['message']="<div class='alert alert-success'><strong>Success!</strong> Blog added Successfully        .</div>";
                return $this->load->view('admin',$data); 
            }
            else
            {
                $data['message']="<div class='alert alert-success'><strong>Error!</strong> Blog ".$_POST['title']." already present.</div>";
                return $this->load->view('admin',$data); 
            }
        }
        else
            $data['message']="<div class='alert alert-success'><strong>Error!</strong> Important update failed.</div>";
            return $this->load->view('admin',$data); 
        
    }
    function getBlogs(){
        $this->load->library('pagination');
        $config['base_url']=  base_url()."important-update/";
        $config['per_page']= 5;
        $config['total_rows']= $this->db->get('blogs')->num_rows();
        $choice = $config["total_rows"] / $config["per_page"];
        $config['num_links']= round($choice);
        $config['full_tag_open'] = '<div class="row"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div><!--pagination-->';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        print_r($this->uri->segment(2));
        $data['query']=  $this->db->get('blogs',$config['per_page'],  $this->uri->segment(2));
        
      
        $this->load->view('header');

        $this->load->view('importantupdate', $data);
    }
    
   
}
?>