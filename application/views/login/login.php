<!DOCTYPE html>
<html>
    <head>
        <title>Vehicle Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">

        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class="container">  
            
            <div class="row login-title">
                <div class="col-md-2"></div>
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>assets/images/Emblem_of_Sri_Lanka.svg" alt="Emblem of Sri Lanka" width="60" height="auto">
                </div>
                <div class="col-md-6">
                    <h1>Vehicle Management System</h1>
                    <h3>Department of Agriculture</h3>
                </div>
                <div class="col-md-1">
                    <img class="img-agri" src="<?php echo base_url(); ?>assets/images/logo1.jpg" alt="Emblem of Agricalture Department" width="80" height="auto">
                </div>
                <div class="col-md-2"></div>
            </div>
            
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                         
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        

                        <form method="post" action="<?php echo site_url(); ?>LoginCon/login" class="form-horizontal" role="form">                           

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  type="text" class="form-control" id="username" name="username" value="<?php if(isset($username))echo $username;?>" placeholder="ID No">                                        
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input  type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>



                            <!--<div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>-->
                            <?php if (isset($message_data)) { ?>  
                                <?php if (is_array($message_data) || is_object($message_data)) { ?>
                                    <?php foreach ($message_data as $error) { ?>                                     
                                        <div class="alert alert-danger" role="alert">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <?php echo $error; ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?> 

                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button type="submit" href="" class="btn btn-success">Login</button>
                                    <!--div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="<?php //echo base_url('auth/recovery'); ?>">Forgot password?</a></div-->
                                </div>
                            </div>
                        </form>     
                    </div>                     
                </div>  
            </div>

        </div>
    </body>
</html>
