<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehicleDetailsCon extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('VehicleDetailsModel');
        $this->load->helper(array('url'));
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//        $this->load->library('session');
//        $this->load->database();

    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show all records page. 
     */
    
    public function index(){
	//$this->load->view('welcome_message');
	//$this->load->view('dashboard_page');                
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show add new record page. 
     */
    
    public function showAddNewRecordPage() {
        $this->load->view('vehicle_details/add_new_record_page');
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Save new record.
     */
    
    public function setNewRecord() {
        var_dump($this->input->post());
        
        $owner = $this->input->post('owner');
        $vehicle_number = $this->input->post('vehicle_number');
        $model = $this->input->post('model');
        $use_status = $this->input->post('use_status');
        $expense = $this->input->post('expense');
        $location = $this->input->post('location');
        $type = $this->input->post('type');
        $running_status = $this->input->post('running_status');
        $other_details = $this->input->post('other_details');
        
        $data = array(
               'owner' => $owner,
               'vehicle_number' => $vehicle_number,
               'model' => $model,
               'use_status' => $use_status,
               'expense' => $expense,
               'location' => $location,
               'type' => $type,
               'running_status' => $running_status,
               'other_details' => $other_details
            );
        
            $result = $this->VehicleDetailsModel->setNewRecords($data);
            
            //$this->session->set_flashdata('message', '1');
            redirect('VehicleDetailsCon/showAddNewRecordPage');
    }
    
    
}

