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

                $data = array(
                    'index_no' => $index_no,
                    'vehicle_number' => $vehicle_number,
                    'month' => $month,
                    'value' => $value,
                    'application_received_date' => $application_received_date,
                    'shortcomings' => $shortcomings,
                    'revised_application_resend_date' => 
                        $revised_application_resend_date,
                    'date_application_send_approval' => $date_application_send_approval,
                    'date_receiving_approval' => $date_receiving_approval,
                    'date_sending_approval' => $date_sending_approval,
                    'other_details' => $other_details
                );

                $result = $this->AdditionalFuelModel->setNewRecords($data);

                $this->session->set_flashdata('message', '1');
                redirect('AdditionalFuelCon/showAddNewRecordPage');
            
        } else {
            redirect('AdditionalFuelCon/showAddNewRecordPage');
        }
    }

}
