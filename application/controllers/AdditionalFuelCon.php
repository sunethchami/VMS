<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdditionalFuelCon extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->user()) {
            redirect(base_url('LoginCon'));
        }
        $this->load->model('AdditionalFuelModel');
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

        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'fuel-add-show') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $this->data['message'] = $this->session->flashdata('message');
            $this->set_view('additional_fuel/add_new_record_page',$this->data);
        } else {
            echo "access denied";
        }
    }

    /**
     * author : Suneth Senanayake. 
     * index()
     * Save a new record.
     */
    public function setNewRecord() {

        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'fuel-add') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $index_no = trim($this->input->post('index_no'));
            $vehicle_number = trim($this->input->post('vehicle_number'));
            $month = trim($this->input->post('month'));
            $value = trim($this->input->post('value'));
            $application_received_date = trim($this->input
                            ->post('application_received_date'));
            $shortcomings = trim($this->input->post('shortcomings'));
            $revised_application_resend_date = trim($this->input
                            ->post('revised_application_resend_date'));
            $date_application_send_approval = trim($this->input
                            ->post('date_application_send_approval'));
            $date_receiving_approval = trim($this->input
                            ->post('date_receiving_approval'));
            $date_sending_approval = trim($this->input
                            ->post('date_sending_approval'));
            $other_details = trim($this->input->post('other_details'));

            if ($index_no != "" || $vehicle_number != "" || $month != "0" ||
                    $value != "" || $application_received_date != "" ||
                    $shortcomings != "" || $revised_application_resend_date != "" ||
                    $date_application_send_approval != "" ||
                    $date_receiving_approval != "" || $date_sending_approval != "" ||
                    $other_details != "") {
                
                

                $this->form_validation->set_rules('index_no',
                        'Index Number', 'numeric');
                $this->form_validation->set_rules('value',
                        'Value', 'numeric',array('numeric' => 
                        'The %s field must contain only price.'));
                $this->form_validation->set_rules('application_received_date',
                        'Application Received Date', 'datetime[Y-m-d]');
                $this->form_validation->set_rules('revised_application_resend_date',
                        'Revised Application Resend Date', 'datetime[Y-m-d]');
                $this->form_validation->set_rules('date_application_send_approval',
                        'Date of the application send for approval to A.D.G',
                        'datetime[Y-m-d]');
                $this->form_validation->set_rules('date_receiving_approval',
                        'Date of Receiving Approval by A.D.G', 'datetime[Y-m-d]');
                $this->form_validation->set_rules('date_sending_approval',
                        'Date of the application send for approval to A.D.G',
                        'datetime[Y-m-d]');

                if ($this->form_validation->run() == FALSE) {
                    $this->set_view('additional_fuel/add_new_record_page','');
                } else {
                    
                    date_default_timezone_set("Asia/Colombo");
                    $create_date = date('Y-m-d H:i:s'); 
                    
                    $data = array(
                        'index_no' => $index_no,
                        'vehicle_number' => $vehicle_number,
                        'month' => $month,
                        'value' => $value,
                        'application_received_date' => $application_received_date,
                        'shortcomings' => $shortcomings,
                        'revised_application_resend_date' =>
                        $revised_application_resend_date,
                        'date_application_send_approval' =>
                        $date_application_send_approval,
                        'date_receiving_approval' => $date_receiving_approval,
                        'date_sending_approval' => $date_sending_approval,
                        'other_details' => $other_details,
                        'create_by' => $this->user()->id,
                        'create_date' => $create_date
                    );

                    $result = $this->AdditionalFuelModel->setNewRecords($data);

                    $this->session->set_flashdata('message', '1');
                    redirect('AdditionalFuelCon/showAddNewRecordPage');
                }
            } else {
                redirect('AdditionalFuelCon/showAddNewRecordPage');
            }
        } else {
            echo "access denied";
        }
    }
    
       /**
     * author : Suneth Senanayake. 
     * showAllRecordsPage()
     * Show all records in table.
     **/
    
    public function showAllRecordsPage() {  
        
        $this->data['message'] = $this->session->flashdata('message');      
        $result = $this->AdditionalFuelModel->getAllRecords();
        $result = $this->getWithFullValue($result);
        $result = $this->getWithNullValue($result);
        $this->data['result'] = $result;
        $this->set_view('additional_fuel/view_all_records_page',$this->data);
        
    }
    
    private function getWithNullValue($result){
        
        foreach ($result as $key => $value) {
            
            $result[$key]['application_received_date'] == '0000-00-00' ? 
                $result[$key]['application_received_date'] = "" : "";
            $result[$key]['revised_application_resend_date'] == '0000-00-00' ? 
                $result[$key]['revised_application_resend_date'] = "" : "";
            $result[$key]['date_application_send_approval'] == '0000-00-00' ? 
                $result[$key]['date_application_send_approval'] = "" : "";
            $result[$key]['date_receiving_approval'] == '0000-00-00' ? 
                $result[$key]['date_receiving_approval'] = "" : "";
            $result[$key]['date_sending_approval'] == '0000-00-00' ? 
                $result[$key]['date_sending_approval'] = "" : "";
        }        
        return $result;   
    }
    
    private function getWithFullValue($result){
        
        foreach ($result as $key => $value) {
           
            $result[$key]['month'] == '0' ? $result[$key]['month'] = "" : "";
            $result[$key]['month'] == '1' ? $result[$key]['month'] 
                    = "January" : "";
            $result[$key]['month'] == '2' ? $result[$key]['month'] 
                    = "February" : "";
            $result[$key]['month'] == '3' ? $result[$key]['month'] 
                    = "March" : "";
            $result[$key]['month'] == '4' ? $result[$key]['month'] 
                    = "April" : "";
            $result[$key]['month'] == '5' ? $result[$key]['month'] 
                    = "May" : "";
            $result[$key]['month'] == '6' ? $result[$key]['month'] 
                    = "June" : "";
            $result[$key]['month'] == '7' ? $result[$key]['month'] 
                    = "July" : "";
            $result[$key]['month'] == '8' ? $result[$key]['month'] 
                    = "August" : "";
            $result[$key]['month'] == '9' ? $result[$key]['month'] 
                    = "September" : "";
            $result[$key]['month'] == '10' ? $result[$key]['month'] 
                    = "October" : "";
            $result[$key]['month'] == '11' ? $result[$key]['month'] 
                    = "November" : "";
            $result[$key]['month'] == '12' ? $result[$key]['month'] 
                    = "December" : "";
        }
        return $result;
    }
    
    /**
     * author : Suneth Senanayake. 
     * editReacord()
     * show edit page for selected vehicle.
     */
    
    public function editRecord() {
        
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'fuel-edit') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $id = $this->uri->segment(3);
            $results = $this->AdditionalFuelModel->getRecord($id);
            
            
            if($results->application_received_date == '0000-00-00'){
                $results->application_received_date = "";
            }
            
            if($results->revised_application_resend_date == '0000-00-00'){
                $results->revised_application_resend_date = "";
            }
            
            if($results->date_application_send_approval == '0000-00-00'){
                $results->date_application_send_approval = "";
            }
            
            if($results->date_receiving_approval == '0000-00-00'){
                $results->date_receiving_approval = "";
            }
            
            if($results->date_sending_approval == '0000-00-00'){
                $results->date_sending_approval = "";
            }
            
            $this->data['result'] = $results;
            
            $this->set_view('additional_fuel/edit_record_page',$this->data);
        } else {
            echo "access denied";
        }
    }
    
     /**
     * author : Suneth Senanayake. 
     * updateReacord()
     * Update record of selected id.
     */
    
    public function updateRecord() {
        
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'fuel-edit') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $index_no = trim($this->input->post('index_no'));
            $vehicle_number = trim($this->input->post('vehicle_number'));
            $month = trim($this->input->post('month'));
            $value = trim($this->input->post('value'));
            $application_received_date = trim($this->input
                            ->post('application_received_date'));
            $shortcomings = trim($this->input->post('shortcomings'));
            $revised_application_resend_date = trim($this->input
                            ->post('revised_application_resend_date'));
            $date_application_send_approval = trim($this->input
                            ->post('date_application_send_approval'));
            $date_receiving_approval = trim($this->input
                            ->post('date_receiving_approval'));
            $date_sending_approval = trim($this->input
                            ->post('date_sending_approval'));
            $other_details = trim($this->input->post('other_details'));
            $this->data['id'] = $this->input->post('id');
            
            $this->form_validation->set_rules('index_no',
                        'Index Number', 'numeric');
            
            $this->form_validation->set_rules('value',
                    'Value', 'numeric',array('numeric' => 
                    'The %s field must contain only price.'));

            $this->form_validation->set_rules('application_received_date',
                    'Application Received Date', 'datetime[Y-m-d]');
            $this->form_validation->set_rules('revised_application_resend_date',
                    'Revised Application Resend Date', 'datetime[Y-m-d]');
            $this->form_validation->set_rules('date_application_send_approval',
                    'Date of the application send for approval to A.D.G',
                    'datetime[Y-m-d]');
            $this->form_validation->set_rules('date_receiving_approval',
                    'Date of Receiving Approval by A.D.G', 'datetime[Y-m-d]');
            $this->form_validation->set_rules('date_sending_approval',
                    'Date of the application send for approval to A.D.G',
                    'datetime[Y-m-d]');

            if ($this->form_validation->run() == FALSE) {
                $this->set_view('additional_fuel/edit_record_page',$this->data);
            } else {
                
                date_default_timezone_set("Asia/Colombo");
                $update_date = date('Y-m-d H:i:s');
                    
                $data = array(
                    'index_no' => $index_no,
                    'vehicle_number' => $vehicle_number,
                    'month' => $month,
                    'value' => $value,
                    'application_received_date' => $application_received_date,
                    'shortcomings' => $shortcomings,
                    'revised_application_resend_date' =>
                    $revised_application_resend_date,
                    'date_application_send_approval' =>
                    $date_application_send_approval,
                    'date_receiving_approval' => $date_receiving_approval,
                    'date_sending_approval' => $date_sending_approval,
                    'other_details' => $other_details,
                    'update_by' => $this->user()->id,
                    'update_date' => $update_date
                );

                $result = $this->AdditionalFuelModel
                        ->updateRecordData($this->data['id'], $data);


                $this->session->set_flashdata('message', '1');
                redirect('AdditionalFuelCon/showAllRecordsPage');
            }
        } else {
            echo "access denied";
        }
    }
    
    /**
     * author : Suneth Senanayake. 
     * displayDetails()
     * View details in a table for selected fuel.
     */
    
    public function displayDetails() {
        
        $id= $this->uri->segment(3);
        $result = $this->AdditionalFuelModel->getRecordArray($id); 
        $this->data['result'] = $this->getWithFullValue($result);
        $this->set_view('additional_fuel/more_details_page',$this->data);
        
    }
    
    /**
     * author : Suneth Senanayake. 
     * deleteRacord()
     * Delete record from db for selected fuel.
     */
    
    public function deleteRecord() {

        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'fuel-delete') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $id = $this->uri->segment(3);

            $result = $this->AdditionalFuelModel->deleteRecordData($id);
            if ($result == 1) {
                $this->session->set_flashdata('message', '2');
                redirect('AdditionalFuelCon/showAllRecordsPage');
            } else {
                echo "Database error!";
            }
        } else {
            echo "access denied";
        }
    }

}
