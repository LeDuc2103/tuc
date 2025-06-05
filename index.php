<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    
<!-- Mirrored from jthemes.net/themes/f-html/vetrov/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:24:21 GMT -->
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

        <!-- Minified CSS --> 
        <link href="assets/css/style_min.css" rel="stylesheet" type="text/css"> 

        <!-- Color CSS --> 
        <link href="assets/css/multicolors/theme-color.css" rel="stylesheet" id="theme-config-link">

        <!--[if lt IE 9]>
        <script src="assets/js/plugin/html5shiv.js"></script>
        <script src="assets/js/plugin/respond.js"></script>
        <![endif]-->        
    </head>

    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="loading">  
            <div class="boxLoading"></div>
        </div>
        <!-- /PRELOADER -->

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
                                <div class="menu">
                                    <?php if (empty($_SESSION['user_id'])): ?>
                                        <a href="login.php">Đăng nhập</a>
                                        <a href="reg.php">Đăng ký</a>
                                    <?php else: ?>
                                        <span>Xin chào, <?php echo htmlspecialchars($_SESSION['user_email']); ?></span>
                                        <a href="logout.php">Đăng xuất</a>
                                    <?php endif; ?>
                                </div>
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
                                <a href="index.html">  <img alt="" src="assets/images/logo/logo-1.png" /> </a>
                                <span>TRAVEL AGENCY</span>
                            </div>                
                            <div class="responsive-toggle fa fa-bars"> </div>

                            <!-- Main Header Start -->
                            <div class="menu-bar">  
                                <div class="responsive-toggle fa fa-bars"> </div>
                                <nav id="primary-navigation">            
                                    <ul class="primary-navbar">  
                                                             
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Tour du lịch hấp dẫn</a>
                                            <ul class="dropdown-menu"> 
                                                <li><a href="listing-1.php"> Listing </a></li>  
                            
                                            </ul>
                                        </li>
                                        
                                        
                                        <li class="dropdown">
                                            
                                            <ul class="dropdown-menu">  
                                                
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu</a>
                                                    <ul class="dropdown-menu">  
                                                        
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu 3</a>
                                                            <ul class="dropdown-menu">  
                                                              
                                                            </ul>
                                                        </li> 
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </li>
                                        <li><a href="pages-link.html">Pages</a> <div class="bubble"> <span class="green-tag">new!</span> </div></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"></a>                                            
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
                                                            <li><a href="blog-detail.php">Blog Detail</a></li>
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

                <!-- Main-Banner-1 Start -->
                <div class="main-banner-1">
                    <div class="item">
                        <div class="info container">
                            <h2 class="font-2"> To travel is to Live </h2>
                            <img alt="" src="assets/images/icons/text-1.png" />
                            <p class="theme-color">Find 5 Stars Hotels in Sydney with the lowest price</p>
                            <a href="#" class="btn btn-3">EXPLORE</a>
                        </div>
                    </div>
                    <div class="search-wrap">
                        <div class="container">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="search-1">                                   
                                    <form class="search-form" method="post">
                                        <div class="form-group width-25">
                                            <input placeholder="Destination..." required=""  class="form-control" type="text">                                               
                                            <span class="fa fa-map-marker theme-color"></span>
                                        </div>
                                        <div class="form-group width-15">
                                            <input class="dpd1 form-control border" required="" data-date-format="dd-mm-yyyy" placeholder="Check in" type="text">                                                    
                                            <span class="fa fa-calendar theme-color"></span>
                                        </div>
                                        <div class="form-group width-15">
                                            <input class="dpd2 form-control" required="" data-date-format="dd-mm-yyyy" type="text" placeholder="Check out">                                                    
                                            <span class="fa fa-calendar theme-color"></span>
                                        </div>
                                        <div class="form-group width-10">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker form-control border" data-width="100%" data-toggle="tooltip">
                                                    <option>1 Adults</option>
                                                    <option>2 Adults</option>
                                                    <option>3 Adults</option>
                                                    <option>4 Adults</option>
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="form-group width-10">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker form-control" data-width="100%" data-toggle="tooltip">
                                                    <option>2 Kids</option>
                                                    <option>3 Kids</option>
                                                    <option>4 Kids</option>
                                                    <option>5 Kids</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group width-10">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker form-control border" data-width="100%" data-toggle="tooltip">
                                                    <option>2 Rooms</option>
                                                    <option>3 Rooms</option>
                                                    <option>4 Rooms</option>
                                                    <option>1 Rooms</option>
                                                </select>
                                            </div>   
                                        </div>
                                        <div class="form-group width-15">                                         
                                            <button class="form-control"> SEARCH NOW </button>
                                        </div>                                      
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="search-2">                                   
                                    <form class="search-form" method="post">
                                        <div class="form-group col-sm-6 no-padding">
                                            <input placeholder="Location..." required=""  class="form-control" type="text">                                               
                                            <span class="fa fa-map-marker theme-color"></span>
                                        </div>
                                        <div class="form-group col-sm-4 no-padding">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker form-control border" data-width="100%" data-toggle="tooltip">
                                                    <option>Breakfast</option>
                                                    <option>Lunch</option>
                                                    <option>Dinner</option>
                                                    <option>Desserts</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-2 no-padding">                                         
                                            <button class="form-control"> SEARCH NOW </button>
                                        </div>                            
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in active" id="search-3">                                   
                                    <form class="search-form" method="post">
                                        <div class="form-group col-sm-6 no-padding">
                                            <input placeholder="I'm Looking For..." required=""  class="form-control" type="text">                                               
                                            <span class="fa fa-pencil-square-o theme-color"></span>
                                        </div>
                                        <div class="form-group col-sm-4 no-padding">
                                            <input placeholder="Enter Your Destination" required=""  class="form-control border" type="text">                                               
                                            <span class="fa fa-map-marker theme-color"></span>
                                        </div>
                                        <div class="form-group col-sm-2 no-padding">                                         
                                            <button class="form-control"> SEARCH NOW </button>
                                        </div>                                      
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="search-4">                                   
                                    <form class="search-form" method="post">
                                        <div class="form-group width-15">
                                            <input placeholder="From..." required=""  class="form-control" type="text">                                               
                                            <span class="fa fa-map-marker theme-color"></span>
                                        </div>
                                        <div class="form-group width-15">
                                            <input placeholder="To..." required=""  class="form-control border" type="text">                                               
                                            <span class="fa fa-map-marker theme-color"></span>
                                        </div>
                                        <div class="form-group width-15">
                                            <input class="dpd1 form-control" required="" data-date-format="dd-mm-yyyy" placeholder="Depart" type="text">                                                    
                                            <span class="fa fa-calendar theme-color"></span>
                                        </div>
                                        <div class="form-group width-15">
                                            <input class="dpd2 form-control border" required="" data-date-format="dd-mm-yyyy" type="text" placeholder="Return">                                                    
                                            <span class="fa fa-calendar theme-color"></span>
                                        </div>
                                        <div class="form-group width-10">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker form-control" data-width="100%" data-toggle="tooltip">
                                                    <option>1 Guest</option>
                                                    <option>2 Guests</option>
                                                    <option>3 Guests</option>
                                                    <option>4 Guests</option>
                                                </select>
                                            </div>    
                                        </div>
                                        <div class="form-group width-10">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker form-control border" data-width="100%" data-toggle="tooltip">
                                                    <option>Economy</option>
                                                    <option>Premium Economy</option>
                                                    <option>Business</option>                                                    
                                                </select>
                                            </div>
                                        </div>                                       
                                        <div class="form-group width-15">                                         
                                            <button class="form-control"> SEARCH NOW </button>
                                        </div>                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                        <ul class="search-tabs">
                            <li class="">
                                <a href="#search-1" data-toggle="tab"> 
                                    <i class="fa fa-building-o icon"></i> Hotels                                    
                                </a>                                
                            </li>
                            <li class="">
                                <a href="#search-2" data-toggle="tab"> 
                                    <i class="fa fa-glass icon"></i> Restaurants                                    
                                </a>                                
                            </li>
                            <li class="active">
                                <a href="#search-3" data-toggle="tab"> 
                                    <i class="fa fa-anchor icon"></i> Things to do                                    
                                </a>                                
                            </li>
                            <li class="">
                                <a href="#search-4" data-toggle="tab"> 
                                    <i class="fa fa-plane icon"></i> Flights                                    
                                </a>                                
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- / Main-Banner-1 Ends -->   

                <!-- Recommended Start -->
                <section class="sec-space-top recommended">
                    <div class="container">
                        <div class="title-wrap-2 text-center">
                            <h2 class="section-title"> Tận hưởng ngay các tour du lịch hấp dẫn  </h2>
                            <p class="fsz-16">Đặt chuyến đi lý tưởng của bạn với mức giá thấp nhất</p>
                        </div>
                        <div class="spotlight-wrap pt-30">
                            <div class="spotlight-slider owl-carousel">
                                <div class="item">
                                    <img alt="" src="assets/images/slider/970x500-1.jpg" />
                                    <div class="info white-color">
                                        <div class="title-wrap left">
                                            <h2 class="section-title white-color"> <a href="#">01. Atlantis Hotel.</a> </h2>
                                            <p class="fw-500 fsz-12"> 5 <i class="fa fa-star-o theme-color"></i> HOTEL IN DUBAI </p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet dolore magna aliquam erat volutpat...                                             
                                        </p>
                                        <a href="#" class="all-show theme-color"> Hotel Detail </a> <a href="#" class="all-show theme-color"> Booking Now </a>
                                    </div>
                                    <div class="content">
                                        <div class="slider-feature"> 
                                            <ul class="hotel-feature">
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-15.png"> <span>CAR PARK</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-16.png"> <span>SWIMMING POOL</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-17.png"> <span>RESTAURANT</span> 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-18.png"> <span>FITNESS CENTER</span> 
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-19.png"> <span>SPA &amp; MASSAGE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="price"> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <del>$350</del> <div> <ins> $275 </ins> <span> PER NIGHT </span> </div> 
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="gray-2">Description provided by: <span class="fw-600"> Vetrov Tourism Division </span> </h5>
                                        <h5 class="gray-2">Website: <a href="#" class="fw-600 gray-2"> www.atlantishotel.com </a> </h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="assets/images/slider/970x500-2.jpg" />
                                    <div class="info white-color">
                                        <div class="title-wrap left">
                                            <h2 class="section-title white-color"> <a href="#">02. Austin Hotels.</a> </h2>
                                            <p class="fw-500 fsz-12"> 5 <i class="fa fa-star-o theme-color"></i> HOTEL IN UNITED STATES </p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet dolore magna aliquam erat volutpat...                                             
                                        </p>
                                        <a href="#" class="all-show theme-color"> Hotel Detail </a> <a href="#" class="all-show theme-color"> Booking Now </a>
                                    </div>
                                    <div class="content">
                                        <div class="slider-feature"> 
                                            <ul class="hotel-feature">
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-15.png"> <span>CAR PARK</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-16.png"> <span>SWIMMING POOL</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-17.png"> <span>RESTAURANT</span> 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-18.png"> <span>FITNESS CENTER</span> 
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-19.png"> <span>SPA &amp; MASSAGE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="price"> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <del>$350</del> <div> <ins> $275 </ins> <span> PER NIGHT </span> </div> 
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="gray-2">Description provided by: <span class="fw-600"> Vetrov Tourism Division </span> </h5>
                                        <h5 class="gray-2">Website: <a href="#" class="fw-600 gray-2"> www.atlantishotel.com </a> </h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="assets/images/slider/970x500-3.jpg" />
                                   <div class="info white-color">
                                        <div class="title-wrap left">
                                            <h2 class="section-title white-color"> <a href="#">03. Brooklyn Hotels.</a> </h2>
                                            <p class="fw-500 fsz-12"> 5 <i class="fa fa-star-o theme-color"></i> HOTEL IN UNITED STATES </p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet dolore magna aliquam erat volutpat...                                             
                                        </p>
                                        <a href="#" class="all-show theme-color"> Hotel Detail </a> <a href="#" class="all-show theme-color"> Booking Now </a>
                                    </div>
                                    <div class="content">
                                        <div class="slider-feature"> 
                                            <ul class="hotel-feature">
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-15.png"> <span>CAR PARK</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-16.png"> <span>SWIMMING POOL</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-17.png"> <span>RESTAURANT</span> 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-18.png"> <span>FITNESS CENTER</span> 
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-19.png"> <span>SPA &amp; MASSAGE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="price"> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <del>$350</del> <div> <ins> $275 </ins> <span> PER NIGHT </span> </div> 
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="gray-2">Description provided by: <span class="fw-600"> Vetrov Tourism Division </span> </h5>
                                        <h5 class="gray-2">Website: <a href="#" class="fw-600 gray-2"> www.atlantishotel.com </a> </h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="assets/images/slider/970x500-4.jpg" />
                                    <div class="info white-color">
                                        <div class="title-wrap left">
                                            <h2 class="section-title white-color"> <a href="#">04. La Jolla Hotels.</a> </h2>
                                            <p class="fw-500 fsz-12"> 5 <i class="fa fa-star-o theme-color"></i> HOTEL IN EUROPE </p>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet dolore magna aliquam erat volutpat...                                             
                                        </p>
                                        <a href="#" class="all-show theme-color"> Hotel Detail </a> <a href="#" class="all-show theme-color"> Booking Now </a>
                                    </div>
                                    <div class="content">
                                        <div class="slider-feature"> 
                                            <ul class="hotel-feature">
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-15.png"> <span>CAR PARK</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-16.png"> <span>SWIMMING POOL</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-17.png"> <span>RESTAURANT</span> 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-18.png"> <span>FITNESS CENTER</span> 
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </li>
                                                <li> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <img alt="" src="assets/images/icons/icon-19.png"> <span>SPA &amp; MASSAGE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="price"> 
                                                    <div class="tbl-wrp">
                                                        <div class="text-middle">
                                                            <div class="tbl-cell">
                                                                <del>$350</del> <div> <ins> $275 </ins> <span> PER NIGHT </span> </div> 
                                                            </div>
                                                        </div>
                                                    </div>                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="gray-2">Description provided by: <span class="fw-600"> Vetrov Tourism Division </span> </h5>
                                        <h5 class="gray-2">Website: <a href="#" class="fw-600 gray-2"> www.atlantishotel.com </a> </h5>
                                    </div>
                                </div>
                            </div>
                            <a class="customNextBtn rotated-text"> PREVIOUS DESTINATIONS </a>
                            <a class="customPrevBtn rotated-text"> NEXT DESTINATIONS </a>
                        </div>
                    </div>

                </section>
                <!-- / Recommended Ends -->                 

                <!-- Travel Agency Start -->
                <section class="sec-space agency">
                    <div class="container">
                        <div class="title-wrap-2 text-center">
                            <h2 class="section-title"> Vetrov travel agency. </h2>
                            <p class="fsz-16"> Get the latest deals, reviews & articles. Tailored for the destinations you choose. </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pt-70">
                                <div class="wrap">
                                    <div class="img">
                                        <img alt="" src="assets/images/icons/icon-3.png" />
                                    </div>
                                    <div class="info">
                                        <h2 class="title-4"> Know Better </h2>
                                        <p>Know better, book better and go better on the world's largest travel site. Browse over 350 million candid reviews, opinions, and photos of hotels, restaurants, attractions, and more - all by travelers like you.</p>
                                        <a href="#" class="all-show">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pt-70">
                                <div class="wrap">
                                    <div class="img">
                                        <img alt="" src="assets/images/icons/icon-4.png" />
                                    </div>
                                    <div class="info">
                                        <h2 class="title-4"> Book Better </h2>
                                        <p>Know better, book better and go better on the world's largest travel site. Browse over 350 million candid reviews, opinions, and photos of hotels, restaurants, attractions, and more - all by travelers like you.</p>
                                        <a href="#" class="all-show">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pt-70">
                                <div class="wrap">
                                    <div class="img">
                                        <img alt="" src="assets/images/icons/icon-5.png" />
                                    </div>
                                    <div class="info">
                                        <h2 class="title-4"> Go Better </h2>
                                        <p>Know better, book better and go better on the world's largest travel site. Browse over 350 million candid reviews, opinions, and photos of hotels, restaurants, attractions, and more - all by travelers like you.</p>
                                        <a href="#" class="all-show">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- / Travel Agency Ends -->   

                <!-- Ideal Trip Start -->
                <section class="sec-space ideal-trip">
                    <div class="container">
                        <div class="title-wrap-2 wave-line-2 text-center">
                            <img alt="" src="assets/images/icons/logo-icon.png" />
                            <h2 class="section-title white-color pt-10"> Find & book your ideal trip. </h2>
                            <p> Up to 30% off with Vetrov Insider Deals! </p>
                        </div>
                        <img class="txt-img" alt="" src="assets/images/icons/text-2.png" />
                        <div class="row">
                            <div class="col-md-3 col-sm-6 pb-50">
                                <div class="info">
                                    <img alt="" src="assets/images/icons/icon-6.png" />
                                    <h2 class="title-2 white-color pt-10">1.245+ <span class="fsz-18"> Destinations </span> </h2>
                                    <p>A touch paradise in paradise, lorem ipsum dolor sit amet</p>
                                </div>
                                <a href="#" class="all-show white-color">View all locations</a>
                            </div>
                            <div class="col-md-3 col-sm-6 pb-50">
                                <div class="info">
                                    <img alt="" src="assets/images/icons/icon-7.png" />
                                    <h2 class="title-2 white-color pt-10">2.320+ <span class="fsz-18"> Hotels </span> </h2>
                                    <p>The best hotel from 1 ~ 5 stars hotels around the world</p>
                                </div>
                                <a href="#" class="all-show white-color">View all hotels</a>
                            </div>
                            <div class="col-md-3 col-sm-6 pb-50">
                                <div class="info">
                                    <img alt="" src="assets/images/icons/icon-8.png" />
                                    <h2 class="title-2 white-color pt-10">450+ <span class="fsz-18"> Flights </span> </h2>
                                    <p>The lorem dolarado sit amet cheap flight up to 2.340 locations</p>
                                </div>
                                <a href="#" class="all-show white-color">View all flights</a>
                            </div>
                            <div class="col-md-3 col-sm-6 pb-50">
                                <div class="info">
                                    <p> <img alt="" src="assets/images/icons/icon-9.png" /> <span> Tips for your next vacations </span> </p>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna volutpat. </p>
                                </div>
                                <a href="#" class="all-show white-color">Read more</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Ideal Trip Ends -->

                <!-- Chatbot Icon -->
                <div id="chatbot-icon">
                    <i class="fa fa-comments"></i>
                </div>
                
                <!-- Chatbot UI -->
                <style>
                #chatbot-icon {
                    position: fixed;
                    right: 20px;
                    bottom: 20px;
                    width: 60px;
                    height: 60px;
                    background: #007bff;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
                    z-index: 9999;
                    transition: all 0.3s ease;
                }
                
                #chatbot-icon:hover {
                    background: #0056b3;
                    transform: scale(1.05);
                }
                
                #chatbot-icon i {
                    color: white;
                    font-size: 28px;
                }
                
                #chatbot-box { 
                    position: fixed; 
                    bottom: 90px; 
                    right: 20px; 
                    width: 320px; 
                    background: #fff; 
                    border: 1px solid #ccc; 
                    border-radius: 8px; 
                    box-shadow: 0 2px 15px rgba(0,0,0,0.15); 
                    z-index: 9999; 
                    display: none;
                    overflow: hidden;
                }
                
                #chatbot-header { 
                    background: #007bff; 
                    color: #fff; 
                    padding: 10px 15px; 
                    border-radius: 8px 8px 0 0; 
                    font-weight: bold;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                
                #close-chatbot {
                    cursor: pointer;
                    font-size: 20px;
                }
                
                #chatbot-messages { 
                    height: 220px; 
                    overflow-y: auto; 
                    padding: 10px; 
                    font-size: 15px; 
                }
                
                #chatbot-input-area { 
                    display: flex; 
                    border-top: 1px solid #eee; 
                }
                
                #chatbot-input { 
                    flex: 1; 
                    border: none; 
                    padding: 10px; 
                    font-size: 15px; 
                }
                
                #chatbot-send { 
                    background: #007bff; 
                    color: #fff; 
                    border: none; 
                    padding: 0 18px; 
                    cursor: pointer; 
                    font-size: 15px; 
                }
                
                #chatbot-suggestions { 
                    display: flex; 
                    flex-wrap: wrap; 
                    gap: 6px;
                    padding: 8px; 
                    border-top: 1px solid #eee;
                }
                
                .chatbot-suggestion {
                    background: #f1f1f1; 
                    color: #007bff; 
                    border-radius: 12px; 
                    padding: 4px 10px; 
                    cursor: pointer; 
                    font-size: 14px;
                    transition: background 0.2s;
                }
                
                .chatbot-suggestion:hover { 
                    background: #e0eaff; 
                }
                </style>
                
                <div id="chatbot-box">
                    <div id="chatbot-header">
                        <span>Chatbot hỗ trợ tour</span>
                        <span id="close-chatbot">&times;</span>
                    </div>
                    <div id="chatbot-messages"></div>
                    <div id="chatbot-input-area">
                        <input type="text" id="chatbot-input" placeholder="Hỏi về giá, còn chỗ..." autocomplete="off" />
                        <button id="chatbot-send">Gửi</button>
                    </div>
                    <div id="chatbot-suggestions">
                        <span class="chatbot-suggestion">Giá tour Hà Nội</span>
                        <span class="chatbot-suggestion">Tour Đà Lạt còn chỗ không</span>
                        <span class="chatbot-suggestion">Giá tour Hạ Long</span>
                        <span class="chatbot-suggestion">Tour Đài Loan còn chỗ không</span>
                    </div>
                </div>
                
                <script>
                const chatbotMessages = document.getElementById('chatbot-messages');
                const chatbotInput = document.getElementById('chatbot-input');
                const chatbotSend = document.getElementById('chatbot-send');
                const chatbotIcon = document.getElementById('chatbot-icon');
                const chatbotBox = document.getElementById('chatbot-box');
                const closeChatbot = document.getElementById('close-chatbot');
                
                // Toggle chatbot visibility when icon is clicked
                chatbotIcon.addEventListener('click', function() {
                    chatbotBox.style.display = chatbotBox.style.display === 'none' || chatbotBox.style.display === '' ? 'block' : 'none';
                });
                
                // Close chatbot when X is clicked
                closeChatbot.addEventListener('click', function() {
                    chatbotBox.style.display = 'none';
                });
                
                function appendMessage(msg, isUser) {
                    const div = document.createElement('div');
                    div.style.margin = '8px 0';
                    div.style.textAlign = isUser ? 'right' : 'left';
                    div.innerHTML = isUser ? '<b>Bạn:</b> ' + msg : '<b>Bot:</b> ' + msg;
                    chatbotMessages.appendChild(div);
                    chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
                }
                
                chatbotSend.onclick = function() {
                    const q = chatbotInput.value.trim();
                    if (!q) return;
                    appendMessage(q, true);
                    chatbotInput.value = '';
                    fetch('controllers/ChatbotController.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: 'question=' + encodeURIComponent(q)
                    })
                    .then(res => res.text())
                    .then(answer => {
                        appendMessage(answer, false);
                    });
                };
                
                chatbotInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') chatbotSend.click();
                });
                
                document.querySelectorAll('.chatbot-suggestion').forEach(function(el) {
                    el.onclick = function() {
                        chatbotInput.value = el.textContent;
                        chatbotSend.click();
                    };
                });
                </script>

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

        <!--[if (gte IE 9)|!(IE)]><!-->   
        <script src="assets/js/jquery.cookie.js"></script> 
        <!--<![endif]-->

    </body>

<!-- Mirrored from jthemes.net/themes/f-html/vetrov/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:24:43 GMT -->
</html>