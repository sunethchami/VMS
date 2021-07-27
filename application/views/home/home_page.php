<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        
        <div class="container">
            <div class="row menu-title">
                <div class="col-md-2"></div>
                <div class="col-md-1">
                    <img class="img-emblem" src="<?php echo base_url(); ?>assets/images/Emblem_of_Sri_Lanka.svg" alt="Emblem of Sri Lanka" width="56" height="auto">
                </div>
                <div class="col-md-6">
                    <h1>Vehicle Management System</h1>
                    <h3>Department of Agriculture</h3>
                </div>
                <div class="col-md-1">
                    <img class="img-agri" src="<?php echo base_url(); ?>assets/images/logo1.jpg" alt="Emblem of Agricalture Department" width="78" height="auto">
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="container home-menu">   
                <?php if($user_type != 3){ ?>
                <div class="row">
                    <div class="col-md-3" align="center"><a href="<?php echo site_url(); ?>UserCon/showAllRecordsPage"><img src="<?php echo base_url(); ?>assets/images/car.png" class="img-rounded" alt="Cinque Terre" width="100" height="auto"></a></div>
                    <div class="col-md-3" align="center"><a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage"><img src="<?php echo base_url(); ?>assets/images/extra.png" class="img-rounded" alt="Cinque Terre" width="100" height="auto"></a></div>
                    <div class="col-md-3" align="center"><a href="<?php echo site_url(); ?>AdditionalFuelCon/showAllRecordsPage"><img src="<?php echo base_url(); ?>assets/images/petrol.png" class="img-rounded" alt="Cinque Terre" width="100" height="auto"></a></div>
                    <div class="col-md-3" align="center"><a href="<?php echo site_url(); ?>AdditionalFuelCon/showAddNewRecordPage"><img src="<?php echo base_url(); ?>assets/images/gas.png" class="img-rounded" alt="Cinque Terre" width="100" height="auto"></a></div>
                    <div class="col-md-3"><h3><a href="<?php echo site_url(); ?>VehicleDetailsCon/showAllRecordsPage">View Vehicles</a></h3></div>
                    <div class="col-md-3"><h3><a href="<?php echo site_url(); ?>VehicleDetailsCon/showAddNewRecordPage">Add Vehicle</a></h3></div>
                    <div class="col-md-3"><h3><a href="<?php echo site_url(); ?>AdditionalFuelCon/showAllRecordsPage">View Additional Fuel</a></h3></div>   
                    <div class="col-md-3"><h3><a href="<?php echo site_url(); ?>AdditionalFuelCon/showAddNewRecordPage">Add Additional fuel</a></h3></div>   
                </div>
                <?php }else{ ?>
                <div class="row">
                    <div class="col-md-3 col-md-offset-3" align="center"><a href="<?php echo site_url(); ?>UserCon/showAllRecordsPage"><img src="<?php echo base_url(); ?>assets/images/car.png" class="img-rounded" alt="Cinque Terre" width="100" height="auto"></a></div>                    
                    <div class="col-md-3" align="center"><a href="<?php echo site_url(); ?>AdditionalFuelCon/showAllRecordsPage"><img src="<?php echo base_url(); ?>assets/images/petrol.png" class="img-rounded" alt="Cinque Terre" width="100" height="auto"></a></div>                    
                    <div class="col-md-3 col-md-offset-3"><h3><a href="<?php echo site_url(); ?>VehicleDetailsCon/showAllRecordsPage">View Vehicles</a></h3></div>                    
                    <div class="col-md-3"><h3><a href="<?php echo site_url(); ?>AdditionalFuelCon/showAllRecordsPage">View Additional Fuel</a></h3></div>                       
                </div>
                
                <?php } ?>
            </div>
        </div>

                 <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

