<?php
include_once 'controllers/RegisterController.php';
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

        <title>Đăng ký tài khoản</title>

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
                            <h2 class="section-title">  Đăng ký tài khoản  </h2>
                            <p> Vui lòng đăng ký tài khoản  </p>
                        </div>
                        <div class="login pb-50">
                            <?php if ($thongbao != ""): ?>
                                <div style="color:red; margin-bottom:10px;"> <?php echo $thongbao; ?> </div>
                            <?php endif; ?>
                            <form class="reply-form" method="POST" action="">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input placeholder="Email" required name="email" class="form-control" type="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input placeholder="Password" required name="password" class="form-control" type="password">
                                    </div>
                                    <div class="form-group col-md-12">                                               
                                        <button class="theme-btn" type="submit">Đăng ký ngay</button>                                               
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