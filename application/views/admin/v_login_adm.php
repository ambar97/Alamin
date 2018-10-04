<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>master/adm/assets/images/favicon.png">
    <title>Sdaba Login</title>
    <link href="<?php echo base_url()?>master/adm/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>master/adm/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>master/adm/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url() ?>master/adm/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: url(<?php echo base_url(); ?>master/adm/master/assets/images/alam.png);">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url(); ?>master/adm/assets/images/alam.png);">
            <div style="border-radius: 8%" class="login-box card">
                <div  class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="<?php echo base_url('LoginAdmin/aksi_login') ?>">
                        <div>
                            <center>
                                <img src="<?php echo base_url() ?>master/adm/assets/images/favicon.png">
                                 <h3 class="box-title m-b-20"><strong>Login Admin</strong></h3>
                            </center>
                        </div>                     
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username" name="username"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"><strong>Log In</strong></button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <!-- <p>Don't have an account? <a href="<?php echo base_url('RegisterAdmin') ?>" class="text-info m-l-5"><b></b></a></p> -->
                            </div>
                        </div>
                    </form>      
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/popper/popper.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url() ?>master/adm/js/waves.js"></script>
    <script src="<?php echo base_url() ?>master/adm/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/sweetalert/sweetalert.min.js"></script>
     <script src="<?php echo base_url() ?>master/adm/assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

    <?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?></div>                    
                    <?php } ?>
</body>

</html>