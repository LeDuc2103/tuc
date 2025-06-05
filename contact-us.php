<?php
  if (!isset($_SESSION)) session_start();
  ?>
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
<!-- Mirrored from jthemes.net/themes/f-html/vetrov/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:25:28 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="Md. Siful Islam, Jtheme">

        <title>Vetrov</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- Font Icon -->
        <link href="assets/css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">  

        <!-- CSS Global -->
        <link rel='stylesheet' href='assets/css/plugin/bootstrap.min.css'>
        <link rel='stylesheet' href='assets/css/plugin/bootstrap-select.min.css'>
        <link rel='stylesheet' href='assets/css/plugin/datepicker.css'>
        <link rel='stylesheet' href='assets/css/plugin/owl.carousel.min.css'>        
        <link rel='stylesheet' href='assets/css/plugin/animate.css'>        
        <link href="assets/css/plugin/magnify.css" rel="stylesheet" type="text/css">  
          

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
            <!-- CONTENT AREA -->
            <article class="home-three">
                <!-- Top Header-1 Start -->
                <header class="top-bar-2">                   
                    <div class="container">
                        <div class="block-inline">
                            <div class="left">                                
                                <ul class="top-nav list-items">
                                    <li>
                                        <form action="#" class="currency">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select  class="selectpicker" data-width="100%" data-toggle="tooltip">
                                                    <option>USD</option>
                                                    <option>EUR</option>
                                                    <option>ARS</option>
                                                    <option>BRL</option>
                                                    <option>XAF</option>
                                                    <option>HUF</option>
                                                </select>
                                            </div>                                                   
                                        </form> 
                                    </li>
                                    <li>
                                        <form action="#" class="currency">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker" data-width="100%" data-toggle="tooltip">
                                                    <option>United State</option>
                                                    <option>Argentina</option>
                                                    <option>Germany</option>
                                                    <option>Cameroon</option>
                                                    <option>Hungary</option>
                                                </select>
                                            </div>                                                   
                                        </form> 
                                    </li>
                                    <li>
                                        <span>Phone : </span> <span class="fw-600"> +100 3434 1057 </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-icons-2">
                                    <li> <a href="#" class="fa fa-facebook"></a> </li>
                                    <li> <a href="#" class="fa fa-twitter"></a> </li>
                                    <li> <a href="#" class="fa fa-google-plus"></a> </li>
                                    <li> <a href="#" class="fa fa-instagram"></a> </li>
                                    <li> <a href="#" class="fa fa-behance"></a> </li>
                                </ul>
                                <ul class="top-nav list-items">
                                    <li> <a href="#"> <span class="fa fa-pencil-square-o"></span> Review </a> </li>
                                    <?php
if (!isset($_SESSION)) session_start();
?>
<ul class="top-nav list-items">
    <?php if (isset($_SESSION['user_id'])): ?>
        <li>Xin chào, <?php echo htmlspecialchars($_SESSION['user_email']); ?></li>
        <li><a href="logout.php">Đăng xuất</a></li>
    <?php else: ?>
        <li><a href="reg.php">Đăng ký</a></li>
        <li><a href="login.php">Đăng nhập</a></li>
    <?php endif; ?>
