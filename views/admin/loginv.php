

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/css/style.css">



        <!-- Favicon and touch icons -->
        <!--<link rel="shortcut icon" href="<?php echo base_url(); ?>assets1/ico/favicon.png">-->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets1/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets1/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets1/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets1/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body
    style="background-image:url(<?php echo base_url();?>assets1/img/backgrounds/1.jpg);
    background-position:center;
    background-attachment:fixed;">

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Welcome admin!</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <?php
                              if($this->session->userdata('error_msg')){
                             ?>
                             <b style="color:red;"><?php echo $this->session->userdata('error_msg'); ?></b>
                             <?php
                              $this->session->unset_userdata('error_msg');
                           }

                             ?>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo base_url(); ?>index.php/admin/loginCheck" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="for-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
                            <button type="submit" class="btn" name="login" >Login</button>
			                    </form>
		                    </div>
                        </div>
                    </div>

            </div>

        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets1/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/scripts.js"></script>





</body>
