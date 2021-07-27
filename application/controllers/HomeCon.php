<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCon extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        if (!$this->user()) {
            redirect(base_url('LoginCon'));
        }
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show home page. 
     */
    
    public function index(){
        $this->set_view('home/home_page','');
    }
}

