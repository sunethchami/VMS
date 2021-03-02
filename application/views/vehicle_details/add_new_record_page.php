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

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url() ?>assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    <a class="navbar-brand" href="index.html">Startmin</a>
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
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="active"><i class="fa fa-automobile fa-fw"></i> Vehicle Details<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Search</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage">Add New Record</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">View All Records</a>
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
                            <h2 class="page-header">Add New Record</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Enter vehicle details
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" id="add_new_records_form" method="post" action="<?php echo site_url(); ?>VehicleDetailsCon/setNewRecord">
                                                <div class="form-group">
                                                    <label>Owner</label>
                                                    <input name="owner" class="form-control">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Number</label>
                                                    <input name="vehicle_number" class="form-control">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <select name="model" class="form-control">
                                                        <option value="0">Please select vehicle model</option>
                                                        <option value="1">Bus</option>
                                                        <option value="2">Car</option>
                                                        <option value="3">Commercial</option>
                                                        <option value="4">Double cab</option>
                                                        <option value="5">Dual purpose</option>
                                                        <option value="6">Hand tractor</option>
                                                        <option value="7">Jeep & Sport utility vehicle</option>
                                                        <option value="8">Land vehicle</option>
                                                        <option value="9">Motor coach</option>
                                                        <option value="10">Motor cycle</option>
                                                        <option value="11">Motor lorry</option>
                                                        <option value="12">Motor tricycle van</option>
                                                        <option value="13">Single cab</option>
                                                        <option value="14">Special purpose vehicle</option>
                                                        <option value="15">Three wheeler</option>
                                                        <option value="16">Tractor</option>
                                                        <option value="17">Tractor trailer/bowser</option>
                                                        <option value="18">Van</option>
                                                        <option value="19">Other vehicle</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Usage</label>
                                                    <select name="use_status" class="form-control">
                                                        <option value="0">Please select usage</option>
                                                        <option value="1">Assigned</option>
                                                        <option value="3">Commercial Purposes</option>
                                                        <option value="4">Non Commercial Transport</option>
                                                        <option value="5">Pool</option>
                                                        <option value="6">Public Transport</option>
                                                        <option value="7">Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expense</label>
                                                    <input name="expense" class="form-control">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>location</label>
                                                    <input name="location" class="form-control">
                                                    <p class="help-block"></p>
                                                </div>
                                                 <div class="form-group">
                                                    <label>Vehicle Type</label>
                                                    <select name="type" class="form-control">
                                                        <option value="0">Please select vehicle type</option>
                                                        <option value="1">6112101 - Passenger Vehicles</option>
                                                        <option value="2">6112109 - Motor Cycles </option>
                                                        <option value="3">6112103 - Agriculture Vehicles</option>
                                                        <option value="4">6112102 - Cargo Vehicles</option>
                                                        <option value="5">6112104 - Industrial Vehicles</option>
                                                        <option value="6">6112111 - Other (not specified above)</option>
                                                        <option value="7">6112110 - Trailers</option>
                                                        <option value="8">land vehicle</option>
                                                        <option value="9">6112103 - Tractors</option>
                                                        <option value="10">6112102- Tractor Trailer</option>
                                                        <option value="11">6112109 - Bicycles</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" id="optionsRadios1" value="1" checked>Running
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" id="optionsRadios2" value="2">Not Running
                                                        </label>
                                                    </div>                                  
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" id="optionsRadios2" value="3">Under Repair
                                                        </label>
                                                    </div>                                  
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Details</label>
                                                    <textarea name="other_details" class="form-control" rows="3"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-default">Save</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            
                                        </div>
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

    </body>
</html>
