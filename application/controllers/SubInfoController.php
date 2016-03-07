<?php

class SubInfoController extends CI_Controller
{
    
    function test()
    {
        //printing subject names
        $this->load->model("SubjectChapter");
        $result=$this->SubjectChapter->getSubInfo();//subject information
        $data=array();
        echo "Subject Names<br>";
        foreach ($result->result_array() as $x)
        {
            echo $x['name']."<br>";
            array_push($data, $x['id']);//putting subject id into array
        }

        //printing subject chapters
        echo "Chapter Names<br>";
        $this->load->model("SubjectChapter");
        $chapterNames=$this->SubjectChapter->getChapterInfo($data);//chapter information
        for($i=0;$i<count($chapterNames);$i++)
        {
            for($j=0;$j<count($chapterNames[$i]);$j++)
            echo $chapterNames[$i][$j]['name']."<br>";
            
        }
        //echo $chapterNames[0][0]['name'];  //this is sample example to print chapter name
        
        //reading the chapter contents
        $this->load->model("SubjectChapter");
        $contents=$this->SubjectChapter->getChapterContents();
        for($i=0;$i<count($contents->result_array());$i++)
            echo $contents->result_array()[$i]['chapter_location']."<br>";//displaying location
        
    }
    function getSubjects()
    {
        $this->load->model("SubjectChapter");
        $result=$this->SubjectChapter->getSubInfo();//subject information
        $data=array();
        foreach($result->result_array() as $x)
        {
            array_push($data, $x['id']);
        }
        $this->load->model("SubjectChapter");
        $chapterNames=$this->SubjectChapter->getChapterInfo($data);//chapter information
        print_r($chapterNames);
       // $length=count($result->result_array());
       // echo $length;        
        //echo $chapterNames[0][0]['name'];
        for($i=0;$i<2;$i++)
        {
            echo $result->result_array()[$i]['name']."<br>";
            for($j=0;$j<count($result->result_array());$j++)
            {
                echo $chapterNames[$i][$j]['name'];
            }
        }
    }

    function getChapters(){
        $this->load->model("SubjectChapter");
    }
}
?>