<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Display User Details</h1>
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
                                                    echo'<td><b>'. "First Name" . '<b></td>';
                                                    echo'<td>' . $result->first_name . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Last Name" . '<b></td>';
                                                    echo'<td>' . $result->last_name. '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "ID No" . '<b></td>';
                                                    echo'<td>' . $result->id_no . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "User Role" . '<b></td>';
                                                    echo'<td>' . $result->user_role . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Phone No" . '<b></td>';
                                                    echo'<td>' . $result->phone_no . '</td>';
                                                    echo'</tr>';
                                                    echo'<tr>';
                                                    echo'<td><b>'. "Email" . '<b></td>';
                                                    echo'<td>' . $result->email. '</td>';
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