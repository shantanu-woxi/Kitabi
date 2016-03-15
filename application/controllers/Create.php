<?php

class Create extends CI_Controller {

    function __constructor() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
    }

    function test() {
        $fname = $_POST['upload_file'];
        $config['upload_path'] = '/home/laxdeep/upload/' . $fname;
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            echo "error";
            exit();
        } else {
            $data = array('upload_data' => $this->upload->data());
            echo 'success';
            exit();
        }
        exit();
    }

    public function createSections() {
        $this->load->view('header');
        if (isset($_POST['subject_id']) && isset($_POST['section_Number']) && isset($_POST['section_Name'])) {
            $data = array(
                'sid' => $_POST['subject_id'],
                'index_no' => $_POST['section_Number'],
                'name' => $_POST['section_Name']
            );
            //to insert into chapters
            $this->load->model('SubjectChapter');
            $operation_result = $this->SubjectChapter->createSection($data);
            if($operation_result==0){
                $data['message']="<div class='alert alert-danger'><strong>Error!</strong> Section ".$_POST['section_Name']." already exsits.</div>";
                return $this->load->view('admin',$data);
            }
            $data['message']="<div class='alert alert-success'><strong>Success!</strong> Section Created Successfully.</div>";
            return $this->load->view('admin',$data);    
        }
        $data['message']="<div class='alert alert-danger'><strong>Error!</strong> Failed to create section.</div>";
        return $this->load->view('admin',$data);
    }

    public function uploadToSections() {
        
        $this->load->view('header');  //not loading on first click

        $subjectID = $_POST['upload_subject_number'];
        $chapterID = $_POST['upload_section_number'];
        $this->load->model('SubjectChapter');
        $subjectName = $this->SubjectChapter->getSubjectName($subjectID); //result contains name of subject. this is used to insert into table chapters.
        //to fetch chapter name
        $this->load->model('SubjectChapter');
        $chapterName = $this->SubjectChapter->getChapterName($chapterID);
        //uploading file
        $this->load->helper(array('form', 'url'));
        if (!empty($_POST['upload_subject_number']) && !empty($_POST['upload_section_number'])) {
            $config['upload_path'] = 'assets/sections/'.$subjectName.'/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']	= '0';
            $_FILES['userfile']['name'] = $chapterName.".pdf";
            $config['file_name'] = $_FILES['userfile']['name'];
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
		      $error = array('error' => $this->upload->display_errors());
                      // print_r($error);
                      // exit();
                //		$this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    //       print_r($data);
                    // exit();
                    //		$this->load->view('upload_success', $data);
            }
            //print_r($_POST['userfile']);            
        
            
            //create data array
            $data = array(
                'sid' => $subjectID,
                'cid' => $chapterID,
                'chapter_location' => $this->upload->data()['file_name']
            );

            //insert into chapter_contents
            $this->load->model('SubjectChapter');
            $operation_result = $this->SubjectChapter->createChapterContents($data);
            return $this->load->view('admin/');
         
        }
        return $this->load->view('admin');
    }

    public function getChapters(){
        if(!empty($_POST['subid'])){
            $subject_id = $_POST['subid'];
            $this->load->model('SubjectChapter');
            $result = $this->SubjectChapter->getChapters($subject_id);           
            $HTML="";
            if(!empty($result)){
            foreach($result as $list){
                $HTML.="<option value='".$list['id']."'>".$list['name']."</option>";
            }
            
            echo $HTML;
            }
        return 0;
        }
    }

    public function getChaptersList()
    {
        if(!empty($_POST['subid'])){
            $subject_id = $_POST['subid'];
            $this->load->model('SubjectChapter');
            $subjectName = $this->SubjectChapter->getSubjectName($subject_id);
            $result = $this->SubjectChapter->getChaptersList($subject_id);
            
            
            $HTML="";
            if(!empty($result)){
                $i=0;
            foreach($result->result_array() as $list){
                $HTML.="<tr>
                          <td><a href='assets/sections/".$subjectName."/".$list['chapter_location']."'>".++$i.". ".$list['chapter_location']."</a></td>
                        </tr>";
            }
        }
        echo $HTML;
        }
    }
    }
?>