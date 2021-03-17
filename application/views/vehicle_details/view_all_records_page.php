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
                            <h1 class="page-header">View All Records</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    View all vehicle details
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                      <table class="display cell-border" id="allTable">
                                        <thead class=" text-primary">
                                          <th class="th">Owner</th>
                                          <th class="th">Vehicle Number</th>
                                          <th class="th">Vehicle Model</th>
                                          <th class="th">Vehicle Brand</th>
                                          <th class="th">Usage</th>
                                          <th class="th">Expense</th>
                                          <th class="th">location</th>
                                          <th class="th">Vehicle Type</th>
                                          <th class="th">Vehicle Status</th>
                                          <th class="th">Other Details</th>
                                          <th class="th">Officer Name</th>
                                          <th class="th">Officer Designation</th>
                                          <th class="th">Officer Work Place</th>
                                          <th class="th">Officer Grade</th>
                                          <th class="th">Status of Designation</th>
                                          <th class="th">Monthly Fuel Allowance</th>
                                          <th class="th">Monthly Fuel Intake</th>
                                          <th class="th">Other Note</th>
                                          <th class="th">File No</th>
                                          <th class="th">File No/Book No</th>
                                          <th class="th">Director Division</th>
                                          <th class="th">Sub Division</th>
                                          <th class="th-action">Actions</th>
                                        </thead>
                                        <tbody>
                                         <?php
                                            foreach ($result as $row) {
                                                echo'<tr>';
                                                echo'<td>' . $row['owner'] . '</td>';
                                                echo'<td>' . $row['vehicle_number'] . '</td>';
                                                echo'<td>' . $row['model'] . '</td>';
                                                echo'<td>' . $row['brand'] . '</td>';
                                                echo'<td>' . $row['use_status'] . '</td>'; 
                                                echo'<td>' . $row['expense'] . '</td>'; 
                                                echo'<td>' . $row['location'] . '</td>'; 
                                                echo'<td>' . $row['type'] . '</td>'; 
                                                echo'<td>' . $row['running_status'] . '</td>'; 
                                                echo'<td>' . $row['other_details'] . '</td>'; 
                                                echo'<td>' . $row['officer_name'] . '</td>';  
                                                echo'<td>' . $row['designation'] . '</td>'; 
                                                echo'<td>' . $row['workplace'] . '</td>'; 
                                                echo'<td>' . $row['grade'] . '</td>'; 
                                                echo'<td>' . $row['status_designation'] . '</td>'; 
                                                echo'<td>' . $row['monthly_fuel_allowance'] . '</td>'; 
                                                echo'<td>' . $row['monthly_fuel_intake'] . '</td>'; 
                                                echo'<td>' . $row['other_note'] . '</td>'; 
                                                echo'<td>' . $row['file_number'] . '</td>'; 
                                                echo'<td>' . $row['file_no_book_no'] . '</td>'; 
                                                echo'<td>' . $row['director_division'] . '</td>'; 
                                                echo'<td>' . $row['sub_division'] . '</td>'; 
                                                echo'<td class="td-action"><p class="table-button"><a href="' . site_url() . 'StudentDetailsCon/moreDetails/' . $row['vehicle_number'] . '/'.$page.'"><img src="'. base_url() .'assets/icons/info-circle.svg" width="32" height="32" title="More Details"></a></p><p class="table-button"><a href="' . site_url() . 'StudentDetailsCon/editRecord/' . $row['vehicle_number'] . '/'. $page.'"><img src="'. base_url() .'assets/icons/pencil-square.svg" width="32" height="32" title="Edit"></a></p><p class="table-button"><a href="#" data-id="' . $row['vehicle_number'] . '" data-toggle="modal" class="deleteBtn" data-target="#comfirmModal"><img src="'. base_url() .'assets/icons/trash.svg" width="32" height="32" title ="Delete"></a></p></td>';
                                                echo'</tr>';
                                            }
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
        <script>
            $(document).ready(function() {
                $('#allTable').DataTable({
                });
            });
        </script>

    </body>
</html>

