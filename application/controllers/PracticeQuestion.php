<?php
class PracticeQuestion extends CI_Controller
{
     
    function index()
    {
        $this->load->model('PracticeQuestion');
        $result = $this->PracticeQuestion->index();
    }
    
    function store()
    {
        $this->load->view('header');  //not loading on first click        
        //uploading file
            $this->load->helper(array('form', 'url'));
            $config['upload_path'] = 'assets/questions/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';            
            $config['file_name'] = date("Y_m_d H:i:s").$_FILES['userfile']['name'];

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile'))
            {
              $error = array('error' => $this->upload->display_errors());
              // print_r($error);
              // exit();
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
            }
        if(!empty($_POST['title']) && !empty($_POST['description'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image = ($this->upload->data()['file_name']=='')?null:$this->upload->data()['file_name'];
            $this->load->model('PracticeQuestions');
            $data = array('title'=>$title,'description'=>$description,'image_name'=>$image);
            $result =  $this->PracticeQuestions->store($data);
            if($result)
            {
                return $this->load->view('admin');
                
            }
            else
            {
                echo "need to add flash";
            }
        }
        else{
            return $this->load->view('admin');//need to add with flash message
        }
    }
    function show(){
        $this->load->view('header');
        $this->load->model('PracticeQuestions');
        $data['questions'] = $this->PracticeQuestions->getQuestions();
        return $this->load->view('practicequestions', $data);
    }
}
?>