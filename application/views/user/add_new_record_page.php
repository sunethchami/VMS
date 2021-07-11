<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Add User</h2>
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
                                        <form role="form" id="add_new_records_form" method="post" action="<?php echo site_url(); ?>UserCon/setNewRecord">
                                        <div class="col-lg-6">                                
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input name="last_name" class="form-control" value="<?php echo set_value('last_name'); ?>">
                                                <p></p>
                                            </div> 
                                            <div class="form-group">
                                                <label>ID No <span class="star">*</span></label>
                                                <input name="id_no" class="form-control" value="<?php echo set_value('id_no'); ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('id_no'); ?></span>
                                            </div> 
                                            <div class="form-group">
                                                <label>User Role <span class="star">*</span></label>
                                                <select name="user_role" class="form-control">
                                                    <option value="">Please select user role</option>
                                                    <option value="1" <?= set_value('user_role') == '1' ? ' selected="selected"' : '';?>>Superadmin</option>
                                                    <option value="2" <?= set_value('user_role') == '2' ? ' selected="selected"' : '';?>>Admin</option>
                                                    <option value="3" <?= set_value('user_role') == '3' ? ' selected="selected"' : '';?>>User</option>
                                                </select>
                                                <p></p><span class="error-msg"><?php echo form_error('user_role'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone No</label>
                                                <input name="phone_no" class="form-control" value="<?php echo set_value('phone_no'); ?>">
                                                <p></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" class="form-control" value="<?php echo set_value('email'); ?>">
                                                <p></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Password <span class="star">*</span></label>
                                                <input name="password" class="form-control" type="password" value="">
                                                <p></p><span class="error-msg"><?php echo form_error('password'); ?></span>
                                            </div>                                                                                                
                                        </div>                                        
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-default">Save</button>
                                            <a href="<?php echo site_url(); ?>UserCon/showAddNewRecordPage" class="btn btn-default">Reset</a>
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
