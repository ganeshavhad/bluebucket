<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url('');?>assets/Admin/images/apple.png">
    <link rel="shortcut icon" href="<?php echo base_url('');?>assets/Admin/images/favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('');?>assets/Admin/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            
 <?php if($this->session->flashdata('error') == 'Please Entre correct email and password'){ ?> 
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="col-md-12">
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">UnSuccessful</span>
               <?php echo $this->session->flashdata('error'); ?> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
</div><?php } ?>
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo base_url('');?>assets/Admin/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?php echo base_url('Welcome/login');?>" method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="username" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url('');?>assets/Admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url('');?>assets/Admin/js/popper.min.js"></script>
    <script src="<?php echo base_url('');?>assets/Admin/js/plugins.js"></script>
    <script src="<?php echo base_url('');?>assets/Admin/js/main.js"></script>


</body>
</html>
