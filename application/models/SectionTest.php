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
}


?>