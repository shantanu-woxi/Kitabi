<?php

class SectionTest extends CI_Model
{
    //$subject_id,$chapter_id,$_POST[$temp],$options,$anstype,$answer
    function insertSectionTest($subject_id,$chapter_id,$question,$options,$anstype,$answer)
    {
        $data=array(
          'sub_id'=>$subject_id,
            'sect_id'=>$chapter_id,
            'question'=>$question,
            'options'=>$options,
            'is_image'=>$anstype,
            'answer'=>$answer
        );
        return $this->db->insert('section_questions',$data); 
       
    }
    function getSectionTest($chapter_id)
    {
        $query="select * from section_questions where sect_id=".$chapter_id."";
        $testData =  $this->db->query($query);
        if(!empty($testData))
        {
            return $testData->result_array();
        }
    }
    function saveSectionTestData($data)
    {
        return $this->db->insert('section_test_result',$data);
    }
    function mytestdata()
    {
        
        $data=array('id1'=>1);
        print_r($data);
        echo "here";
        return $this->db->insert('mytest',$data);
    }
    function getAnswer($question_id)
    {
        $query="select answer from section_questions where id=".$question_id."";
        $answer =  $this->db->query($query);
        return $answer;
    }
}


?>