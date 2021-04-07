<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportCon extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('ImportModel');
        $this->load->model('VehicleDetailsModel');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('excel');
    }
    
    public function showImportVehicleDetailsPage() {
        $this->load->view('import/vehicle_details_page');
    }
    
    public function importVehicleDetails() {
        
        if (isset($_FILES["file"]["name"])) {
            
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            
            foreach ($object->getWorksheetIterator() as $worksheet) {
                
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                
                for ($row = 2; $row <= $highestRow; $row++) {
                    $owner = $worksheet->getCellByColumnAndRow(0, $row)
                        ->getValue();
                    $vehicle_number = $worksheet->getCellByColumnAndRow(1, $row)
                        ->getValue();
                    $model = $worksheet->getCellByColumnAndRow(2, $row)
                        ->getValue();                   
                    $use_status = $worksheet->getCellByColumnAndRow(3, $row)
                        ->getValue();
                    $expense = $worksheet->getCellByColumnAndRow(4, $row)
                        ->getValue();
                    $location = $worksheet->getCellByColumnAndRow(5, $row)
                        ->getValue();
                    $type = $worksheet->getCellByColumnAndRow(6, $row)
                        ->getValue();
                    $running_status = $worksheet->getCellByColumnAndRow(7, $row)
                        ->getValue();
                    $other_details = $worksheet->getCellByColumnAndRow(8, $row)
                        ->getValue();       
       
                    $data[] = array(
                        'owner' => $owner,
                        'vehicle_number' => $vehicle_number,
                        'model' => $this->getModel($model),
                        'use_status' => $this->getUseStatus($use_status),
                        'expense' => $expense,
                        'location' => $location,
                        'type' => $this->getType($type),
                        'running_status' => $this->
                            getRunningStatus($running_status),
                        'other_details' => $other_details,
                    );
                }
            }
            
            $this->ImportModel->setVehicleData($data);
            echo 'Data Imported successfully';
        }
    }
    
    private function getModel($model) {

        switch ($model) {
            case "Bus":
                $modelNew = 1;
                break;
            case "Car":
                $modelNew = 2;
                break;
            case "Commercial":
                $modelNew = 3;
                break;
            case "Double cab":
                $modelNew = 4;
                break;
            case "Dual purpose":
                $modelNew = 5;
                break;
            case "Hand tractor":
                $modelNew = 6;
                break;
            case "Jeep & Sport utility vehicle":
                $modelNew = 7;
                break;
            case "Land vehicle":
                $modelNew = 8;
                break;
            case "Motor coach":
                $modelNew = 9;
                break;
            case "Motor cycle":
                $modelNew = 10;
                break;
            case "Motor lorry":
                $modelNew = 11;
                break;
            case "Motor tricycle van":
                $modelNew = 12;
                break;
            case "Single cab":
                $modelNew = 13;
                break;
            case "Special purpose vehicle":
                $modelNew = 14;
                break;
            case "Three wheeler":
                $modelNew = 15;
                break;
            case "Tractor":
                $modelNew = 16;
                break;
            case "Tractor trailer/bowser":
                $modelNew = 17;
                break;
            case "Van":
                $modelNew = 18;
                break;
            case "Other vehicle":
                $modelNew = 19;
                break;
            default:
                $modelNew = 0;
        }
        
        return $modelNew;
    }
    
    private function getUseStatus($use_status) {
        
        switch ($use_status) {
            case "Assigned":
                $use_status_new = 1;
                break;
            case "Commercial Purposes":
                $use_status_new = 2;
                break;
            case "Non Commercial Transport":
                $use_status_new = 3;
                break;
            case "Pool":
                $use_status_new = 4;
                break;
            case "Public Transport":
                $use_status_new = 5;
                break;
            case "Other":
                $use_status_new = 6;
                break;
            default:
                $use_status_new = 0;
        }
        
        return $use_status_new;
    }
    
    private function getType($type) {
        
        switch ($type) {
            
            case "6112101 - Passenger Vehicles":
                $typeNew = 1;
                break;
            case "6112102- Tractor Trailer":
                $typeNew = 2;
                break;
            case "6112102 - Cargo Vehicles":
                $typeNew = 3;
                break;
            case "6112103 - Tractors":
                $typeNew = 4;
                break;
            case "6112103 - Agriculture Vehicles":
                $typeNew = 5;
                break;
            case "6112104 - Industrial Vehicles":
                $typeNew = 6;
                break;
            case "6112109 - Motor Cycles":
                $typeNew = 7;
                break;
            case "66112109 - Bicycles":
                $typeNew = 8;
                break;
            case "6112110 - Trailers":
                $typeNew = 9;
                break;
            case "land vehicle":
                $typeNew = 10;
                break;
            case "6112111 - Other (not specified above)":
                $typeNew = 11;
                break;
            default:
                $typeNew = 0;
        }
        
        return $typeNew;
    }
    
    private function getRunningStatus($running_status) {
            
            switch ($running_status) {
            case "running":
                $running_status_new = 1;
                break;
            case "Not Running":
                $running_status_new = 2;
                break;
            case "Under Repair":
                $running_status_new = 3;
                break;
            case "Repair":
                $running_status_new = 3;
                break;
            case "tender":
                $running_status_new = 4;
                break;
            default:
                $running_status_new = 2;
        }
        
        return $running_status_new;
    }
    
    public function showImportResevationOfOfficialVehiclePage() {
        $this->load->view('import/reservation_of_official_vahicle_page');
    }
    
    public function importReservationOfOfficialVehicles() {
        
         if (isset($_FILES["file"]["name"])) {
             
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            
            foreach ($object->getWorksheetIterator() as $worksheet) {
                
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row = 2; $row <= $highestRow; $row++) {
                    
                    $grade = $worksheet
                            ->getCellByColumnAndRow(0, $row)->getValue();
                    $officerDesignation = $worksheet
                            ->getCellByColumnAndRow(1, $row)->getValue();
                    $officerWorkPlace = $worksheet
                            ->getCellByColumnAndRow(2, $row)->getValue();                   
                    $officerName = $worksheet
                            ->getCellByColumnAndRow(3, $row)->getValue();
                    $statusOfDesignation = $worksheet
                            ->getCellByColumnAndRow(4, $row)->getValue();
                    $vehicleNumber = $worksheet
                            ->getCellByColumnAndRow(5, $row)->getValue();
                    $monthlyFuelAllowance = $worksheet
                            ->getCellByColumnAndRow(6, $row)->getValue();
                    $monthlyFuelIntake = $worksheet
                            ->getCellByColumnAndRow(7, $row)->getValue();
                    $otherNote = $worksheet
                            ->getCellByColumnAndRow(8, $row)->getValue();
                    $fileNumber = $worksheet
                            ->getCellByColumnAndRow(9, $row)->getValue();  
                    
                    $record = $this->VehicleDetailsModel
                        ->getRecord($vehicleNumber);
                    
                    $data = array(
                        'vehicle_number' => $vehicleNumber,
                        'officer_name' => $officerName,
                        'designation' => $officerDesignation,
                        'workplace' => $officerWorkPlace,
                        'grade' => $this->getGrade($grade),
                        'status_designation' => $statusOfDesignation,
                        'monthly_fuel_allowance' => $this
                            ->getMonthlyFuelAllowance($monthlyFuelAllowance),
                        'monthly_fuel_intake' => $monthlyFuelIntake,
                        'other_note' => $otherNote,
                        'file_number' => $fileNumber,
                    );
                    
                    if(empty($record)){
                        $this->VehicleDetailsModel->setNewRecords($data);
                    }else{
                        $this->VehicleDetailsModel
                            ->updateRecordData($vehicleNumber,$data);
                    }
                }
            }
            
            echo 'Data Imported successfully';
        }
        
    }
    
    private function getGrade($grade) {
            
        switch ($grade) {
            case "විශේෂ":
                $grade_new = 1;
                break;
            case "I ශ්‍රේණිය":
                $grade_new = 2;
                break;
            default:
                $grade_new = 0;
        }
        
        return $grade_new;
    }
    
    private function getMonthlyFuelAllowance($monthlyFuelAllowance) {
            
        switch ($monthlyFuelAllowance) {
            case "ඔව්":
                $grade_new = 1;
                break;
            case "":
                $grade_new = 2;
                break;
            default:
                $grade_new = 2;
        }
        
        return $grade_new;
    }

}
