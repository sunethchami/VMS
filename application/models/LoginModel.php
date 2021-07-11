<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    private $table_name;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($where = array()) {
        if(!empty($where)){
        $this->db->where($where);
        }
        return $this->db->get('users_tb');
    }

    public function get_user_type($where = array()) {
        if(!empty($where)){
        $this->db->where($where);
        }
        return $this->db->get('user_permission_tb');
    }
    
    public function get_permission_list($user_id){
        $query = $this->db->select('t1.user_id,t2.permission,t3.user_type')
                ->from('user_permission_tb as t1')
                ->join('permission_tb as t2', 't1.group_id = t2.group_id', 'INNER')
                ->join('permission_group_tb as t3', 't2.group_id = t3.id', 'INNER')
                ->where('t1.user_id', $user_id)
                ->get();

        return $query->result();
    }

}
