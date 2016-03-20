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
                if ($result) {
                    if ($this->session->userdata('role') == 'admin') {
                        $this->session->set_flashdata('item', 'Login Successful');
                        //my new code
                        $this->load->model("user");
                        $result1 = $this->user->getUsers();
                        if($result1)
                        {
                            //print_r($result->result_array());
                            //$this->load->view('header');
                            $data['user_list']=$result1->result_array();
                            //return $this->load->view('userVerification',$data);
                        }
                        else
                        {
                            $data['user_list']=null;
                        }
                        //finish
                        $this->load->view('header');
                        return $this->load->view('admin',$data);
                    }
                    $this->session->set_flashdata('item', 'Login Successful');
                    $this->load->view('header');
                    return $this->load->view('student_dashboard');
                }
                 $this->session->set_flashdata('item', 'Wrong Username Or Password');
                 redirect(base_url());
            }
        } else {
            
            if (!empty($this->session->userdata('role')) && $this->session->userdata('role')!='') {
               $this->load->view('header');
               if ($this->session->userdata('role') == 'admin') {
                   //my new code
                        $this->load->model("user");
                        $result1 = $this->user->getUsers();
                        if($result1)
                        {
                            //print_r($result->result_array());
                            //$this->load->view('header');
                            $data['user_list']=$result1->result_array();
                            //return $this->load->view('userVerification',$data);
                        }
                        else
                        {
                            $data['user_list']=null;
                        }
                        //finish
                        return $this->load->view('admin',$data);
                    }
                    return $this->load->view('student_dashboard');
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