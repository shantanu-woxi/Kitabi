<?php

class SubjectHandling extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper("url");
        $this->load->helper("form");
    }
    function getSubInfo()
    {
    //    $this->db->select("");
        $subjectNames=$this->db->get("subjects");
        
        if($subjectNames->num_rows()>0)
        {
            return $subjectNames;
        }
        else
            echo "here";
    }
    function getSubjectId($name)
    {
        $query="select id from subjects where name='".$name."'";
        $result_id=$this->db->query($query);
        if($result_id->num_rows()>0)
        {
            return $result_id->result_array()[0]['id'];
        }
    }
    function getChapterId($index_no,$subject_id)
    {
        $query="select * from chapters where index_no=".$index_no." and sid=".$subject_id."";
        $result_id=$this->db->query($query);
        if($result_id->num_rows()>0)
        {
            return $result_id->result_array()[0]['id'];
        }
    }
    function getChapterName($chapterId)
    {
        $query="select name from chapters where id=".$chapterId."";
        $chapterName=  $this->db->query($query);
        if($chapterName->num_rows()>0)
        {
            return $chapterName->result_array()[0]['name'];
        }
    }
    function getIndexNo($id)
    {
        $query = "select index_no from chapters where sid=".$id."";
        $index_no=$this->db->query($query);
        if($index_no)
            return $index_no;
        else
            return -1;
        
    }
    function createSubject($data)
    {
        return $this->db->insert('chapters',$data);        
    }
    function createChapterContents($data)
    {
        return $this->db->insert('chapter_contents',$data);
    }
    function getChapterInfo($data)
    {
        $ch_names=array();
        foreach($data as $x)
        {
            $this->db->where("sid",$x);
            $chapterNames= $this->db->get("chapters");
            array_push($ch_names,$chapterNames->result_array());
        }
        return $ch_names;
    }
    function getChapterContents()//in case of where condition please provide cid and sid as an arguments
    {
//        $query="select * from chapter_contents where sid=".$sid." and cid=".$cid."";
//        $content_details=$this->db->query($query);
//        return $content_details;
        
          //getting all data
          $query="select * from chapter_contents";
          $content_details=$this->db->query($query);
          return $content_details;
    }
}
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>