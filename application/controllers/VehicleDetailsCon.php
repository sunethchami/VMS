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
        $monthly_fuel_allowance = trim($this->input
                ->post('monthly_fuel_allowance'));
        $monthly_fuel_intake = trim($this->input->post('monthly_fuel_intake'));
        $other_note = trim($this->input->post('other_note'));
        $file_number = trim($this->input->post('file_number'));
        $file_no_book_no = trim($this->input->post('file_no_book_no'));
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
                'file_no_book_no' => $file_no_book_no,
                'director_division' => $director_division,
                'sub_division' => $sub_division
            );

            $result = $this->VehicleDetailsModel->setNewRecords($data); 
            
            $this->session->set_flashdata('message', '1');
            redirect('VehicleDetailsCon/showAddNewRecordPage');
        }
        
    }
    
    /**
     * author : Suneth Senanayake. 
     * showAllRecordsPage()
     * Show all records in table.
     **/
    
    public function showAllRecordsPage() {        
        $this->data['message'] = $this->session->flashdata('message');
        $result = $this->VehicleDetailsModel->getAllRecords();
        $result = $this->getVahicleDetailsWithFullValue($result);       
        $this->data['result'] = $result;
        $this->load->view('vehicle_details/view_all_records_page',$this->data);
    }
    
    private function getVahicleDetailsWithFullValue($result){
        
        foreach ($result as $key => $value) {
           
            ($result[$key]['model'] == '0') ? $result[$key]['model'] = "" : "";
            ($result[$key]['model'] == '1') ? $result[$key]['model'] 
                    = "Bus" : "";
            ($result[$key]['model'] == '2') ? $result[$key]['model'] 
                    = "Car" : "";
            ($result[$key]['model'] == '3') ? $result[$key]['model'] 
                    = "Commercial" : "";
            ($result[$key]['model'] == '4') ? $result[$key]['model'] 
                    = "Double cab" : "";
            ($result[$key]['model'] == '5') ? $result[$key]['model'] 
                    = "Dual purpose" : "";
            ($result[$key]['model'] == '6') ? $result[$key]['model'] 
                    = "Hand tractor" : "";
            ($result[$key]['model'] == '7') ? $result[$key]['model'] 
                    = "Jeep & Sport utility vehicle" : "";
            ($result[$key]['model'] == '8') ? $result[$key]['model'] 
                    = "Land vehicle" : "";
            ($result[$key]['model'] == '9') ? $result[$key]['model'] 
                    = "Motor coach" : "";
            ($result[$key]['model'] == '10') ? $result[$key]['model'] 
                    = "Motor cycle" : "";
            ($result[$key]['model'] == '11') ? $result[$key]['model'] 
                    = "Motor lorry" : "";
            ($result[$key]['model'] == '12') ? $result[$key]['model'] 
                    = "Motor tricycle van" : "";
            ($result[$key]['model'] == '13') ? $result[$key]['model'] 
                    = "Single cab" : "";
            ($result[$key]['model'] == '14') ? $result[$key]['model']
                    = "Special purpose vehicle" : "";
            ($result[$key]['model'] == '15') ? $result[$key]['model'] 
                    = "Three wheeler" : "";
            ($result[$key]['model'] == '16') ? $result[$key]['model'] 
                    = "Tractor" : "";
            ($result[$key]['model'] == '17') ? $result[$key]['model'] 
                    = "Tractor trailer/bowser" : "";
            ($result[$key]['model'] == '18') ? $result[$key]['model'] 
                    = "Van" : "";
            ($result[$key]['model'] == '19') ? $result[$key]['model'] 
                    = "Other vehicle" : "";
            ($result[$key]['use_status'] == '0') ? $result[$key]['use_status'] 
                    = "" : "";
            ($result[$key]['use_status'] == '1') ? $result[$key]['use_status'] 
                    = "Assigned" : "";
            ($result[$key]['use_status'] == '2') ? $result[$key]['use_status'] 
                    = "Commercial Purposes" : "";
            ($result[$key]['use_status'] == '3') ? $result[$key]['use_status'] 
                    = "Non Commercial Transport" : "";
            ($result[$key]['use_status'] == '4') ? $result[$key]['use_status']
                    = "Pool" : "";
            ($result[$key]['use_status'] == '5') ? $result[$key]['use_status'] 
                    = "Public Transport" : "";
            ($result[$key]['use_status'] == '6') ? $result[$key]['use_status'] 
                    = "Other" : "";
            ($result[$key]['type'] == '0') ? $result[$key]['type'] = "" : "";
            ($result[$key]['type'] == '1') ? $result[$key]['type'] 
                    = "6112101 - Passenger Vehicles" : "";
            ($result[$key]['type'] == '2') ? $result[$key]['type'] 
                    = "6112102- Tractor Trailer" : "";
            ($result[$key]['type'] == '3') ? $result[$key]['type'] 
                    = "6112102 - Cargo Vehicles" : "";
            ($result[$key]['type'] == '4') ? $result[$key]['type'] 
                    = "6112103 - Tractors" : "";
            ($result[$key]['type'] == '5') ? $result[$key]['type'] 
                    = "6112103 - Agriculture Vehicles" : "";
            ($result[$key]['type'] == '6') ? $result[$key]['type'] 
                    = "6112104 - Industrial Vehicles" : "";
            ($result[$key]['type'] == '7') ? $result[$key]['type'] 
                    = "6112109 - Motor Cycles" : "";
            ($result[$key]['type'] == '8') ? $result[$key]['type'] 
                    = "66112109 - Bicycles" : "";
            ($result[$key]['type'] == '9') ? $result[$key]['type'] 
                    = "6112110 - Trailers" : "";            
            ($result[$key]['type'] == '10') ? $result[$key]['type'] 
                    = "land vehicle" : ""; 
            ($result[$key]['type'] == '11') ? $result[$key]['type'] 
                    = "6112111 - Other (not specified above)" : "";
            ($result[$key]['running_status'] == '0') 
                ? $result[$key]['running_status'] = "" : "";
            ($result[$key]['running_status'] == '1') 
                ? $result[$key]['running_status'] = "Running" : "";
            ($result[$key]['running_status'] == '2') 
                ? $result[$key]['running_status'] = "Not Running" : "";
            ($result[$key]['running_status'] == '3') 
                ? $result[$key]['running_status'] = "Under Repair" : "";
            ($result[$key]['running_status'] == '4') 
                ? $result[$key]['running_status'] = "Tender" : "";
            ($result[$key]['grade'] == '0') ? $result[$key]['grade'] 
                    = "" : "";
            ($result[$key]['grade'] == '1') ? $result[$key]['grade']
                    = "Special" : "";
            ($result[$key]['grade'] == '2') ? $result[$key]['grade'] 
                    = "Grade 1" : "";
            ($result[$key]['status_designation'] == '0') 
                ? $result[$key]['status_designation'] = "" : "";
            ($result[$key]['status_designation'] == '1') 
                ? $result[$key]['status_designation'] = "Permanent" : "";
            ($result[$key]['status_designation'] == '2') 
                ? $result[$key]['status_designation'] = "Acting" : 
            ($result[$key]['status_designation'] == '3') 
                ? $result[$key]['status_designation'] = 
                    "Performing Duties" : "";  
            ($result[$key]['status_designation'] == '4') 
                ? $result[$key]['status_designation'] = "Duty Cover" : "";
            ($result[$key]['monthly_fuel_allowance'] == '0') 
                ? $result[$key]['monthly_fuel_allowance'] = "" : "";
            ($result[$key]['monthly_fuel_allowance'] == '1') 
                ? $result[$key]['monthly_fuel_allowance'] = "Yes" : "";
            ($result[$key]['monthly_fuel_allowance'] == '2') 
                ? $result[$key]['monthly_fuel_allowance'] = "No" : "";
            ($result[$key]['monthly_fuel_intake'] == '0') 
                ? $result[$key]['monthly_fuel_intake'] = "" : "";
        }
        return $result;
    }
    
    
    /**
     * author : Suneth Senanayake. 
     * editReacord()
     * show edit page for selected vehicle.
     */
    
    public function editRecord() {
        
        $vehicle_no = utf8_decode(urldecode($this->uri->segment(3)));
        
        $this->data['result'] = $this->VehicleDetailsModel
            ->getRecord($vehicle_no);
        //var_dump($this->data['result']);
        $this->load->view('vehicle_details/edit_record_page', $this->data);
    }
    
     /**
     * author : Suneth Senanayake. 
     * updateReacord()
     * Update record of selected vehicle.
     */
    
    public function updateRecord() {
        
        $owner = trim($this->input->post('owner'));
        $vehicle_number_old = trim($this->input->post('vehicle_number_old'));
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
        $monthly_fuel_allowance 
                = trim($this->input->post('monthly_fuel_allowance'));
        $monthly_fuel_intake = trim($this->input->post('monthly_fuel_intake'));
        $other_note = trim($this->input->post('other_note'));
        $file_number = trim($this->input->post('file_number'));
        $file_no_book_no = trim($this->input->post('file_no_book_no'));
        $director_division = trim($this->input->post('director_division'));
        $sub_division = trim($this->input->post('sub_division'));
        
        $this->data['vehicle_number_old'] = $vehicle_number_old;
        
        if($vehicle_number == ''){
            $this->form_validation->set_rules('vehicle_number','Vehicle Number',
            'required');
        } else {
        
            if($vehicle_number != $vehicle_number_old ){
                $this->form_validation->set_rules('vehicle_number', 
                    'Vehicle Number',
                    'is_unique[vehicle_details_tb.vehicle_number]',
                array('is_unique' => 'This %s already exist.')); 
            }else{
                $this->form_validation->set_rules('vehicle_number',
                        'Vehicle Number','required');
            }
        }
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('vehicle_details/edit_record_page', $this->data );
        }else{
            
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
                'file_no_book_no' => $file_no_book_no,
                'director_division' => $director_division,
                'sub_division' => $sub_division
            );
            
            $result = $this->VehicleDetailsModel
                    ->updateRecordData($vehicle_number_old,$data);
            
            
            $this->session->set_flashdata('message', '1');
            redirect('VehicleDetailsCon/showAllRecordsPage');  
                      
        } 
    }
    
    /**
     * author : Suneth Senanayake. 
     * moreDetails()
     * View more details for selected vehicle.
     */
    
    public function displayDetails() {
        
        $vehicleNumber = $this->uri->segment(3);
        $result = $this->VehicleDetailsModel
                ->getRecordArray($vehicleNumber); 
        $this->data['result'] = $this->getVahicleDetailsWithFullValue($result);
        $this->load->view('vehicle_details/more_details_page', $this->data);
        
    }
    
    /**
     * author : Suneth Senanayake. 
     * deleteRacord()
     * Delete record from db for selected vehicle.
     */
    
    public function deleteRecord() {
        
       $vehicle_no = utf8_decode(urldecode($this->uri->segment(3)));
        
        $result = $this->VehicleDetailsModel->deleteRecordData($vehicle_no);
        if ($result == 1) {
            $this->session->set_flashdata('message', '2'); 
            redirect('VehicleDetailsCon/showAllRecordsPage');                        
        } else {
            echo "Database error!";
        }
    } 
    
    public function showImportVehicleDetailsPage() {
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('import/vehicle_details_page',$this->data);
    }
    
    
    
}

