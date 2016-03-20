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
        
        /**delete previous section test for selected subject_id and chapter_id*/
        $this->load->model('SectionTest');
        $deleteResult=$this->SectionTest->deleteSectionTest($subject_id,$chapter_id);
         
        //fetch subject name from id
        $this->load->model('SubjectChapter');
        $subject_name=$this->SubjectChapter->getSubjectName($subject_id);
        
        //fetch subject name from id
        $chapter_name=$this->SubjectChapter->getChapterName($chapter_id);
        $chapter_name=preg_replace("( )","_",$chapter_name);
    
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
                    'option1' => $_POST[$option1],
                    'option2'=>$_POST[$option2],
                    'option3'=>$_POST[$option3],
                    'option4'=>$_POST[$option4]
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
                $path_to_per='/var/www/html/Kitabi/assets/options/'.$subject_name."/".$chapter_name."/";
                if(!is_dir($config['upload_path']))//checks whether directory is already present or not
                {
                    mkdir($config['upload_path'],0777,true);
                    chmod($path_to_per,0777);
                }
                chmod($path_to_per,0777);
    
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '0';
                for($j=1;$j<=4;$j++) //looping for all four files
                {
                    
                    $config['file_name'] = date("Y_m_d H:i:s").$_FILES[$option[$j]]['name'];
                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload($option[$j]))
                    {
                      $error = array('error' => $this->upload->display_errors());
            //          print_r($error);
                      // exit();
                    }
                    else
                    {
                        $data = array('upload_data' => $this->upload->data());
                        $newpath="chmod 777 ".$path_to_per."*.*";
          //              echo $newpath;
                        exec($newpath);
                    }
                }
                /** Uploading code end*/
                
            }
            $answer=$_POST['answer_'.$i];
            //$anstype=$_POST['anstype'.$i];
            $result=$this->SectionTest->insertSectionTest($subject_id,$chapter_id,$question, json_encode($optinsArray),$is_image,$answer);
        }//for loop completed
        
        $redirect_path=base_url()."dashboard";
        redirect($redirect_path);
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
        redirect("dashboard");
    }
    
    public function showTest()
    {
        //$subject_id=1;
        $chapter_id=$_POST['chapterid'];
        $this->load->model('SectionTest');
        $testData = $this->SectionTest->getSectionTest($chapter_id);
//        print_r($testData);
//        exit();
        $HTML='';
//        if(!empty($testData))
        for($i=0;$i<sizeof($testData);$i++)
        {
            $question_id= $testData[$i]['id'];
            $decode_json_var= json_decode($testData[$i]['options']);
           // echo "answer:".$testData[$i]['answer'];
            $HTML.="<h3 >".$testData[$i]['question']."</h3><input type='hidden' name='question_id".($i+1)."' value='".$question_id."' class='hide'><ul class='list-unstyled'>".
                                        "<li><div class='col-xs-1'>A:</div><div class='width-11'>".$decode_json_var->option1."</div></li>".
                                        "<li><div class='col-xs-1'>B:</div><div class='width-11'>".$decode_json_var->option2."</div></li>".
                                        "<li><div class='col-xs-1'>C:</div><div class='width-11'>".$decode_json_var->option3."</div></li>".
                                        "<li><div class='col-xs-1'>D:</div><div class='width-11'>".$decode_json_var->option4."</div></li></ul>".
                                        "<div class='form-group'>Answer: &nbsp;&nbsp; ".
                                        "    <label class='radio-inline'>".
                                        "        <input type='radio' name='answer".($i+1)."' value= 'question".($i+1)."_option1' >A".
                                        "    </label>".
                                        "    <label class='radio-inline'>".
                                        "        <input type='radio' name='answer".($i+1)."' value= 'question".($i+1)."_option2'>B".
                                        "    </label>".
                                        "    <label class='radio-inline'>".
                                        "        <input type='radio' name='answer".($i+1)."' value= 'question".($i+1)."_option3' >C".
                                         "   </label>".
                                        "    <label class='radio-inline'>".
                                         "       <input type='radio' name='answer".($i+1)."' value= 'question".($i+1)."_option4'>D".
                                         "       <input type='radio' name='answer".($i+1)."' class='hide' value= 'other' checked>".
                                         "   </label>".
                                        "</div>";
        }
        echo $HTML;
    }
    public function saveTestData()
    {
        //print_r($_POST);
        //exit();
        $this->load->library('session');
        $user_id=$this->session->userdata['id'];
        
        $subject_id=$_POST['upload_subject_number'];
        $chapter_id=$_POST['upload_section_number'];
        
        $count=0;
        for($t=1;$t<=10;$t++)
        {
            
            $question=$_POST['question_id'.$t];
            //fetch answer from qid
            $this->load->model('SectionTest');
             $isanswer=$this->SectionTest->getAnswer($question);
            // echo "<pre>answer is: ";
           // print_r($isanswer->result_array());
            $user_answer=$_POST['answer'.$t];
            if($user_answer==$isanswer->result_array()[0]['answer'])
            {
                $is_correct=1;
                $count++;
            }
            else{
                $is_correct=0;
            }
            
            $data=array(
            'user_id'=>$user_id,
            'subject_id'=>$subject_id,
            'section_id'=>$chapter_id,
            'question_id'=>$question,
            'user_answer'=>$user_answer,
            'is_correct'=>$is_correct
            );
            //print_r($data);
           
            $this->load->model('SectionTest');
            $result=$this->SectionTest->saveSectionTestData($data);
            
        }
        $this->session->set_flashdata('item', 'Test Submitted Successfully \n Your Score: '.$count);
        redirect(base_url()."dashboard");
        /*
        if($result)
        {
            //operation successful message
        }
        else
        {
            //operation unsuccessful message
        }*/
    }
    public function mytest()
    {
        $this->load->model('SectionTest');
        echo $this->SectionTest->mytestdata();
    }
}

?>