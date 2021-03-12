<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehicleDetailsCon extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('VehicleDetailsModel');
        $this->load->helper(array('url'));
//        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
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
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('vehicle_details/add_new_record_page',$this->data);
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Save new record.
     */
    
    public function setNewRecord() {
        //var_dump($this->input->post());
        //exit();
        $owner = trim($this->input->post('owner'));
        $vehicle_number = trim($this->input->post('vehicle_number'));
        $model = trim($this->input->post('model'));
        $brand = trim($this->input->post('brand'));
        $use_status = trim($this->input->post('use_status'));
        $expense = trim($this->input->post('expense'));
        $location = trim($this->input->post('location'));
        $type = trim($this->input->post('type'));
        $running_status = trim($this->input->post('running_status'));
        $other_details = trim($this->input->post('other_details'));
        $officer_name = trim($this->input->post('officer_name'));
        $designation = trim($this->input->post('designation'));
        $workplace = trim($this->input->post('workplace'));
        $grade = trim($this->input->post('grade'));
        $status_designation = trim($this->input->post('status_designation'));
        $monthly_fuel_allowance = trim($this->input->post('monthly_fuel_allowance'));
        $monthly_fuel_intake = trim($this->input->post('monthly_fuel_intake'));
        $other_note = trim($this->input->post('other_note'));
        $file_number = trim($this->input->post('file_number'));
        $director_division = trim($this->input->post('director_division'));
        $sub_division = trim($this->input->post('sub_division'));
        
        $this->form_validation->set_rules('vehicle_number', 'Vehicle Number',
            'trim|required|is_unique[vehicle_details_tb.vehicle_number]',
                array('is_unique' => 'This %s already exist.'));
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vehicle_details/add_new_record_page');
        } else {
            $data = array(
                'owner' => $owner,
                'vehicle_number' => $vehicle_number,
                'model' => $model,
                'brand' => $brand,
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
            
            $this->session->set_flashdata('message', '1');
            redirect('VehicleDetailsCon/showAddNewRecordPage');
        }
        
    }
    
    public function showAllRecordsPage() {
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('vehicle_details/view_all_records_page',$this->data);
    }
    
    
}

