<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdditionalFuelCon extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('VehicleDetailsModel');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->load->library('session');

    }    
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show add new record page. 
     */
    
    public function showAddNewRecordPage() {
        
        $this->data['message'] = $this->session->flashdata('message');        
        $this->load->view('templates/header');
        $this->load->view('additional_fuel/add_new_record_page',$this->data); 
        $this->load->view('templates/footer');
    }
}