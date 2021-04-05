<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Vehicle Management System</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url() ?>assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <!-- Main CSS -->
        <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">VMS</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>                            
                            <li>
                                <a href="<?php echo site_url(); ?>DashboardCon/index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-automobile fa-fw"></i> Vehicle Details<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage">Add New Record</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAllRecordsPage">View All Records</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-automobile fa-fw"></i> Import<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showImportVehicleDetailsPage">Vehicle Details</a>
                                    </li>
                                    <li>
                                        <a href="#">Reservation of Official Vehicles</a>
                                    </li>
                                    <li>
                                        <a href="#">Certificates of registration</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Add New Vehicle Details</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add New Record
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form" id="add_new_records_form" method="post" action="<?php echo site_url(); ?>VehicleDetailsCon/setNewRecord">
                                        <div class="col-lg-6">                                
                                                <div class="form-group">
                                                    <label>Owner</label>
                                                    <input name="owner" class="form-control" value="<?php echo set_value('owner'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Number <span class="star">*</span></label>
                                                    <input name="vehicle_number" class="form-control" value="<?php echo set_value('vehicle_number'); ?>">
                                                    <p></p><span class="error-msg"><?php echo form_error('vehicle_number'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Model</label>
                                                    <select name="model" class="form-control">
                                                        <option>Please select vehicle model</option>
                                                        <option value="1" <?= set_value('model') == '1' ? ' selected="selected"' : '';?>>Bus</option>
                                                        <option value="2" <?= set_value('model') == '2' ? ' selected="selected"' : '';?>>Car</option>
                                                        <option value="3" <?= set_value('model') == '3' ? ' selected="selected"' : '';?>>Commercial</option>
                                                        <option value="4" <?= set_value('model') == '4' ? ' selected="selected"' : '';?>>Double cab</option>
                                                        <option value="5" <?= set_value('model') == '5' ? ' selected="selected"' : '';?>>Dual purpose</option>
                                                        <option value="6" <?= set_value('model') == '6' ? ' selected="selected"' : '';?>>Hand tractor</option>
                                                        <option value="7" <?= set_value('model') == '7' ? ' selected="selected"' : '';?>>Jeep & Sport utility vehicle</option>
                                                        <option value="8" <?= set_value('model') == '8' ? ' selected="selected"' : '';?>>Land vehicle</option>
                                                        <option value="9" <?= set_value('model') == '9' ? ' selected="selected"' : '';?>>Motor coach</option>
                                                        <option value="10" <?= set_value('model') == '10' ? ' selected="selected"' : '';?>>Motor cycle</option>
                                                        <option value="11" <?= set_value('model') == '11' ? ' selected="selected"' : '';?>>Motor lorry</option>
                                                        <option value="12" <?= set_value('model') == '12' ? ' selected="selected"' : '';?>>Motor tricycle van</option>
                                                        <option value="13" <?= set_value('model') == '13' ? ' selected="selected"' : '';?>>Single cab</option>
                                                        <option value="14" <?= set_value('model') == '14' ? ' selected="selected"' : '';?>>Special purpose vehicle</option>
                                                        <option value="15" <?= set_value('model') == '15' ? ' selected="selected"' : '';?>>Three wheeler</option>
                                                        <option value="16" <?= set_value('model') == '16' ? ' selected="selected"' : '';?>>Tractor</option>
                                                        <option value="17" <?= set_value('model') == '17' ? ' selected="selected"' : '';?>>Tractor trailer/bowser</option>
                                                        <option value="18" <?= set_value('model') == '18' ? ' selected="selected"' : '';?>>Van</option>
                                                        <option value="19" <?= set_value('model') == '19' ? ' selected="selected"' : '';?>>Other vehicle</option>
                                                    </select>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label>Usage</label>
                                                    <select name="use_status" class="form-control">
                                                        <option>Please select usage</option>
                                                        <option value="1" <?= set_value('use_status') == '1' ? ' selected="selected"' : '';?>>Assigned</option>
                                                        <option value="2" <?= set_value('use_status') == '2' ? ' selected="selected"' : '';?>>Commercial Purposes</option>
                                                        <option value="3" <?= set_value('use_status') == '3' ? ' selected="selected"' : '';?>>Non Commercial Transport</option>
                                                        <option value="4" <?= set_value('use_status') == '4' ? ' selected="selected"' : '';?>>Pool</option>
                                                        <option value="5" <?= set_value('use_status') == '5' ? ' selected="selected"' : '';?>>Public Transport</option>
                                                        <option value="6" <?= set_value('use_status') == '6' ? ' selected="selected"' : '';?>>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expense</label>
                                                    <input name="expense" class="form-control" value="<?php echo set_value('expense'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>location</label>
                                                    <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                 <div class="form-group">
                                                    <label>Vehicle Type</label>
                                                    <select name="type" class="form-control">
                                                        <option>Please select vehicle type</option>
                                                        <option value="1" <?= set_value('type') == '1' ? ' selected="selected"' : '';?>>6112101 - Passenger Vehicles</option>
                                                        <option value="2" <?= set_value('type') == '2' ? ' selected="selected"' : '';?>>6112102- Tractor Trailer</option>
                                                        <option value="3" <?= set_value('type') == '3' ? ' selected="selected"' : '';?>>6112102 - Cargo Vehicles</option>
                                                        <option value="4" <?= set_value('type') == '4' ? ' selected="selected"' : '';?>>6112103 - Tractors</option>
                                                        <option value="5" <?= set_value('type') == '5' ? ' selected="selected"' : '';?>>6112103 - Agriculture Vehicles</option>                                                      
                                                        <option value="6" <?= set_value('type') == '6' ? ' selected="selected"' : '';?>>6112104 - Industrial Vehicles</option>                                                        
                                                        <option value="7" <?= set_value('type') == '7' ? ' selected="selected"' : '';?>>6112109 - Motor Cycles</option>
                                                        <option value="8" <?= set_value('type') == '8' ? ' selected="selected"' : '';?>>6112109 - Bicycles</option>
                                                        <option value="9" <?= set_value('type') == '9' ? ' selected="selected"' : '';?>>6112110 - Trailers</option>
                                                        <option value="10" <?= set_value('type') == '10' ? ' selected="selected"' : '';?>>land vehicle</option>
                                                        <option value="11" <?= set_value('type') == '11' ? ' selected="selected"' : '';?>>6112111 - Other (not specified above)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '1' ?'checked':'' ?> id="optionsRadios1" value="1" checked>Running
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '2' ?'checked':'' ?> id="optionsRadios2" value="2">Not Running
                                                        </label>
                                                    </div>                                  
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '3' ?'checked':'' ?> id="optionsRadios3" value="3">Under Repair
                                                        </label>
                                                    </div>                                  
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '4' ?'checked':'' ?> id="optionsRadios4" value="4">Tender
                                                        </label>
                                                    </div>                                  
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Details</label>
                                                    <textarea name="other_details" class="form-control" rows="8"><?php echo set_value('other_details'); ?></textarea>
                                                </div>                                                                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Officer Name</label>
                                                <input name="officer_name" class="form-control" value="<?php echo set_value('officer_name'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Officer Designation</label>
                                                <input name="designation" class="form-control" value="<?php echo set_value('designation'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Officer Work Place</label>
                                                <input name="workplace" class="form-control" value="<?php echo set_value('workplace'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Officer Grade</label>
                                                <select name="grade" class="form-control">
                                                    <option>Please select Officer Grade</option>
                                                    <option value="1" <?= set_value('grade') == '1' ? ' selected="selected"' : '';?>>Special</option>
                                                    <option value="2" <?= set_value('grade') == '2' ? ' selected="selected"' : '';?>>Grade 1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status of Designation</label>
                                                <select name="status_designation" class="form-control">
                                                    <option>Please select Status of Designation</option>
                                                    <option value="1" <?= set_value('status_designation') == '1' ? ' selected="selected"' : '';?>>Permanent</option>
                                                    <option value="2" <?= set_value('status_designation') == '2' ? ' selected="selected"' : '';?>>Acting</option>
                                                    <option value="3" <?= set_value('status_designation') == '3' ? ' selected="selected"' : '';?>>Performing Duties</option>
                                                    <option value="4" <?= set_value('status_designation') == '4' ? ' selected="selected"' : '';?>>Duty Cover</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Monthly Fuel Allowance</label>
                                                <select name="monthly_fuel_allowance" class="form-control">
                                                    <option >Please select Monthly Fuel Allowance</option>
                                                    <option value="1" <?= set_value('monthly_fuel_allowance') == '1' ? ' selected="selected"' : '';?>>Yes</option>
                                                    <option value="2" <?= set_value('monthly_fuel_allowance') == '1' ? ' selected="selected"' : '';?>>No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Monthly Fuel Intake</label>
                                                <input name="monthly_fuel_intake" class="form-control" value="<?php echo set_value('monthly_fuel_intake'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Other Note</label>
                                                <textarea name="other_note" class="form-control" rows="3"><?php echo set_value('other_note'); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>File Number</label>
                                                <input name="file_number" class="form-control" value="<?php echo set_value('file_number'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>File Number/Book Number</label>
                                                <input name="file_no_book_no" class="form-control" value="<?php echo set_value('file_no_book_no'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Vehicle Brand</label>
                                                <input name="brand" class="form-control"  value="<?php echo set_value('brand'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Director Division</label>
                                                <input name="director_division" class="form-control" value="<?php echo set_value('director_division'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sub Division</label>
                                                <input name="sub_division" class="form-control" value="<?php echo set_value('sub_division'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-default">Save</button>
                                            <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage" class="btn btn-default">Reset</a>
                                        </div>
                                        </form>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/startmin.js"></script>
        
        <!--  Notifications Plugin    -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>
        
          <script>
            window.onload = function() {

            <?php if (isset($message)) { ?>
                <?php if ($message == 1) { ?>

                    var color = 'success'; 
                    var icon = 'nc-icon nc-check-2';
                    var msg = 'New record has been added successfully.'  

                <?php  }  ?>

                $.notify({
                    icon: icon,
                    message: msg

                }, {
                    type: color,
                    timer: 1000,
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });

             <?php  }  ?>
            }
           </script>

    </body>
</html>
