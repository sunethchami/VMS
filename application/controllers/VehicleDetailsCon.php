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
        //var_dump($this->input->post());
        //exit();
        $owner = $this->input->post('owner');
        $vehicle_number = $this->input->post('vehicle_number');
        $model = $this->input->post('model');
        $vehicle_type = $this->input->post('vehicle_type');
        $use_status = $this->input->post('use_status');
        $expense = $this->input->post('expense');
        $location = $this->input->post('location');
        $type = $this->input->post('type');
        $running_status = $this->input->post('running_status');
        $other_details = $this->input->post('other_details');
        $officer_name = $this->input->post('officer_name');
        $designation = $this->input->post('designation');
        $workplace = $this->input->post('workplace');
        $grade = $this->input->post('grade');
        $status_designation = $this->input->post('status_designation');
        $monthly_fuel_allowance = $this->input->post('monthly_fuel_allowance');
        $monthly_fuel_intake = $this->input->post('monthly_fuel_intake');
        $other_note = $this->input->post('other_note');
        $file_number = $this->input->post('file_number');
        $director_division = $this->input->post('director_division');
        $sub_division = $this->input->post('sub_division');
        
        $data = array(
               'owner' => $owner,
               'vehicle_number' => $vehicle_number,
               'model' => $model,
               'vehicle_type' => $vehicle_type,
               'use_status' => $use_status,
               'expense' => $expense,
               'location' => $location,
               'type' => $type,
               'running_status' => $running_status,
               'other_details' => $other_details,
               'officer_name' => $officer_name,
               'designation' => $designation,
               'workplace' => $workplace,
               'grade' => $grade,
               'status_designation' => $status_designation,
               'monthly_fuel_allowance' => $monthly_fuel_allowance,
               'monthly_fuel_intake' => $monthly_fuel_intake,
               'other_note' => $other_note,
               'file_number' => $file_number,
               'director_division' => $director_division,
               'sub_division' => $sub_division
            );
        
            $result = $this->VehicleDetailsModel->setNewRecords($data);
            
            //$this->session->set_flashdata('message', '1');
            redirect('VehicleDetailsCon/showAddNewRecordPage');
    }
    
    
}

