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
        
        <!-- Data tables -->
        <link href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />

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
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAllRecordsPage">View All Records</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-automobile fa-fw"></i> Import<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Vehicle Details</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage">Reservation of Official Vehicles</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url(); ?>VehicleDetailsCon/showAllRecordsPage">Certificates of registration</a>
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
                            <h1 class="page-header">Display Vehicle Details</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Display Details
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead hidden>
                                                 <tr>
                                                 <th></th>
                                                 <th></th>
                                                 </tr>
                                              </thead>
                                            <tbody>
                                              <?php                       
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Owner" . '<b></td>';
                                                    echo'<td>' . $result[0]['owner'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Vehicle Number" . '<b></td>';
                                                    echo'<td>' . $result[0]['vehicle_number']. '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Vehicle Model" . '<b></td>';
                                                    echo'<td>' . $result[0]['model'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Vehicle Brand" . '<b></td>';
                                                    echo'<td>' . $result[0]['brand']. '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Usage" . '<b></td>';
                                                    echo'<td>' . $result[0]['use_status'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Expense" . '<b></td>';
                                                    echo'<td>' . $result[0]['expense']. '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Location" . '<b></td>';
                                                    echo'<td>' . $result[0]['location'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Vehicle Type" . '<b></td>';
                                                    echo'<td>' . $result[0]['type'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Vehicle Status" . '<b></td>';
                                                    echo'<td>' . $result[0]['running_status'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Other Details" . '<b></td>';
                                                    echo'<td>' . $result[0]['monthly_fuel_intake'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Officer Name" . '<b></td>';
                                                    echo'<td>' . $result[0]['other_note'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Officer Designation" . '<b></td>';
                                                    echo'<td>' . $result[0]['designation'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Officer Work Place" . '<b></td>';
                                                    echo'<td>' . $result[0]['workplace'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Officer Grade" . '<b></td>';
                                                    echo'<td>' . $result[0]['grade'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Status of Designation" . '<b></td>';
                                                    echo'<td>' . $result[0]['status_designation'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Monthly Fuel Allowance" . '<b></td>';
                                                    echo'<td>' . $result[0]['monthly_fuel_allowance'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Monthly Fuel Intake" . '<b></td>';
                                                    echo'<td>' . $result[0]['monthly_fuel_intake'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Other Note" . '<b></td>';
                                                    echo'<td>' . $result[0]['other_note'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "File No" . '<b></td>';
                                                    echo'<td>' . $result[0]['file_number'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "File No/Book No" . '<b></td>';
                                                    echo'<td>' . $result[0]['file_no_book_no'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Director Division" . '<b></td>';
                                                    echo'<td>' . $result[0]['director_division'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Sub Division" . '<b></td>';
                                                    echo'<td>' . $result[0]['sub_division'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->                                    
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

        <!-- Data tables -->
        <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        
        <!--  Notifications Plugin    -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>
        
        <script>
            $(document).ready(function() {
                $('#allTable').DataTable({
                });
            });
        </script>
        <script>
            window.onload = function() {

            <?php if (isset($message)) { ?>
                <?php if ($message == 1) { ?>
                
                    var color = 'success'; 
                    var icon = 'nc-icon nc-check-2';
                    var msg = 'The record has been updated successfully.'  
            
                <?php  }  ?>
            
                <?php if ($message == 2) { ?>

                    var color = 'success'; 
                    var icon = 'nc-icon nc-check-2';
                    var msg = 'The record has been deleted successfully.'  

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

