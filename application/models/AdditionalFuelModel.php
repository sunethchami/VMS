<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdditionalFuelModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function setNewRecords($data){
        return $this->db->insert('additional_fuel_tb', $data);
    }
    
    public function getAllRecords(){
        $this->db->select('*');
        $query = $this->db->get('additional_fuel_tb');
        return $query->result_array(); 
    }

}