</ul>
                                </ul>
                            </div>
                        </div>
                    </div>                   
                </header>
                <!-- / Top Header-1 Ends -->   

                <!-- Main Header-1 Start -->
                <header class="main-header">
                    <div class="header-fix-wrap header-1">
                        <div class="container rel-div">
                            <div class="logo">
                                <a href="index-2.html">  <img alt="" src="assets/images/logo/logo-1.png" /> </a>
                                <span>TRAVEL AGENCY</span>
                            </div>                
                            <div class="responsive-toggle fa fa-bars"> </div>

                            <!-- Main Header Start -->
                            <div class="menu-bar">  
                                <div class="responsive-toggle fa fa-bars"> </div>
                                <nav id="primary-navigation">            
                                    <ul class="primary-navbar">  
                                        <li class="dropdown active">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home</a>
                                            <ul class="dropdown-menu"> 
                                                <li><a href="index-2.html"> Home-1 </a></li>  
                                                <li><a href="index-3.html"> Home-2 </a></li> 
                                                <li><a href="index-4.html"> Home-3 </a></li>
                                                <li><a href="index-5.html"> Home-4 </a></li>
                                                <li><a href="index-slider-1.html"> Home Slider-1 </a></li> 
                                                <li><a href="index-slider-2.html"> Home Slider-2 </a></li>
                                                <li><a href="index-slider-3.html"> Home Slider-3 </a></li>
                                            </ul>
                                        </li>                         
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Hotels</a>
                                            <ul class="dropdown-menu"> 
                                                <li><a href="listing-1.html"> Listing-1 </a></li>  
                                                <li><a href="listing-2.html"> Listing-2 </a></li> 
                                                <li><a href="listing-detail-1.html"> Listing-Detail-1 </a></li>
                                                <li><a href="listing-detail-2.html"> Listing-Detail-2 </a></li>
                                                <li><a href="listing-detail-3.html"> Listing-Detail-3 </a></li> 
                                            </ul>
                                        </li>
                                        <li><a href="#">Flights</a></li>
                                        <li><a href="before-you-fly.html">Things to do</a> <div class="bubble"> <span class="hot-tag">hot!</span> </div> </li>  
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gallery </a>
                                            <ul class="dropdown-menu">  
                                                <li><a href="portfolio-col-four.html"> Gallery column 4 </a></li>
                                                <li><a href="portfolio-col-three.html"> Gallery column 3 </a></li>
                                                <li><a href="portfolio-col-two.html"> Gallery column 2 </a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu</a>
                                                    <ul class="dropdown-menu">  
                                                        <li><a href="#">Sub Menu 1</a></li>
                                                        <li><a href="#">Sub Menu 2</a></li>    
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu 3</a>
                                                            <ul class="dropdown-menu">  
                                                                <li><a href="#">Sub Menu 4</a></li>
                                                                <li><a href="#">Sub Menu 5</a></li> 
                                                                <li><a href="#">Sub Menu 6</a></li> 
                                                            </ul>
                                                        </li> 
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </li>
                                        <li><a href="pages-link.html">Pages</a> <div class="bubble"> <span class="green-tag">new!</span> </div></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Megamenu</a>                                            
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="col-lg-3 col-sm-12 menu-block">
                                                    <div class="menu-caption">                                                               
                                                        <h2 class="title-2">  Standard Pages  </h2>
                                                        <ul class="sub-list">
                                                            <li><a href="about-us.html"> About Us </a></li>                                    
                                                            <li><a href="contact-us.html"> Contact Us </a></li>
                                                            <li><a href="login.html"> Login </a></li>
                                                            <li><a href="faq.html"> Faqs </a></li>
                                                            <li><a href="forgot-password.html"> Forgot Password </a></li>
                                                            <li><a href="404.html">404</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>
                                                    <a href="pages.html" class="theme-color fsz-11 fw-600"> VIEW ALL PAGES </a> 
                                                </div>
                                                <div class="col-lg-3 col-sm-12 menu-block">
                                                    <div class="menu-caption">                                                               
                                                        <h2 class="title-2"> Layouts </h2>
                                                        <ul class="sub-list">
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                                            <li><a href="fullwidth.html"> Fullwidth </a></li>
                                                            <li><a href="layout-left.html"> Layout Left </a></li>
                                                            <li><a href="layout-right.html"> Layout Right </a></li>
                                                            <li><a href="layout-two.html"> Layout Two </a></li>
                                                            <li><a href="footer-variation.html"> Footer Variation </a></li>
                                                        </ul>
                                                    </div>
                                                    <a href="pages.html" class="theme-color fsz-11 fw-600"> VIEW ALL PAGES </a> 
                                                </div>
                                                <div class="col-lg-3 col-sm-12 menu-block">
                                                    <div class="menu-caption">                                                               
                                                        <h2 class="title-2"> Extra Pages </h2>
                                                        <ul class="sub-list">
                                                            <li><a href="before-you-fly.html"> Before Fly </a></li>
                                                            <li><a href="confirm.html"> Confirm </a></li>
                                                            <li><a href="page-holidays.html"> Holidays </a></li>
                                                            <li><a href="page-search-result.html"> Search Result </a></li>
                                                            <li><a href="page-travel-insurance.html"> Travel Insurance </a></li>
                                                            <li><a href="page-travel-stories.html"> Travel Stories </a></li>
                                                            <li><a href="shortcodes.html"> Shortcodes </a></li>
                                                        </ul>
                                                    </div>
                                                    <a href="pages.html" class="theme-color fsz-11 fw-600"> VIEW ALL PAGES </a> 
                                                </div>
                                                <div class="col-lg-3 col-sm-12 menu-block">
                                                    <img src="assets/images/gallery/300x400-1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </li>                                    
                                    </ul>
                                </nav>
                            </div>
                            <!-- / Main Header Ends -->   
                        </div>
                    </div>
                </header>
                <!-- / Main Header-1 Ends -->  


                <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg bg-4 white-color">   
                    <div class="site-breadcumb ">  
                        <div class="container ">     
                            <div class="title-wrap-2">
                                <h2 class="section-title"> CONTACT US </h2>
                            </div>
                        </div> 
                    </div>
                    <hr class="divider-1">
                    <div class="container ">    
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> Contact Us  </li>                             
                        </ol>
                    </div>
                </section>
                <!--Breadcrumb Section End-->

                <!-- Contact Us Start -->
                <section class="sec-space-top contact-us">
                    <div class="container">
                        <div class="clearfix">
                            <ul class="list-inline social-icons-3">
                                <li> <a href="#">FACEBOOK  </a> </li>
                                <li> <a href="#">TWITTER    </a> </li>
                                <li> <a href="#">INSTAGRAM    </a> </li>
                                <li> <a href="#">GOOGLE+    </a> </li>
                                <li> <a href="#">BEHANCE</a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-4 theme-color-bg">
                            <div class="best-place-menu">
                                <h2 class="title"> Keep in touch with vetrov. </h2>
                                <ul class="list-unstyled">
                                    <li class="active"> <a href="#place-1" data-toggle="tab" aria-expanded="true">Europe</a> </li>
                                    <li> <a href="#place-2" data-toggle="tab" aria-expanded="true">Asia</a> </li>
                                    <li> <a href="#place-3" data-toggle="tab" aria-expanded="true">Africa</a> </li>
                                    <li> <a href="#place-4" data-toggle="tab" aria-expanded="true">United States</a> </li>
                                    <li> <a href="#place-5" data-toggle="tab" aria-expanded="true">Mexico</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-8 no-padding">
                            <div class="contact-map">  <div id="map"></div> </div>
                        </div>
                    </div>
                </section>
                <!-- / Contact Us Ends -->   

                <!-- Patners Start -->
                <section class="ptb-70 patners">
                    <div class="container">
                        <div class="patners-wrap">
                            <div class="owl-carousel patners-slider nav-2">
                                <div class="item">
                                    <a href="#"> <img src="assets/images/icons/partner-1.png" alt="" /> </a>
                                </div>
                                <div class="item">
                                    <a href="#"> <img src="assets/images/icons/partner-2.png" alt="" /> </a>
                                </div>
                                <div class="item">
                                    <a href="#"> <img src="assets/images/icons/partner-3.png" alt="" /> </a>
                                </div>
                                <div class="item">
                                    <a href="#"> <img src="assets/images/icons/partner-1.png" alt="" /> </a>
                                </div>
                                <div class="item">
                                    <a href="#"> <img src="assets/images/icons/partner-2.png" alt="" /> </a>
                                </div>
                                <div class="item">
                                    <a href="#"> <img src="assets/images/icons/partner-3.png" alt="" /> </a>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </section>
                <!-- / Patners Ends -->  
                

            </article>
            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="page-footer">             
                <div class="light-bg sec-space">
                    <div class="container">
                        <!-- Footer Logo Start -->
                        <div class="logo">
                            <a href="index-2.html">  <img alt="" src="assets/images/logo/logo-1.png"> </a>
                            <span>TRAVEL AGENCY</span>
                            <p>Lorem ipsum dolor sit amet consetuer adipiscing elit, sed diam nonummy dolor sit amet consetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                        <!-- / Footer Logo Ends -->  
                    </div>
                </div>
                <!-- Footer menu Start -->
                <div class="text-center">
                    <div class="container footer-menu">
                        <ul class="primary-navbar">
                            <li><a href="#"> About Us.  </a></li>
                            <li><a href="#">Write a review. </a></li>
                            <li><a href="#">  Careers. </a></li>
                            <li><a href="#">Membership. </a></li>
                            <li><a href="#">Site Map. </a></li>
                            <li><a href="#">Become an Affiliate. </a></li>
                            <li><a href="#">Travelers' Choice. </a></li>
                            <li><a href="#">Help Center. </a></li>
                        </ul>
                    </div>
                    <hr class="divider-1" />
                    <div class="container copyright">
                        <p> <a href="index-2.html" class="theme-color fw-500">Vetrov</a> ©2017 Made with <i class="fa fa-heart red-clr"></i> All Right Reserved </p>
                    </div>
                </div>
                <!-- / Footer Menu Ends -->  

            </footer>
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"> <i class="fa fa-angle-up"></i> </div>

        </main>
        <!-- /WRAPPER -->


        <!-- JS Global -->
        <script src='assets/js/plugin/jquery-2.2.4.min.js'></script>
        <script src='assets/js/plugin/bootstrap.min.js'></script>
        <script src='assets/js/plugin/bootstrap-select.min.js'></script>
        <script src='assets/js/plugin/bootstrap-datepicker.js'></script>
        <script src='assets/js/plugin/owl.carousel.min.js'></script>
        <script src="assets/js/plugin/jquery.magnify.js" type="text/javascript"></script>
        
        <script src='assets/js/plugin/isotope.pkgd.min.js'></script>
        <script src="assets/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>


        <!-- Custom JS -->   
        <script src="assets/js/theme.js" type="text/javascript"></script>
        <script src="assets/js/map.scripts.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwarlVfqlWKfonKl9T0wr9VGC0ynvbdiU&amp;callback=initMap" async defer></script>

        <!--[if (gte IE 9)|!(IE)]><!-->   
        <script src="assets/js/jquery.cookie.js"></script> 
        <!--<![endif]-->

    </body>

<!-- Mirrored from jthemes.net/themes/f-html/vetrov/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:25:28 GMT -->
</html>