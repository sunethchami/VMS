<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

   function setVehicleData($data) {
        $this->db->insert_batch('vehicle_details_tb', $data);
    }

}

