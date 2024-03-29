<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            
            <div class="page-wroper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2>Add New Vehicle Details</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add New Record
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form" id="add_new_records_form" method="post" action="<?php echo site_url(); ?>VehicleDetailsCon/setNewRecord">
                                        <div class="col-lg-6">                                
                                                <div class="form-group">
                                                    <label>Owner</label>
                                                    <input name="owner" class="form-control" value="<?php echo set_value('owner'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Number</label>
                                                    <input name="vehicle_number" class="form-control" value="<?php echo set_value('vehicle_number'); ?>">
                                                    <p></p><span class="error-msg"><?php echo form_error('vehicle_number'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Model</label>
                                                    <input list="models" value="<?php echo set_value('model'); ?>" name="model" class="form-control">
                                                      <datalist id="models">
                                                        <?php
                                                            foreach ($models as $model) {
                                                        ?>
                                                                <option value="<?php echo $model['name']?>">
                                                        <?php
                                                            }
                                                        ?>
                                                      </datalist>
                                                </div>                                                
<!--                                                <div class="form-group">
                                                    <label>Usage</label>
                                                    <select name="use_status" class="form-control">
                                                        <option>Please select usage</option>
                                                        <option value="1" <?= set_value('use_status') == '1' ? ' selected="selected"' : '';?>>Assigned</option>
                                                        <option value="2" <?= set_value('use_status') == '2' ? ' selected="selected"' : '';?>>Commercial Purposes</option>
                                                        <option value="3" <?= set_value('use_status') == '3' ? ' selected="selected"' : '';?>>Non Commercial Transport</option>
                                                        <option value="4" <?= set_value('use_status') == '4' ? ' selected="selected"' : '';?>>Pool</option>
                                                        <option value="5" <?= set_value('use_status') == '5' ? ' selected="selected"' : '';?>>Public Transport</option>
                                                        <option value="6" <?= set_value('use_status') == '6' ? ' selected="selected"' : '';?>>Other</option>
                                                    </select>
                                                </div>-->
                                                <div class="form-group">
                                                    <label>Usage</label>
                                                    <input list="usage" value="<?php echo set_value('model'); ?>" name="use_status" class="form-control">
                                                      <datalist id="usage">
                                                        <?php
                                                            foreach ($usages as $usage) {
                                                        ?>
                                                                <option value="<?php echo $usage['name']?>">
                                                        <?php
                                                            }
                                                        ?>
                                                      </datalist>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expense</label>
                                                    <input name="expense" class="form-control" value="<?php echo set_value('expense'); ?>">
                                                    <p></p><span class="error-msg"><?php echo form_error('expense'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>location</label>
                                                    <input name="location" class="form-control" value="<?php echo set_value('location'); ?>">
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Type</label>
                                                    <select name="type" class="form-control">
                                                        <option value="">Please select vehicle type</option>
                                                        <option value="1" <?= set_value('type') == '1' ? ' selected="selected"' : '';?>>6112101 - Passenger Vehicles</option>
                                                        <option value="2" <?= set_value('type') == '2' ? ' selected="selected"' : '';?>>6112102 - Tractor Trailer</option>
                                                        <option value="3" <?= set_value('type') == '3' ? ' selected="selected"' : '';?>>6112102 - Cargo Vehicles</option>
                                                        <option value="4" <?= set_value('type') == '4' ? ' selected="selected"' : '';?>>6112103 - Tractors</option>
                                                        <option value="5" <?= set_value('type') == '5' ? ' selected="selected"' : '';?>>6112103 - Agriculture Vehicles</option>                                                      
                                                        <option value="6" <?= set_value('type') == '6' ? ' selected="selected"' : '';?>>6112104 - Industrial Vehicles</option>                                                        
                                                        <option value="7" <?= set_value('type') == '7' ? ' selected="selected"' : '';?>>6112109 - Motor Cycles</option>
                                                        <option value="8" <?= set_value('type') == '8' ? ' selected="selected"' : '';?>>6112109 - Bicycles</option>
                                                        <option value="9" <?= set_value('type') == '9' ? ' selected="selected"' : '';?>>6112110 - Trailers</option>
                                                        <option value="10" <?= set_value('type') == '10' ? ' selected="selected"' : '';?>>land vehicle</option>
                                                        <option value="11" <?= set_value('type') == '11' ? ' selected="selected"' : '';?>>6112111 - Other (not specified above)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vehicle Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '1' ?'checked':'' ?> id="optionsRadios1" value="1" checked>Running
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '2' ?'checked':'' ?> id="optionsRadios2" value="2">Not Running
                                                        </label>
                                                    </div>                                  
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '3' ?'checked':'' ?> id="optionsRadios3" value="3">Under Repair
                                                        </label>
                                                    </div>                                  
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="running_status" <?= set_value('running_status') == '4' ?'checked':'' ?> id="optionsRadios4" value="4">Tender
                                                        </label>
                                                    </div>                                  
                                                </div>
                                                <div class="form-group">
                                                    <label>Other Details</label>
                                                    <textarea name="other_details" class="form-control" rows="8"><?php echo set_value('other_details'); ?></textarea>
                                                </div>                                                                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Officer Name</label>
                                                <input name="officer_name" class="form-control" value="<?php echo set_value('officer_name'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Officer Designation</label>
                                                <input name="designation" class="form-control" value="<?php echo set_value('designation'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Officer Work Place</label>
                                                <input name="workplace" class="form-control" value="<?php echo set_value('workplace'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Officer Grade</label>
                                                <select name="grade" class="form-control">
                                                    <option value="">Please select Officer Grade</option>
                                                    <option value="1" <?= set_value('grade') == '1' ? ' selected="selected"' : '';?>>Special</option>
                                                    <option value="2" <?= set_value('grade') == '2' ? ' selected="selected"' : '';?>>Grade 1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status of Designation</label>
                                                <select name="status_designation" class="form-control">
                                                    <option value="">Please select Status of Designation</option>
                                                    <option value="1" <?= set_value('status_designation') == '1' ? ' selected="selected"' : '';?>>Permanent</option>
                                                    <option value="2" <?= set_value('status_designation') == '2' ? ' selected="selected"' : '';?>>Acting</option>
                                                    <option value="3" <?= set_value('status_designation') == '3' ? ' selected="selected"' : '';?>>Performing Duties</option>
                                                    <option value="4" <?= set_value('status_designation') == '4' ? ' selected="selected"' : '';?>>Duty Cover</option>
                                                    <option value="5" <?= set_value('status_designation') == '5' ? ' selected="selected"' : '';?>>Contracts</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Monthly Fuel Allowance</label>
                                                <select name="monthly_fuel_allowance" class="form-control">
                                                    <option value="">Please select Monthly Fuel Allowance</option>
                                                    <option value="1" <?= set_value('monthly_fuel_allowance') == '1' ? ' selected="selected"' : '';?>>Yes</option>
                                                    <option value="2" <?= set_value('monthly_fuel_allowance') == '1' ? ' selected="selected"' : '';?>>No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Monthly Fuel Intake</label>
                                                <input name="monthly_fuel_intake" class="form-control" value="<?php echo set_value('monthly_fuel_intake'); ?>">
                                                <p></p><span class="error-msg"><?php echo form_error('monthly_fuel_intake'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Other Note</label>
                                                <textarea name="other_note" class="form-control" rows="3"><?php echo set_value('other_note'); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>File Number</label>
                                                <input name="file_number" class="form-control" value="<?php echo set_value('file_number'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>File Number/Book Number</label>
                                                <input name="file_no_book_no" class="form-control" value="<?php echo set_value('file_no_book_no'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Vehicle Brand</label>
                                                <input name="brand" class="form-control"  value="<?php echo set_value('brand'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Director Division</label>
                                                <input name="director_division" class="form-control" value="<?php echo set_value('director_division'); ?>">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sub Division</label>
                                                <input name="sub_division" class="form-control" value="<?php echo set_value('sub_division'); ?>">
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
