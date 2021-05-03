<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Update Additional Fuel Details</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Record
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form" id="add_new_records_form" method="post" action="<?php echo site_url(); ?>AdditionalFuelCon/updateRecord">
                                        <div class="col-lg-6">                                
                                                <div class="form-group">
                                                    <label>Index Number</label>
                                                    <input name="index_no" class="form-control" value="<?php if(isset($result->index_no)){ echo $result->index_no;}else{ echo set_value('index_no');} ?>">
                                                    <input name="id" type="hidden" value="<?php if(isset($result->id)){ echo $result->id;}else{ echo $id;} ?>"/>
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Number</label>
                                                    <input name="vehicle_number" class="form-control" value="<?php if(isset($result->vehicle_number)){ echo $result->vehicle_number;}else{ echo set_value('vehicle_number');} ?>">
                                                    <p></p><span class="error-msg"><?php echo form_error('vehicle_number'); ?></span>
                                                </div> 
                                                <div class="form-group">
                                                    <label>Month</label>
                                                    <select name="month" class="form-control">
                                                        <option value="0">Please select Month</option>
                                                        <option value="1" <?php if(isset($result->month)){ echo $result->month == '1' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>January</option>
                                                        <option value="2" <?php if(isset($result->month)){ echo $result->month == '2' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>February</option>
                                                        <option value="3" <?php if(isset($result->month)){ echo $result->month == '3' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>March</option>
                                                        <option value="4" <?php if(isset($result->month)){ echo $result->month == '4' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>April</option>
                                                        <option value="5" <?php if(isset($result->month)){ echo $result->month == '5' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>May</option>
                                                        <option value="6" <?php if(isset($result->month)){ echo $result->month == '6' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>June</option>
                                                        <option value="7" <?php if(isset($result->month)){ echo $result->month == '7' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>July</option>
                                                        <option value="8" <?php if(isset($result->month)){ echo $result->month == '8' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>August</option>
                                                        <option value="9" <?php if(isset($result->month)){ echo $result->month == '9' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>September</option>
                                                        <option value="10" <?php if(isset($result->month)){ echo $result->month == '10' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>October</option>
                                                        <option value="11" <?php if(isset($result->month)){ echo $result->month == '11' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>November</option>
                                                        <option value="12" <?php if(isset($result->month)){ echo $result->month == '12' ? ' selected="selected"' : '';}else{ echo set_value('month') == '1' ? ' selected="selected"' : '';}?>>December</option>
                                                    </select>
                                                </div> 
                                                <div class="form-group">
                                                    <label>Value</label>
                                                    <input name="value" class="form-control" value="<?php if(isset($result->value)){ echo $result->value;}else{ echo set_value('value');} ?>">
                                                    <p class="help-block"></p>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label>Application Received Date</label>
                                                    <input name="application_received_date" id="datepicker0" class="form-control" value="<?php if(isset($result->application_received_date)){ echo $result->application_received_date;}else{ echo set_value('application_received_date');} ?>">
                                                    <p></p><span class="error-msg"><?php echo form_error('application_received_date'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Shortcomings</label>
                                                    <textarea name="shortcomings" class="form-control" rows="4"><?php if(isset($result->shortcomings)){ echo $result->shortcomings;}else{ echo set_value('shortcomings');} ?></textarea>
                                                    <p class="help-block"></p>
                                                </div>                                                                                                 
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>Revised Application Resend Date </label>
                                                <input name="revised_application_resend_date" id="datepicker1" class="form-control" value="<?php if(isset($result->revised_application_resend_date)){ echo $result->revised_application_resend_date;}else{ echo set_value('revised_application_resend_date');} ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('revised_application_resend_date'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of the application send for approval to A.D.G </label>
                                                <input name="date_application_send_approval" id="datepicker2" class="form-control" value="<?php if(isset($result->date_application_send_approval)){ echo $result->date_application_send_approval;}else{ echo set_value('date_application_send_approval');} ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('date_application_send_approval'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Receiving Approval by A.D.G </label>
                                                <input name="date_receiving_approval" id="datepicker4" class="form-control" value="<?php if(isset($result->date_receiving_approval)){ echo $result->date_receiving_approval;}else{ echo set_value('date_receiving_approval');} ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('date_receiving_approval'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Sending Approval of A.D.G </label>
                                                <input name="date_sending_approval" id="datepicker5" class="form-control" value="<?php if(isset($result->date_sending_approval)){ echo $result->date_sending_approval;}else{ echo set_value('date_sending_approval');} ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('date_sending_approval'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Other Details</label>
                                                <textarea name="other_details" class="form-control" rows="8"><?php if(isset($result->other_details)){ echo $result->other_details;}else{ echo set_value('other_details');} ?></textarea>
                                            </div>  
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-default">Save</button>
                                            <a href="<?php echo site_url(); ?>AdditionalFuelCon/editRecord/<?php if(isset($result->id)){echo $result->id;}else{echo $id;} ?>" class="btn btn-default">Reset</a>
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
        
        <!--  jquery UI   -->
        <script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>

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
            
            $( function() {
                $( "#datepicker0" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd"
                });
                $( "#datepicker1" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd"
                });
                $( "#datepicker2" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd"
                });
                $( "#datepicker3" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd"
                });
                $( "#datepicker4" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd"
                });
                $( "#datepicker5" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: "yy-mm-dd"
                });
            } );
            
           </script>
