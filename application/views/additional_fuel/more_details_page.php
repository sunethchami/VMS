<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <div class="page-wroper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2>Display Additional Fuel Details</h2>
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
                                                    echo'<td><b>'. "Index Number" . '<b></td>';
                                                    echo'<td>' . $result[0]['index_no'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Vehicle Number" . '<b></td>';
                                                    echo'<td>' . $result[0]['vehicle_number']. '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Month" . '<b></td>';
                                                    echo'<td>' . $result[0]['month'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Value" . '<b></td>';
                                                    echo'<td>' . $result[0]['value'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Application Received Date" . '<b></td>';
                                                    echo'<td>' . $result[0]['application_received_date']. '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Shortcomings" . '<b></td>';
                                                    echo'<td>' . $result[0]['shortcomings'] . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Revised Application Resend Date" . '<b></td>';
                                                    echo'<td>' . $result[0]['revised_application_resend_date'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Date of the application send for approval to A.D.G" . '<b></td>';
                                                    echo'<td>' . $result[0]['date_application_send_approval'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Date of Receiving Approval by A.D.G" . '<b></td>';
                                                    echo'<td>' . $result[0]['date_receiving_approval'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Date of Sending Approval of A.D.G" . '<b></td>';
                                                    echo'<td>' . $result[0]['date_sending_approval'] . '</td>';
                                                    echo'</tr>';                                                                                                            
                                                    echo'<td><b>'. "Other Details" . '<b></td>';
                                                    echo'<td>' . $result[0]['other_details'] . '</td>';
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