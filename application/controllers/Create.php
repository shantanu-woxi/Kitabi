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
        if (isset($_POST['subject_Names']) && isset($_POST['section_Number']) && isset($_POST['section_Name'])) {
            $subject_Names = $_POST['subject_Names'];
            $index_Number = $_POST['section_Number'];
            $section_Name = $_POST['section_Name'];

            /* to get the id of subject selected from view */
            $subject_Names = $_POST['subject_Names'];
            $this->load->model('SubjectHandling');
            $subjectID = $this->SubjectHandling->getSubjectId($subject_Names); //result contains id of subject. this is used to insert into table chapters.

            $data = array(
                'sid' => $subjectID,
                'index_no' => $index_Number,
                'name' => $section_Name
            );

            //to insert into chapters
            $this->load->model('SubjectHandling');
            $operation_result = $this->SubjectHandling->createSubject($data);

            return $this->load->view('admin');
            //redirect($temp_uri);
        }
        return $this->load->view('admin');
    }

    public function uploadToSections() {
        
        $this->load->view('header');  //not loading on first click
        
        //uploading file
            $this->load->helper(array('form', 'url'));
            $config['upload_path'] = 'assets/sections/'.$_POST['upload_subject_name'].'/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size']	= '0';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
		      $error = array('error' => $this->upload->display_errors());
              //         print_r($error);
                //		$this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
            //               print_r('success');
                    //		$this->load->view('upload_success', $data);
            }
            //print_r($_POST['userfile']);
            
        if (!empty($_POST['upload_subject_name']) && !empty($_POST['upload_section_number'])) 
        {
            $subject_name = $_POST['upload_subject_name'];
            $index_no = $_POST['upload_section_number'];
           
            //to fetch subject id
            $this->load->model('SubjectHandling');
            $subjectID = $this->SubjectHandling->getSubjectId($subject_name); //result contains id of subject. this is used to insert into table chapters.
            //to fetch chapter id
            $this->load->model('SubjectHandling');
            $chapterID = $this->SubjectHandling->getChapterId($index_no, $subjectID); //result contains id of subject. this is used to insert into table chapters.
            
            //to fetch chapter name
            $this->load->model('SubjectHandling');
            $chapterName = $this->SubjectHandling->getChapterName($chapterID);
           
            //create data array
            $data = array(
                'sid' => $subjectID,
                'cid' => $chapterID,
                'chapter_location' => $this->upload->data()['file_name']
            );

            //insert into chapter_contents
            $this->load->model('SubjectHandling');
            $operation_result = $this->SubjectHandling->createChapterContents($data);
            return $this->load->view('admin');
         
        }
        return $this->load->view('admin');
    }

}

?>