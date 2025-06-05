<?php
include_once 'controllers/LoginController.php';
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
<!-- Mirrored from jthemes.net/themes/f-html/vetrov/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:24:58 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="Md. Siful Islam, Jtheme">

        <title>Đăng nhập</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- Font Icon -->
        <link href="assets/css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">  

        <!-- CSS Global -->
        <link rel='stylesheet' href='assets/css/plugin/bootstrap.min.css'>


        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        

        <!-- Color CSS --> 
        <link href="assets/css/multicolors/theme-color.css" rel="stylesheet" id="theme-config-link">

        <!--[if lt IE 9]>
        <script src="assets/js/plugin/html5shiv.js"></script>
        <script src="assets/js/plugin/respond.js"></script>
        <![endif]-->        
    </head>

    <body id="home" class="wide">
        <!-- WRAPPER -->
        <main class="wrapper"> 
            <section class="coming-wrap sec-space">
                <div class="container rel-div">
                    <div class="col-lg-6 col-lg-offset-3 text-center">
                        <div class="pb-50">                                       
                            <a href="index-2.html" class="logo"> <img src="assets/images/logo/logo-1.png" alt="logo"> </a>                               
                        </div>
                        <div class="title-wrap"> 
                            <h2 class="section-title">  Welcome back!  </h2>
                            <p> Please login to your account. </p>
                        </div>
                        <div class="login pb-50">
                            <?php if ($thongbao != ""): ?>
                                <div style="color:red;"><?php echo $thongbao; ?></div>
                            <?php endif; ?>
                            <form method="POST" action="">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input placeholder="User Name" required="" title="" data-placement="bottom" data-toggle="tooltip" value="" name="email" class="form-control name input-your-name" type="email">                                               
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input placeholder="Password" required="" title="" data-placement="bottom" data-toggle="tooltip" value="" name="password" class="form-control name input-your-name" type="password">                                               
                                    </div>
                                    <div class="form-group col-md-12 remember-me clearfix">
                                        <input type="checkbox" name="vehicle" value="Bike"> Remember me on this computer.  
                                        <a href="#" class="">Forgot Password</a>
                                    </div>
                                    <div class="form-group col-md-12">                                               
                                        <button class="theme-btn" type="submit"> Login Now </button>                                               
                                    </div>
                                </div>
                            </form>
                        </div>                       
                    </div>
                </div>
            </section>
        </main>
        <!-- /WRAPPER -->


        <!-- JS Global -->
        <script src='assets/js/plugin/jquery-2.2.4.min.js'></script>        >
        <script src="assets/js/plugin/jquery.plugin.min.js"></script>
        <script src="assets/js/plugin/jquery.countdown.js"></script>

        <!-- Custom JS -->   
        <script src="assets/js/theme.js" type="text/javascript"></script>

        <!--[if (gte IE 9)|!(IE)]><!-->   
        <script src="assets/js/jquery.cookie.js"></script> 
        <!--<![endif]-->

    </body>

<!-- Mirrored from jthemes.net/themes/f-html/vetrov/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:24:59 GMT -->
</html>