<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCon extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->library('bcrypt');
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Show user add new record page. 
     */
    public function showAddNewRecordPage() {

        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'user-add-show') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $this->data['message'] = $this->session->flashdata('message');
            $this->set_view('user/add_new_record_page',$this->data);
        } else {
            echo "access denied";
        }
    }
    
    /**
     * author : Suneth Senanayake. 
     * index()
     * Save a new user record.
     */
    public function setNewRecord() {

        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'user-add') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $first_name = trim($this->input->post('first_name'));
            $last_name = trim($this->input->post('last_name'));
            $id_no = trim($this->input->post('id_no'));
            $user_role = trim($this->input->post('user_role'));
            $phone_no = trim($this->input->post('phone_no'));
            $email = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));

            $this->form_validation->set_rules('id_no','ID No',
                'required|is_unique[users_tb.id_no]',
                array('is_unique' => 'This %s already exist.'));
            $this->form_validation->set_rules('user_role','User Role',
                'required');
            $this->form_validation->set_rules('password','Password','required');

            if ($this->form_validation->run() == FALSE) {
                $this->set_view('user/add_new_record_page','');
            } else {

                $hash = $this->bcrypt->hash_password($password);
                $data = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'id_no' => $id_no,
                    'phone_no' => $phone_no,
                    'email' => $email,
                    'password' => $hash
                );

                $user_id = $this->UserModel->setNewRecords($data);
                $this->UserModel->setUserPermission(array('user_id' => $user_id,
                    'group_id'=> $user_role));

                $this->session->set_flashdata('message', '1');
                redirect('UserCon/showAddNewRecordPage');
            }
        } else {
            echo "access denied";
        }
    }

}

