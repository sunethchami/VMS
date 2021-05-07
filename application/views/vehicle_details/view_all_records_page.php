<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <!-- Data tables -->
        <link href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">View all vehicle details</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    View All Records
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                      <table class="display cell-border" id="allTable">
                                        <thead class=" text-primary">
                                          <th class="th-action">Actions</th>
                                          <th class="th">Owner</th>
                                          <th class="th">Vehicle Number</th>
                                          <th class="th">Vehicle Model</th>                                          
                                          <th class="th">Usage</th>
                                          <th class="th">Expense</th>
                                          <th class="th">Location</th>
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
                                          <th class="th">Vehicle Brand</th>
                                          <th class="th">Director Division</th>
                                          <th class="th">Sub Division</th>
                                        </thead>
                                        <tbody>
                                         <?php
                                            foreach ($result as $row) {
                                                echo'<tr>';
                                                echo'<td class="td-action"><p class="table-button"><a href="' . site_url() . 'VehicleDetailsCon/displayDetails/' . $row['id'] . '"><img src="'. base_url() .'assets/icons/info-circle.svg" width="32" height="32" title="Display Details"></a></p><p class="table-button"><a href="' . site_url() . 'VehicleDetailsCon/editRecord/' . $row['id'] . '"><img src="'. base_url() .'assets/icons/pencil-square.svg" width="32" height="32" title="Edit"></a></p><p class="table-button"><a href="#" data-id="' . $row['id'] . '" data-toggle="modal" class="deleteBtn" data-target="#comfirmModal"><img src="'. base_url() .'assets/icons/trash.svg" width="32" height="32" title ="Delete"></a></p></td>';
                                                echo'<td>' . $row['owner'] . '</td>';
                                                echo'<td>' . $row['vehicle_number'] . '</td>';
                                                echo'<td>' . $row['model'] . '</td>';
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
                                                echo'<td>' . $row['brand'] . '</td>';
                                                echo'<td>' . $row['director_division'] . '</td>'; 
                                                echo'<td>' . $row['sub_division'] . '</td>';                                                 
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
        
        <!-- Modal -->
          <div class="modal fade" id="comfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete a Record</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 Are you sure, do you want to delete this record?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="yesBtn">Yes</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>              
                </div>
              </div>
            </div>
          </div>
        
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
        
        <!-- Data tables -->
        <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
       
        
        <script>
            $(document).ready(function() {
                $('#allTable').DataTable({
                });
                
                $("#allTable").on('click', '.deleteBtn', function(){
                    var ID = $(this).data('id');     
                    //set the data attribute on the modal button
                    $('#yesBtn').data('id', ID); 
                });

                $('#yesBtn').click(function(){
                    var id = $(this).data('id');
                    window.location = "<?php echo site_url(); ?>VehicleDetailsCon/deleteRecord/"+id;
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

