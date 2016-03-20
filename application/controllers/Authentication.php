<?php

class Authentication extends CI_Controller {

    function __constructor() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->view('header');
    }

    function index() {
        $this->load->view('header');
        return $this->load->view('index');
    }

    function login() {
        if (isset($_POST["usernamefield"]) && isset($_POST["passfield"])) {
            $email = $_POST["usernamefield"];
            $pass = $_POST["passfield"];
            if (strlen($pass) >= 6) {
                $this->load->model("user");
                $result = $this->user->login($email, $pass);

                if ($result) 
                {
                    if ($this->session->userdata('role') == 'admin') 
                    {
                        $this->session->set_flashdata('item', 'Login Successfull');
                        $this->load->view('header');
                        return $this->load->view('admin');
                    }
                    else if($this->session->userdata('role') == 'user' &&  $this->session->userdata('verified') == 1)
                    {
                        /**
                         *  if the user is verified
                         */
                        $this->session->set_flashdata('item', 'Login Successfull');
                        $this->load->view('header');
                        return $this->load->view('student_dashboard');
                    }
                    else
                    {
                        /**
                         * if the user is not verified yet
                         */
                        session_destroy();
                        $this->session->set_flashdata('item', 'Request Pending');
                        $this->load->view('header');
                        return $this->load->view('index');
                    }
                }
                else//if login failed
                {
                    $this->load->view('header');
                   // $this->session->set_flashdata('flashError', 'Login Error!!');
                    return $this->load->view('index');
                    
                }
            }
        }
        else//check session is already set or not
        {            
            if(isset($this->session->userdata))
            {
                $this->load->view('header');
                if($this->session->userdata('role')=='admin')
                    { 
                        return $this->load->view('admin'); 

                    }
                    elseif ($this->session->userdata('role')=='user')
                    {
                        return $this->load->view('student_dashboard');
                    }                    
            }
            $this->session->set_flashdata('item', 'Need to Login first');
            redirect(base_url());
        }
    }

    public function logout() {
        session_destroy();
        $this->session->set_flashdata('item', 'Logout successfull.');
        redirect(base_url());
    }

    public function registration() {
        $this->load->model('user');
        $result = $this->user->userRegistration($_POST);
        if ($result) {
            $this->login($_POST['email_id'], $_POST['password']);
        } else {
            return $this->load->view('contact');
        }
    }

    function getSubjects() {

        $this->load->model("SubjectHandling");
        $result = $this->SubjectHandling->getSubInfo(); //subject information
        $data = array();
        foreach ($result->result_array() as $x) {
            array_push($data, $x['id']);
        }

        $this->load->model("SubjectHandling");
        $chapterNames = $this->SubjectHandling->getChapterInfo($data); //chapter information
        print_r($chapterNames);
        for ($i = 0; $i < 2; $i++) {
            echo $result->result_array()[$i]['name'] . "<br>";
            for ($j = 0; $j < count($result->result_array()); $j++) {
                echo $chapterNames[$i][$j]['name'];
            }
        }
    }

}

?>