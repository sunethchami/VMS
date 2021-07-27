<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">

            <div class="page-wroper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2>Update User</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Record
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form" id="add_new_records_form" method="post" action="<?php echo site_url(); ?>UserCon/updateRecord">
                                        <div class="col-lg-6">                                
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input name="first_name" class="form-control" value="<?php if(isset($result->first_name)){ echo $result->first_name;}else{ echo set_value('first_name');} ?>">
                                                <input name="id" type="hidden" value="<?php if(isset($result->id)){ echo $result->id;}else{ echo $id;} ?>"/>
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input name="last_name" class="form-control" value="<?php if(isset($result->last_name)){ echo $result->last_name;}else{ echo set_value('last_name');} ?>">
                                                <p></p>
                                            </div> 
                                            <div class="form-group">
                                                <label>ID No <span class="star">*</span></label>
                                                <input name="id_no" class="form-control" value="<?php if(isset($result->id_no)){ echo $result->id_no;}else{ echo set_value('id_no');} ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('id_no'); ?></span>
                                            </div> 
                                            <div class="form-group">
                                                <label>User Role <span class="star">*</span></label>
                                                <select name="user_role" class="form-control">
                                                    <option value="">Please select user role</option>
                                                    <option value="1" <?php if(isset($result->user_role)){ echo $result->user_role == '1' ? ' selected="selected"' : '';}else{ echo set_value('user_role') == '1' ? ' selected="selected"' : '';}?>>Superadmin</option>
                                                    <option value="2" <?php if(isset($result->user_role)){ echo $result->user_role == '2' ? ' selected="selected"' : '';}else{ echo set_value('user_role') == '2' ? ' selected="selected"' : '';}?>>Admin</option>
                                                    <option value="3" <?php if(isset($result->user_role)){ echo $result->user_role == '3' ? ' selected="selected"' : '';}else{ echo set_value('user_role') == '3' ? ' selected="selected"' : '';}?>>User</option>
                                                </select>
                                                <p></p><span class="error-msg"><?php echo form_error('user_role'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone No</label>
                                                <input name="phone_no" class="form-control" value="<?php if(isset($result->phone_no)){ echo $result->phone_no;}else{ echo set_value('phone_no');} ?>">
                                                <p></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" class="form-control" value="<?php if(isset($result->email)){ echo $result->email;}else{ echo set_value('email');} ?>">
                                                <p></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Password <span class="star">*</span></label>
                                                <input name="password" class="form-control" type="password" value="">
                                                <p></p>
                                            </div>                                                                                 
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-default">Save</button>
                                            <a href="<?php echo site_url(); ?>UserCon/editRecord/<?php if(isset($result->id)){echo $result->id;}else{echo $id;} ?>" class="btn btn-default">Reset</a>
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
