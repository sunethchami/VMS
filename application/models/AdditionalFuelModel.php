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
    
    public function getRecord($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('additional_fuel_tb');
        return $query->row();
    }
    
    public function updateRecordData($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('additional_fuel_tb',$data);
    }
    
     public function getRecordArray($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('additional_fuel_tb');
        return $query->result_array(); 
    }
    
    public function deleteRecordData($id){
        $this->db->where('id', $id);
        return $query = $this->db->delete('additional_fuel_tb');        
    }

}

