<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <div class="page-wroper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2>Display Vehicle Details</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
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
                                                    echo'<td>' . $result[0]['other_details'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Officer Name" . '<b></td>';
                                                    echo'<td>' . $result[0]['officer_name'] . '</td>';
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
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Vehicle Brand" . '<b></td>';
                                                    echo'<td>' . $result[0]['brand']. '</td>';
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