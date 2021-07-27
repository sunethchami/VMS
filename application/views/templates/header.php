<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
                <!-- MetisMenu CSS -->
        <link href="<?php echo base_url() ?>assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <!-- Main CSS -->
        <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-light" style="background-color: #cfe9fc;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        
                        <span class="icon-bar" style="background-color: #000"></span>
                        <span class="icon-bar" style="background-color: #000"></span>
                        <span class="icon-bar" style="background-color: #000"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>HomeCon">VMS  </a>    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>HomeCon">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vehicle Details <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if($user_type != 3){ ?>
                                <li>
                                    <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage">Add New Record</a>
                                </li>
                                <?php } ?>
                                <li>
                                    <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAllRecordsPage">View All Records</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Additional Fuel <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if($user_type != 3){ ?>
                                    <li>
                                        <a href="<?php echo site_url(); ?>AdditionalFuelCon/showAddNewRecordPage">Add New Record</a>
                                    </li>
                                <?php } ?>
                                    <li>
                                        <a href="<?php echo site_url(); ?>AdditionalFuelCon/showAllRecordsPage">View All Records</a>
                                    </li>
                            </ul>
                        </li>
                        
                        <?php if($user_type == 1){ ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                        <a href="<?php echo site_url(); ?>UserCon/showAddNewRecordPage">Add New Record</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>UserCon/showAllRecordsPage">View All Records</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Import <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url(); ?>ImportCon/showImportVehicleDetailsPage">Vehicle Details</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>ImportCon/showImportResevationOfOfficialVehiclePage">Reservation of Official Vehicles</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>ImportCon/showImportCertificatesOfRegistrationPage">Certificates of registration</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>       
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="remove_hover user_name"><span><?php if (isset($this_user)) { ?><?php echo $this_user->first_name; ?> <?php echo $this_user->last_name; ?><?php } ?></span></li>                                           
                        <li><a href="<?php echo site_url(); ?>LoginCon/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

