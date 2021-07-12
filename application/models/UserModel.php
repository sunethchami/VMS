<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function setNewRecords($data){
        $this->db->insert('users_tb', $data);
        $insert_id = $this->db->insert_id();        
        return  $insert_id;
    }
    
    public function setUserPermission($data){
        return $this->db->insert('user_permission_tb', $data);        
    }
    
    public function getAllRecords(){
        $this->db->select('id,first_name,last_name,id_no,phone_no,email');
        $query = $this->db->get('users_tb');
        return $query->result_array(); 
    }
    
    public function getUserType($user_id){
        $query = $this->db->select('t2.user_type,t2.group_name')
                ->from('user_permission_tb as t1')
                ->join('permission_group_tb as t2', 't1.group_id = t2.id', 'INNER')
                ->where('t1.user_id', $user_id)
                ->get();

        return $query->row();
    }
    
    public function getRecord($id){
        $this->db->select('id,first_name,last_name,id_no,phone_no,email');
        $this->db->where('id',$id);
        $query = $this->db->get('users_tb');
        return $query->row();
    }
    
    public function updateRecordData($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('users_tb',$data);
    }
    
    public function updateUserPermission($data,$user_id){
        $this->db->where('user_id',$user_id);
        return $this->db->update('user_permission_tb',$data);
    }
    
    public function getGroupId($user_type) {
        $this->db->select('*');
        $this->db->where('user_type',$user_type);
        $query = $this->db->get('permission_group_tb');
        return $query->row(); 
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

