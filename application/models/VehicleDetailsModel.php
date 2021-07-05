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
    
    public function getRecord($id){
        //$where = "LOWER(REPLACE(vehicle_number, ' ', '')) = LOWER(REPLACE('".$vehicle_no."', ' ', ''))";
        $this->db->select('*');
        $this->db->where('id',$id);
        //$this->db->where($where);
        $query = $this->db->get('vehicle_details_tb');
        return $query->row();
    }
    
    public function getRecordByVehicleNo($vehicle_number){
        $this->db->select('*');
        $this->db->where('vehicle_number',$vehicle_number);
        $query = $this->db->get('vehicle_details_tb');
        return $query->row();
    }
    
    
    
    public function updateRecordData($vehicle_number,$data){
        $this->db->where('vehicle_number',$vehicle_number);
        return $this->db->update('vehicle_details_tb',$data);
    }
    
    public function getRecordArray($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('vehicle_details_tb');
        return $query->result_array(); 
    }
    
    public function deleteRecordData($id){
        $this->db->where('id', $id);
        return $query = $this->db->delete('vehicle_details_tb');        
    }
    
    public function deleteAllRecords() {
        $this->db->empty_table('vehicle_details_tb');
    }
}

