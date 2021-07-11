<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCon extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        if (!$this->user()) {
            redirect(base_url('LoginCon'));
        }
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show dashboard page. 
     */
    
    public function index(){
	 
//        $this->data['this_user'] = $this->user();
//        $this->data['user_type'] = $this->user_type()->group_id;
//        $this->load->view('templates/header',$this->data);
//        $this->load->view('dashboard_page'); 
//        $this->load->view('templates/footer');
        $this->set_view('dashboard_page','');
    }
}

