<?php
// listing-1.php chỉ làm nhiệm vụ view, lấy dữ liệu từ controller
include_once 'controllers/TourListController.php';
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
<!-- Mirrored from jthemes.net/themes/f-html/vetrov/listing-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:25:15 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="Md. Siful Islam, Jtheme">

        <title>Danh sách tour du lịch</title>

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
        <style>
            .tour-card {border:1px solid #eee; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px #eee; margin-bottom:30px; background:#fff;}
            .tour-card img {width:100%;height:200px;object-fit:cover;}
            .tour-card-body {padding:16px;}
            .tour-card h3 {margin:0 0 10px 0; font-size:20px; color:#007bff;}
            .tour-card .theme-btn {display:inline-block;margin-top:10px;background:#007bff;color:#fff;padding:8px 16px;border-radius:4px;text-decoration:none;}
            .tour-card .theme-btn:hover {background:#0056b3;}
        </style>
    </head>

    <body id="home" class="wide" style="background:#f7f7f7;">
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
                                    <?php if (isset($_SESSION['user_email'])): ?>
                                        <li><span>Xin chào, <b><?php echo htmlspecialchars($_SESSION['user_email']); ?></b></span></li>
                                        <li><a href="order-history.php">Đơn hàng</a></li>
                                        <li><a href="logout.php">Đăng xuất</a></li>
                                    <?php else: ?>
                                        <li><a href="register.php">Join</a></li>
                                        <li><a href="login.php">Login</a></li>
                                    <?php endif; ?>
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
                                <a href="index.php">  <img alt="" src="assets/images/logo/logo-1.png" /> </a>
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
                                                <li><a href="index.php"> Home </a></li>  
                                                
                                            </ul>
                                        </li>                         
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >TOUR</a>
                                            <ul class="dropdown-menu"> 
                                                <li><a href="listing-1.php"> Listing </a></li>  
                                                
                                            </ul>
                                        </li>
                                        <!-- <li><a href="#">Flights</a></li> -->
                                        <li></li>  
                                        <li class="dropdown">
                                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gallery </a>
                                            <ul class="dropdown-menu">  
                                                <li><a href="portfolio-col-four.html"> Gallery column 4 </a></li>
                                                <li><a href="portfolio-col-three.html"> Gallery column 3 </a></li>
                                                <li><a href="portfolio-col-two.html"> Gallery column 2 </a></li> -->
                                                <!-- <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu</a>
                                                    <ul class="dropdown-menu">  
                                                        <li><a href="#">Sub Menu 1</a></li>
                                                        <li><a href="#">Sub Menu 2</a></li>    
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu 3</a>
                                                            <ul class="dropdown-menu">  
                                                                <li><a href="#">Sub Menu 4</a></li>
                                                                <li><a href="#">Sub Menu 5</a></li> 
                                                                <li><a href="#">Sub Menu 6</a></li>  -->
                                                            </ul>
                                                        </li> 
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </li>
                                        <!-- <li><a href="pages-link.html">Pages</a> <div class="bubble"> <span class="green-tag">new!</span> </div></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Megamenu</a>                                             -->
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
                                <h2 class="section-title">Danh sách tour du lịch</h2>
                            </div>
                        </div> 
                    </div>
                    <hr class="divider-1">
                    <div class="container ">    
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> <a href="#"> EUROPE   </a> <a href="#"> NORT HOLLAND </a> AMATERDAM HOTELS  </li>                             
                        </ol>
                    </div>
                </section>
                <!--Breadcrumb Section End-->

                <!-- Hotel Price Finder Start -->
                <section class="theme-color-bg price-finder">
                    <div class="container">
                        <form method="get" class="row" style="margin-bottom: 0; margin-top: 20px;">
                            <div class="col-md-3">
                                <input type="text" name="ten" class="form-control" placeholder="Tên tour" value="<?php echo isset($_GET['ten']) ? htmlspecialchars($_GET['ten']) : ''; ?>">
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="gia_tu" class="form-control" placeholder="Giá từ" value="<?php echo isset($_GET['gia_tu']) ? htmlspecialchars($_GET['gia_tu']) : ''; ?>">
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="gia_den" class="form-control" placeholder="Giá đến" value="<?php echo isset($_GET['gia_den']) ? htmlspecialchars($_GET['gia_den']) : ''; ?>">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="ngay_bd" class="form-control" value="<?php echo isset($_GET['ngay_bd']) ? htmlspecialchars($_GET['ngay_bd']) : ''; ?>">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="ngay_kt" class="form-control" value="<?php echo isset($_GET['ngay_kt']) ? htmlspecialchars($_GET['ngay_kt']) : ''; ?>">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary" style="width:100%">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- / Hotel Price Finder Ends -->   

                <!-- Listing Start -->
                <section class="listing-wrap pt-50">
                    <div class="container">
                        <div class="text-center"> 
                            <span class="gray-2 fw-500">Last update 20 January 2017 by vetrov travel agency</span>
                        </div>
                        <div class="clearfix">
                            <div class="col-md-3 col-sm-4 pt-50 no-padding listing-sidebar">
                                <div class="widget-map">                          
                                    <div class="contact-map">  <div id="map"></div> </div>
                                </div>
                                <div class="theme-color-bg">
                                    <div class="widget-nav">
                                        <h3 class="title">ACCOMMODATION</h3>
                                        <ul class="list">
                                            <li> <a href="#"> 302.  B&B  and Inns </a> </li>
                                            <li> <a href="#"> 105.  Speciality  </a> </li>
                                            <li> <a href="#"> 210.  Lodging </a> </li>
                                            <li> <a href="#"> 175.  Holiday Rental </a> </li>
                                            <li> <a href="#"> 24.  Special Offer </a> </li>
                                        </ul>
                                    </div>
                                    <div class="widget-nav">
                                        <h3 class="title">HOTEL CLASS</h3>
                                        <ul class="grad">
                                            <li class="form-group">
                                                <label class="checkbox-inline">
                                                    <input value="" checked=""  type="checkbox"> 
                                                    <span>
                                                        <span class="rating">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                        </span>
                                                    </span>
                                                </label> 
                                            </li>
                                            <li class="form-group">
                                                <label class="checkbox-inline">
                                                    <input value="" type="checkbox"> 
                                                    <span>
                                                        <span class="rating">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star"></span>
                                                        </span>
                                                    </span>
                                                </label> 
                                            </li>
                                            <li class="form-group">
                                                <label class="checkbox-inline">
                                                    <input value="" type="checkbox"> 
                                                    <span>
                                                        <span class="rating">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                        </span>
                                                    </span>
                                                </label> 
                                            </li>
                                            <li class="form-group">
                                                <label class="checkbox-inline">
                                                    <input value="" type="checkbox"> 
                                                    <span>
                                                        <span class="rating">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                        </span>
                                                    </span>
                                                </label> 
                                            </li>
                                            <li class="form-group">
                                                <label class="checkbox-inline">
                                                    <input value="" type="checkbox"> 
                                                    <span>
                                                        <span class="rating">
                                                            <span class="star active"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                        </span>
                                                    </span>
                                                </label> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget-nav">
                                        <h3 class="title">NEIGHBOURHOODS</h3>
                                        <ul class="list">
                                            <li class="alert"> <a href="#"> City Center <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Museumplein <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Dam Square <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Vondelpark <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>                                            
                                        </ul>
                                        <a class="more" href="#">MORE +</a>
                                    </div>
                                    <div class="widget-nav">
                                        <h3 class="title">HOTEL STYLE</h3>
                                        <ul class="list">
                                            <li class="alert"> <a href="#"> Badget <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Mid-Range <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Luxury <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Best Value <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>                                            
                                        </ul>
                                        <a class="more" href="#">MORE +</a>
                                    </div>
                                    <div class="widget-nav">
                                        <h3 class="title">AMENITIES</h3>
                                        <ul class="list">
                                            <li class="alert"> <a href="#"> Free Wifi <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Free Breakfast <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Free Parking <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>
                                            <li class="alert"> <a href="#"> Fitness Center <span class="fa fa-times-circle"  data-dismiss="alert"></span> </a> </li>                                            
                                        </ul>
                                        <a class="more" href="#">MORE +</a>
                                    </div>
                                </div>

                                <div class="widget-deal flex-item white-color">
                                    <img alt="" src="assets/images/gallery/285x400-1.jpg" />
                                    <div class="flex-wrap">
                                        <div class="flex-caption top">                                                
                                            <div class="info"> 
                                                <span class="theme-color">Stay 2 night at</span>
                                                <h2 class="title-2"> MARINA HOTEL </h2> 
                                                <p class="fsz-11 fw-500">GET BEST DEAL UP TO -30% IN AUGUST ~ OCTOBER 2016</p>                                             
                                                <a href="#" class="btn">HOTEL DEAL</a>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-8 pt-50 style-one no-padding">
                                <div class="row">
                                    <?php if (empty($tours)): ?>
                                        <div class="col-12"><p>Không có tour nào!</p></div>
                                    <?php else: ?>
                                        <?php foreach ($tours as $tour): ?>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="tour-card">
                                                    <img src="assets/images/tour/<?php echo htmlspecialchars($tour['HinhAnh']); ?>" alt="<?php echo htmlspecialchars($tour['TenTour']); ?>">
                                                    <div class="tour-card-body">
                                                        <h3><?php echo htmlspecialchars($tour['TenTour']); ?></h3>
                                                        <p><b>Giá:</b> <?php echo number_format($tour['Gia'],0,',','.'); ?> VNĐ</p>
                                                        <p><b>Thời gian:</b> <?php echo htmlspecialchars($tour['ThoiGian']); ?></p>
                                                        <p><b>Ngày bắt đầu:</b> <?php echo htmlspecialchars($tour['NgayBatDau']); ?></p>
                                                        <p><b>Ngày kết thúc:</b> <?php echo htmlspecialchars($tour['NgayKetThuc']); ?></p>
                                                        <a href="tour-detail.php?id=<?php echo $tour['MaTour']; ?>" class="theme-btn">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <ul class="pagination-1 list-inline">  
                                        <li class="prv"> <a href="#"> PREV </a> </li>
                                        <li> <a href="#" class="active"> 01. </a> </li>
                                        <li> <a href="#"> 02. </a> </li>
                                        <li> <a href="#"> 03. </a> </li>   
                                        <li> <a href="#"> 04. </a> </li>
                                        <li> <a href="#"> 05. </a> </li>   
                                        <li class="nxt"> <a href="#"> NEXT </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-1">
                    </div>                
                </section>
                <!-- / Listing Ends -->   

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

        <!-- Chatbot Icon -->
        <div id="chatbot-icon">
            <i class="fa fa-comments"></i>
        </div>
        
        <!-- Chatbot Form Widget -->
        <div id="chatbot-form-widget" style="display: none;">
            <div class="chatbot-header">
                <span>Hỗ trợ trực tuyến</span>
                <span class="close-chatbot">&times;</span>
            </div>
            <form method="post" action="chatbot.php" target="_blank">
                <input type="text" name="message" placeholder="Bạn muốn hỏi gì?" required>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
        
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
        
        #chatbot-form-widget {
            position: fixed;
            right: 20px;
            bottom: 90px;
            width: 320px;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            z-index: 9999;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .chatbot-header {
            background: #007bff;
            color: white;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .close-chatbot {
            cursor: pointer;
            font-size: 20px;
        }
        
        #chatbot-form-widget form {
            display: flex;
            padding: 12px;
            gap: 8px;
        }
        
        #chatbot-form-widget input[type="text"] {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px 12px;
        }
        
        #chatbot-form-widget button {
            min-width: 60px;
        }
        </style>
        
        <script>
            $(document).ready(function() {
                // Toggle chatbot form when icon is clicked
                $("#chatbot-icon").click(function() {
                    $("#chatbot-form-widget").toggle();
                });
                
                // Close chatbot when X is clicked
                $(".close-chatbot").click(function() {
                    $("#chatbot-form-widget").hide();
                });
            });
        </script>

    </body>

<!-- Mirrored from jthemes.net/themes/f-html/vetrov/listing-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:25:19 GMT -->
</html>