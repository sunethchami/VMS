<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdditionalFuelCon extends CI_Controller {

    public function __construct() {
        parent::__construct();
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

        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('templates/header');
        $this->load->view('additional_fuel/add_new_record_page', $this->data);
        $this->load->view('templates/footer');
    }

    /**
     * author : Suneth Senanayake. 
     * index()
     * Save a new record.
     */
    public function setNewRecord() {

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

            $this->form_validation->set_rules('reg[application_received_date]',
                'Application Received Date', 
                'regex_match[/^\d{4}[\/.]\d{1,2}[\/.]\d{1,2}$]/'); 

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('AdditionalFuelCon/add_new_record_page');
            } else {
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
                    'other_details' => $other_details
                );

                $result = $this->AdditionalFuelModel->setNewRecords($data);

                $this->session->set_flashdata('message', '1');
                redirect('AdditionalFuelCon/showAddNewRecordPage');
            }
        } else {
            redirect('AdditionalFuelCon/showAddNewRecordPage');
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
        $this->data['result'] = $result;       
        $this->load->view('templates/header');
        $this->load->view('additional_fuel/view_all_records_page',$this->data);
        $this->load->view('templates/footer');
        
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

}
