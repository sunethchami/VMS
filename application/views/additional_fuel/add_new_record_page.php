<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Add Additional Fuel Details</h2>
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
                                                    <label>Index Number</label>
                                                    <input name="index_no" class="form-control" value="<?php echo set_value('index_no'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Number <span class="star">*</span></label>
                                                    <input name="vehicle_number" class="form-control" value="<?php echo set_value('vehicle_number'); ?>">
                                                    <p></p><span class="error-msg"><?php echo form_error('vehicle_number'); ?></span>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Value</label>
                                                    <input name="month" class="form-control" value="<?php echo set_value('expense'); ?>">
                                                    <p class="help-block"></p>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label>Application Received Date</label>
                                                    <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Shortcomings</label>
                                                    <textarea name="other_details" class="form-control" rows="4"><?php echo set_value('other_details'); ?></textarea>
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Details</label>
                                                    <textarea name="other_details" class="form-control" rows="4"><?php echo set_value('other_details'); ?></textarea>
                                                </div>                                                   
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>Revised Application Resend Date </label>
                                                <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of the application send for approval to A.D.G </label>
                                                <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Receiving Approval by A.D.G </label>
                                                <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Receiving Approval by A.D.G </label>
                                                <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Sending Approval of A.D.G </label>
                                                <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
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
