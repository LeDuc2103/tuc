
<?php
  if (!isset($_SESSION)) session_start();
  ?>
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    
<!-- Mirrored from jthemes.net/themes/f-html/vetrov/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:25:28 GMT -->
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
                <section class="breadcrumb-bg bg-2 white-color">   
                    <div class="site-breadcumb ">  
                        <div class="container ">     
                            <div class="title-wrap-2">
                                <h2 class="section-title"> ABOUT US </h2>
                            </div>
                        </div> 
                    </div>
                    <hr class="divider-1">
                    <div class="container ">    
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="#"> Home </a> About Us  </li>                             
                        </ol>
                    </div>
                </section>
                <!--Breadcrumb Section End-->

                <!-- About Us Start -->
                <section class="sec-space-top about-us">
                    <div class="container">
                        <div class="col-md-6">
                            <div class="img">
                                <img alt="" src="assets/images/gallery/370x470-1.jpg" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <h2 class="section-title pb-10"> We are vetrov travel agency, the best partner for your awesome trip.  </h2>
                                <p class="fsz-16">Know better, book better and go better on the world's largest travel site. Browse over 350 million candid reviews, opinions, and photos of hotels, restaurants, attractions, and more - all by travelers like you. </p>
                                <img class="sign" src="assets/images/icons/sign.png" />
                                <h4 class="">ALAN SCHENIDER</h4>
                                <h6 class="theme-color">VETROV OWNER</h6>
                            </div>                            
                        </div>
                    </div>
                </section>
                <!-- / About Us Ends -->   

                <!-- Travel Agency Start -->
                <section class="sec-space-bottom agency">
                    <div class="container">                      
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

                <!-- Testimonials Start -->
                <section class="testimonials-2 light-bg">                      
                    <div class="container sec-space rel-div ">
                        <div class="title-wrap-2 text-center">
                            <img alt="" src="assets/images/icons/comment.png" />
                            <h2 class="section-title pt-10"> What travelers are saying about us. </h2>
                            <p class="fsz-16"> Travelers testimonial, Millions of users have shared their reviews of hotels, bed & breakfasts, inns, and more </p>
                        </div>
                        <div class="pb-50">
                            <div class="owl-carousel testimonials-slider-2 dots-2">
                                <div class="item text-center pt-30"> 
                                    <img src="assets/images/author/85x85-1.png" alt="" />
                                    <div class="content">
                                        <span class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        </span>
                                        <h5 class="name"> MICHEL D GUESERENS</h5>
                                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <strong> diam nonummy nibh </strong> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "</p>
                                    </div>
                                </div>
                                <div class="item text-center pt-30"> 
                                    <img src="assets/images/author/85x85-2.png" alt="" />
                                    <div class="content">
                                        <span class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        </span>
                                        <h5 class="name"> MICHEL D GUESERENS</h5>
                                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <strong> diam nonummy nibh </strong> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "</p>
                                    </div>
                                </div>
                                <div class="item text-center pt-30"> 
                                    <img src="assets/images/author/85x85-3.png" alt="" />
                                    <div class="content">
                                        <span class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        </span>
                                        <h5 class="name"> MICHEL D GUESERENS</h5>
                                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <strong> diam nonummy nibh </strong> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "</p>
                                    </div>
                                </div>
                                <div class="item text-center pt-30"> 
                                    <img src="assets/images/author/85x85-1.png" alt="" />
                                    <div class="content">
                                        <span class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        </span>
                                        <h5 class="name"> MICHEL D GUESERENS</h5>
                                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <strong> diam nonummy nibh </strong> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "</p>
                                    </div>
                                </div>
                                <div class="item text-center pt-30"> 
                                    <img src="assets/images/author/85x85-2.png" alt="" />
                                    <div class="content">
                                        <span class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        </span>
                                        <h5 class="name"> MICHEL D GUESERENS</h5>
                                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <strong> diam nonummy nibh </strong> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "</p>
                                    </div>
                                </div>
                                <div class="item text-center pt-30"> 
                                    <img src="assets/images/author/85x85-3.png" alt="" />
                                    <div class="content">
                                        <span class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        </span>
                                        <h5 class="name"> MICHEL D GUESERENS</h5>
                                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <strong> diam nonummy nibh </strong> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- / Testimonials Ends -->  

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

                <!-- Patners Start -->
                <section class="sec-space-bottom pt-50 patners">
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

                <!-- Subscribe Start -->
                <section class="newsletter">
                    <div class="light-bg">
                        <div class="container theme-color-bg">
                            <form class="newsletter-form">
                                <div class="col-md-3 col-sm-12">
                                    <p class="info"> <strong> Subscribe </strong> to our free weekly TripWatch newsletter! </p>
                                </div>
                                <div class="col-md-7 col-sm-8">
                                    <input placeholder="Your email address" required="" class="" type="text">
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <button class="theme-btn btn-2" type="submit"> Submit Newsletter </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- / Subscribe Ends -->  

            </article>
            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="page-footer">             
                <div class="light-bg sec-space-top pb-50">
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

        <!--[if (gte IE 9)|!(IE)]><!-->   
        <script src="assets/js/jquery.cookie.js"></script> 
        <!--<![endif]-->

    </body>

<!-- Mirrored from jthemes.net/themes/f-html/vetrov/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Apr 2025 02:25:28 GMT -->
</html>