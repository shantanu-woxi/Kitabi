<?php



class ReadingFiles extends CI_Controller
{
    function readingFile()
    {
        $this->load->helper('file');
        $data=  read_file("/home/laxdeep/my.txt");
        echo $data;
    }
    function index()
    {
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

