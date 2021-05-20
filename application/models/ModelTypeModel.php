<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTypeModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllTypes(){
        $this->db->select('*');
        $query = $this->db->get('model_list_tb');
        return $query->result_array(); 
    }
    
    public function getRecord($model_name){
        $this->db->select('*');
        $this->db->where('name',$model_name);
        $query = $this->db->get('model_list_tb');
        return $query->row();
    }
    
    public function getRecordById($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('model_list_tb');
        return $query->row();
    }
    
    public function setNewRecord($data){
        $this->db->insert('model_list_tb', $data);
        $insert_id = $this->db->insert_id();
        
        return  $insert_id;
    }

}

