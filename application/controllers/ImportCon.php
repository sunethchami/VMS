<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportCon extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('ImportModel');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('excel');
    }
    
    public function importVehicleDetails() {
        
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $owner = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $vehicle_number = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $model = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $use_status = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $expense = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $location = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $type = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $running_status = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $other_details = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $data[] = array(
                        'owner' => $owner,
                        'vehicle_number' => $vehicle_number,
                        'model' => $model,
                        'use_status' => $use_status,
                        'expense' => $expense,
                        'location' => $location,
                        'type' => $type,
                        'running_status' => $running_status,
                        'other_details' => $other_details,
                    );
                }
            }
            //var_dump($data);
            $this->ImportModel->setVehicleData($data);
            echo 'Data Imported successfully';
        }
    }

}
