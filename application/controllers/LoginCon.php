<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCon extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library('bcrypt');
        $this->load->model('LoginModel');
        $this->load->library('session');
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show login page. 
     */
    
    public function index(){
	if (!$this->user()) {
            $this->load->view('login/login');
        }else{
            redirect(base_url('HomeCon')); 
        }
        
    }
    
    public function login() {

        $error = array();


        $post = $this->input->post();
        if ($post) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');


            $this->data['username'] = "";
            $this->data['username'] = $username;

            if (!empty($username)) {
                if (!empty($password)) {
                    $user = $this->LoginModel->get(array('id_no' => $username))->row();;
                    if ($user) {
                        if ($this->bcrypt->check_password($password, $user->password)) {
                            $this->session->set_userdata('user_logged', $user->id);
                            redirect(base_url('HomeCon'));                           
                        } else {
                            $error['incorrect'] = "Incorrect password.";
                        }
                    } else {
                        $error['incorrect'] = "Incorrect username.";
                    }
                } else {
                    $error['username'] = "Please enter password";
                }
            } else {
                $error['username'] = "Please enter ID No";
            }
            $this->data['message_data'] = $error;

            $this->load->view('login/login', $this->data);
        }
    }
    
    public function logout() {
        $this->session->unset_userdata('user_logged');
        redirect(base_url());
    }
}

