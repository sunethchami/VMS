<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehicleDetailsModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function setNewRecords($data){
        return $this->db->insert('vehicle_details_tb', $data);
    }
    
    public function getAllRecords(){
        $this->db->select('*');
        $query = $this->db->get('vehicle_details_tb');
        return $query->result_array(); 
    }
}

