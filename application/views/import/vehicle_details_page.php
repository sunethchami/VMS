<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">Import Vehicle Details</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Vehicle Details
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form role="form" id="import_form" method="post" enctype="multipart/form-data">
                                            <div class="col-lg-6">                                
                                                    <div class="form-group">
                                                        <label>Select Excel File</label>
                                                        <input name="file" type="file" class="form-control">
                                                        <p class="help-block"></p>
                                                    </div>                                                                                                
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="submit" class="btn btn-default" name="import" value="Submit"/>                                                
                                                <a href="<?php echo site_url(); ?>VehicleDetailsCon/deleteAll">Delete All Vehicles</a>
                                                <!--<button type="submit" class="btn btn-default">Submit</button>-->                                            
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
           <script>
                $(document).ready(function(){                  

                $('#import_form').on('submit', function(event){
                    event.preventDefault();
                    $.ajax({
                        url:"<?php echo base_url(); ?>ImportCon/importVehicleDetails",
                        method:"POST",
                        data:new FormData(this),
                        contentType:false,
                        cache:false,
                        processData:false,
                        success:function(data){
                            var color = 'success'; 
                            var icon = 'nc-icon nc-check-2';
                            var msg = 'Data has been added successfully.' 
                            
                            $.notify({
                                icon: icon,
                                message: msg
                            },{
                                type: color,
                                timer: 1000,
                                placement: {
                                    from: 'top',
                                    align: 'right'
                                }
                            });
                        }
                     })
                 });

                });
           </script> 