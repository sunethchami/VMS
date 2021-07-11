<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportCon extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        if (!$this->user()) {
            redirect(base_url('LoginCon'));
        }
        $this->load->model('ImportModel');
        $this->load->model('VehicleDetailsModel');
        $this->load->model('ModelTypeModel');
        $this->load->model('UsageTypeModel');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('excel');
    }
    
    public function showImportVehicleDetailsPage() {
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'import-vd') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $this->set_view('import/vehicle_details_page','');
        } else {
            echo "access denied";
        }
    }
    
    public function importVehicleDetails() {
        
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'import-vd') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
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
                        $type = $worksheet->getCellByColumnAndRow(5, $row)
                                ->getValue();
                        $running_status = $worksheet->getCellByColumnAndRow(6, $row)
                                ->getValue();
                        $location = $worksheet->getCellByColumnAndRow(7, $row)
                                ->getValue();
                        $other_details = $worksheet->getCellByColumnAndRow(8, $row)
                                ->getValue();

                        $data[] = array(
                            'owner' => trim($owner),
                            'vehicle_number' => trim($vehicle_number),
                            'model' => $this->getModel(trim($model)),
                            'use_status' => $this->getUseStatus(trim($use_status)),
                            'expense' => trim($expense),
                            'location' => trim($location),
                            'type' => $this->getType(trim($type)),
                            'running_status' => $this->
                                    getRunningStatus(trim($running_status)),
                            'other_details' => trim($other_details),
                        );
                    }
                }

                $this->ImportModel->setVehicleData($data);
                echo 'Data Imported successfully';
            }
        } else {
            echo "access denied";
        }
    }
    
    private function getModel($model_name) {

        if ($model_name == '') {
            return 0;
        } else {
            
             $results = $this->ModelTypeModel->getRecord($model_name);

            if(empty($results)){
                //new model
                $data = array(
                    'name' => $model_name
                );
                $insert_id = $this->ModelTypeModel->setNewRecord($data);
                return $insert_id;
            }else{
                //existing model
                return $results->id;
            }
        }
       
    }
    
    private function getUseStatus($usage_name) {
        
//        switch ($use_status) {
//            case "Assigned":
//                $use_status_new = 1;
//                break;
//            case "Commercial Purposes":
//                $use_status_new = 2;
//                break;
//            case "Non Commercial Transport":
//                $use_status_new = 3;
//                break;
//            case "Pool":
//                $use_status_new = 4;
//                break;
//            case "Public Transport":
//                $use_status_new = 5;
//                break;
//            case "Other":
//                $use_status_new = 6;
//                break;
//            default:
//                $use_status_new = 0;
//        }
        
//        return $use_status_new;
        if ($usage_name == '') {
            return 0;
        } else {
            
             $results = $this->UsageTypeModel->getRecord($usage_name);

            if(empty($results)){
                //new usage
                $data = array(
                    'name' => $usage_name
                );
                $insert_id = $this->UsageTypeModel->setNewRecord($data);
                return $insert_id;
            }else{
                //existing usage
                return $results->id;
            }
        }
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
            case "6112109 - Bicycles":
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
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'import-rov') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $this->set_view('import/reservation_of_official_vahicle_page','');
        } else {
            echo "access denied";
        }
    }
    
    public function importReservationOfOfficialVehicles() {
        
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'import-rov') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
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
                                ->getRecordByVehicleNo($vehicleNumber);

                        $data = array(
                            'vehicle_number' => trim($vehicleNumber),
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

                        if ($vehicleNumber == '') {
                            $this->VehicleDetailsModel->setNewRecords($data);
                        } else if (empty($record)) {
                            $this->VehicleDetailsModel->setNewRecords($data);
                        } else {
                            $this->VehicleDetailsModel
                                    ->updateRecordData($vehicleNumber, $data);
                        }
                    }
                }

                echo 'Data Imported successfully';
            }
        } else {
            echo "access denied";
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
    
     public function showImportCertificatesOfRegistrationPage() {
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'import-cr') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            $this->set_view('import/certificates_of_registration_page','');
        } else {
            echo "access denied";
        }
    }
    
    public function importCertificatesOfRegistration() {
        $permissions = $this->permission();
        $access = FALSE;
        foreach ($permissions as $per) {
            if ($per->permission == 'import-cr') {
                $access = TRUE;
                break;
            }
        }
        if ($access) {
            if (isset($_FILES["file"]["name"])) {

                $path = $_FILES["file"]["tmp_name"];
                $object = PHPExcel_IOFactory::load($path);

                foreach ($object->getWorksheetIterator() as $worksheet) {

                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();

                    for ($row = 2; $row <= $highestRow; $row++) {
                        $vehicle_number = $worksheet->getCellByColumnAndRow(0, $row)
                                ->getValue();
                        $brand = $worksheet->getCellByColumnAndRow(1, $row)
                                ->getValue();
                        $director_division = $worksheet->getCellByColumnAndRow(2, $row)
                                ->getValue();
                        $sub_division = $worksheet->getCellByColumnAndRow(3, $row)
                                ->getValue();
                        $file_no_book_no = $worksheet->getCellByColumnAndRow(4, $row)
                                ->getValue();

                        $data = array(
                            'vehicle_number' => trim($vehicle_number),
                            'brand' => trim($brand),
                            'director_division' => trim($director_division),
                            'sub_division' => trim($sub_division),
                            'file_no_book_no' => trim($file_no_book_no)
                        );

                        $record = $this->VehicleDetailsModel
                                ->getRecordByVehicleNo(trim($vehicle_number));
                        if ($vehicle_number == '') {
                            $this->VehicleDetailsModel->setNewRecords($data);
                        } else if (empty($record)) {
                            $this->VehicleDetailsModel->setNewRecords($data);
                        } else {
                            $data = array(
                                'brand' => trim($brand),
                                'director_division' => trim($director_division),
                                'sub_division' => trim($sub_division),
                                'file_no_book_no' => trim($file_no_book_no)
                            );
                            $this->VehicleDetailsModel
                                    ->updateById($record->id, $data);
                        }
                    }
                }

                echo 'Data Imported successfully';
            }
        } else {
            echo "access denied";
        }
    }

}
