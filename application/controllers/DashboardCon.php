<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCon extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
//        $this->load->model('StudentDetailsModel');
        $this->load->helper(array('url'));
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//        $this->load->library('session');
//        $this->load->database();

    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show dashboard page. 
     */
    
    public function index(){
	 
        $this->load->view('templates/header');
        $this->load->view('dashboard_page'); 
        $this->load->view('templates/footer');
    }
}

