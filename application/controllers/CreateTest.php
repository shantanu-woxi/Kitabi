<?php

class CreateTest extends CI_Controller
{
    public function testData()
    {
        /*echo "<pre>";
        $option="question1_option1";
        print_r($_FILES[$option]['name']);
        print_r($_FILES["question1_option2"]['name']);
        print_r($_POST);
        exit();
        */
        $subject_id=$_POST['upload_subject_number'];
        $chapter_id=$_POST['upload_section_number'];
        
        //fetch subject name from id
        $this->load->model('SubjectChapter');
        $subject_name=$this->SubjectChapter->getSubjectName($subject_id);
        
        //fetch subject name from id
        $chapter_name=$this->SubjectChapter->getChapterName($chapter_id);
        
        echo "<br>";
        for($i=1;$i<=10;$i++)
        {
            $temp='question_'.$i;
            $question=$_POST[$temp];
            $this->load->model("SectionTest");
            $anstype=$_POST['anstype'.$i];
            if($anstype == 'Text')
            {
                $option1="question".$i."_option1";
                $option2="question".$i."_option2";
                $option3="question".$i."_option3";
                $option4="question".$i."_option4";
                $optinsArray=array(
                    'option1' => $option1,
                    'option2'=>$option2,
                    'option3'=>$option3,
                    'option4'=>$option4
                );
                $is_image=0;
            }
            else if($anstype == 'Image')
            {
                $option=array();
                $option[1]="question".$i."_option1";
                $option[2]="question".$i."_option2";
                $option[3]="question".$i."_option3";
                $option[4]="question".$i."_option4";
                
                //print_r($_FILES[$option]['name']);
                $optinsArray=array(
                    'option1'=> $_FILES[$option[1]]['name'],
                    'option2'=>$_FILES[$option[2]]['name'],
                    'option3'=>$_FILES[$option[3]]['name'],
                    'option4'=>$_FILES[$option[4]]['name']
                );
                $is_image=1;
                
                /** Uploading code start*/
                $this->load->helper(array('form', 'url'));
                $config['upload_path'] = 'assets/options/'.$subject_name."/".$chapter_name."/";
                
                if(!is_dir($config['upload_path']))//checks whether directory is already present or not
                {
                    mkdir($config['upload_path'],0777,true);
                    chmod($config['upload_path'],777);
                    echo $config['upload_path']."dir created";
                }
                
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '0';
                for($j=1;$j<=4;$j++) //looping for all four files
                {
                    
                    $config['file_name'] = date("Y_m_d H:i:s").$_FILES[$option[$j]]['name'];
                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload($option[$j]))
                    {
                      $error = array('error' => $this->upload->display_errors());
                      // print_r($error);
                      // exit();
                    }
                    else
                    {
                        $data = array('upload_data' => $this->upload->data());
                    }
                }
                
                /** Uploading code end*/
            }
            $answer=$_POST['answer_'.$i];
            //$anstype=$_POST['anstype'.$i];
            $result=$this->SectionTest->insertSectionTest($subject_id,$chapter_id,$question, json_encode($optinsArray),$is_image,$answer);
            echo $result;
           
//            echo $section_questions_id->result_array();
        }        
    }
    public function insertTest()
    {
        $subject_id=$_POST['upload_subject_number'];
        $chapter_id=$_POST['upload_section_number'];
        $questions=array();
        $data=array();
        for($i=1;$i<=10;$i++)
        {
            $temp='question_'.$i;
            $section_questions_id=$this->load->model($subject_id,$chapter_id,$_POST[$temp]);
        }
        
        
    }
}

?>