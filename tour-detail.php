<?php
include_once 'controllers/TourDetailController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chi tiết tour du lịch <?php echo $tour ? htmlspecialchars($tour['TenTour']) : ''; ?>">
    <title><?php echo $tour ? htmlspecialchars($tour['TenTour']) : 'Chi tiết tour'; ?> - Vetrov Travel</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugin/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugin/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <style>
        .tour-detail-img {width:100%; max-height:400px; object-fit:cover; border-radius:8px;}
        .tour-gallery img {width:100%; height:180px; object-fit:cover; margin-bottom:15px; border-radius:5px;}
        .tour-detail-title {font-size:30px; color:#0e61b1; margin-bottom:15px; font-weight:700;}
        .tour-detail-price {font-size:24px; color:#e74c3c; margin-bottom:15px; font-weight:600;}
        .tour-detail-desc {margin-bottom:20px; line-height:1.7;}
        .tour-detail-meta {background:#f8f9fa; padding:15px; border-radius:8px; margin:20px 0;}
        .tour-detail-meta i {margin-right:10px; color:#0e61b1;}
        .tour-order-form {background:#f0f8ff; border-radius:8px; padding:25px; box-shadow:0 2px 10px rgba(0,0,0,0.1); margin-bottom:25px;}
        .tour-order-form h3 {margin-top:0; color:#0e61b1; font-weight:600; margin-bottom:20px; border-bottom:2px solid #ddd; padding-bottom:10px;}
        .nav-tabs {border-bottom:2px solid #0e61b1;}
        .nav-tabs>li.active>a {background:#0e61b1; color:#fff; border-color:#0e61b1;}
        .nav-tabs>li>a {font-weight:600; color:#333;}
        .tab-content {background:#fff; border:1px solid #ddd; border-top:none; padding:25px; margin-bottom:30px; border-radius:0 0 8px 8px;}
        .feature-list li {margin-bottom:12px;}
        .review-item {border-bottom:1px solid #eee; padding:15px 0;}
        .review-item:last-child {border-bottom:none;}
        .rating {color:#ffc107; font-size:18px;}
        .tour-card {border:1px solid #eee; border-radius:8px; margin-bottom:20px; transition:all 0.3s ease;}
        .tour-card:hover {transform:translateY(-5px); box-shadow:0 5px 15px rgba(0,0,0,0.1);}
        .tour-card img {height:180px; object-fit:cover; border-radius:8px 8px 0 0; width:100%;}
        .tour-card-content {padding:15px;}
        .tour-card-title {font-size:18px; font-weight:600; color:#0e61b1; margin-bottom:10px;}
        .tour-card-price {font-size:16px; color:#e74c3c; font-weight:600;}
        .gallery-container {display:flex; flex-wrap:wrap; margin:0 -5px;}
        .gallery-item {width:33.33%; padding:5px; cursor:pointer;}
        .btn-tour {background:#0e61b1; color:#fff; padding:10px 20px; border:none; border-radius:4px;}
        .btn-tour:hover {background:#0a4a8a; color:#fff;}
        .tour-highlights {background:#fff8e1; padding:15px; border-radius:8px; margin:20px 0;}
        .tour-highlights h4 {color:#f57c00; margin-top:0; font-weight:600;}
    </style>
</head>
<body id="home" class="wide">
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
                            <li><a href="listing-1.php">Tour du lịch</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ></a>
                                <ul class="dropdown-menu"> 
                                    <li><a href="listing-1.php"> Listing </a></li>  
                                </ul>
                            </li>
                            <!-- <li><a href="#">Flights</a></li>
                            <li><a href="before-you-fly.html">Things to do</a> <div class="bubble"> <span class="hot-tag">hot!</span> </div> </li>   -->
                            <li class="dropdown">
                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gallery </a> -->
                                <ul class="dropdown-menu">  
                                    <!-- <li><a href="portfolio-col-four.html"> Gallery column 4 </a></li>
                                    <li><a href="portfolio-col-three.html"> Gallery column 3 </a></li>
                                    <li><a href="portfolio-col-two.html"> Gallery column 2 </a></li> -->
                                    <li class="dropdown">
                                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu</a> -->
                                        <ul class="dropdown-menu">  
                                            <!-- <li><a href="#">Sub Menu 1</a></li>
                                            <li><a href="#">Sub Menu 2</a></li>     -->
                                            <li class="dropdown">
                                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu 3</a> -->
                                                <ul class="dropdown-menu">  
                                                    <!-- <li><a href="#">Sub Menu 4</a></li>
                                                    <li><a href="#">Sub Menu 5</a></li> 
                                                    <li><a href="#">Sub Menu 6</a></li>  -->
                                                </ul>
                                            </li> 
                                        </ul>
                                    </li> 
                                </ul>
                            </li>
                            <!-- <li><a href="pages-link.html">Pages</a> <div class="bubble"> <span class="green-tag">new!</span> </div></li> -->
                            <li class="dropdown mega-dropdown">
                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Megamenu</a>                                             -->
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

    <main class="wrapper">
        <article class="home-three">
            <!-- Breadcrumb -->
            <section class="breadcrumb-bg bg-4 white-color">
                <div class="site-breadcumb">
                    <div class="container">
                        <div class="title-wrap-2">
                            <h2 class="section-title">CHI TIẾT TOUR DU LỊCH</h2>
                        </div>
                    </div>
                </div>
                <hr class="divider-1">
                <div class="container">
                    <ol class="breadcrumb breadcrumb-menubar">
                        <li> <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a> <a href="tours.php"><i class="fa fa-plane"></i> Tours</a> <?php echo $tour ? htmlspecialchars($tour['TenTour']) : ''; ?></li>
                    </ol>
                </div>
            </section>
            
            <!-- Chi tiết Tour -->
            <section class="product-detail-wrap pt-50 pb-50">
                <div class="container">
                    <?php if (!$tour): ?>
                        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Không tìm thấy tour! <a href="tours.php" class="alert-link">Quay lại danh sách tour</a></div>
                    <?php else: ?>
                    <div class="row">
                        <!-- Phần bên trái - Thông tin chính -->
                        <div class="col-md-8 col-sm-12">
                            <!-- Hình ảnh -->
                            <div class="product-gallery">
                                <img src="assets/images/tour/<?php echo htmlspecialchars($tour['HinhAnh']); ?>" alt="<?php echo htmlspecialchars($tour['TenTour']); ?>" class="img-responsive tour-detail-img">
                                
                                <!-- Gallery nhỏ - 4 ảnh -->
                                <div class="row mt-20 gallery-container">
                                    <?php 
                                    // Giả định có nhiều ảnh tour
                                    $gallery_images = array('gallery1.jpg', 'gallery2.jpg', 'gallery3.jpg', 'gallery4.jpg');
                                    foreach($gallery_images as $img): ?>
                                    <div class="gallery-item">
                                        <img src="assets/images/tour/gallery/<?php echo $img; ?>" class="img-responsive" alt="Tour gallery">
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <!-- Thông tin tour -->
                            <div class="product-info mt-30">
                                <h1 class="tour-detail-title"><?php echo htmlspecialchars($tour['TenTour']); ?></h1>
                                
                                <div class="tour-highlights">
                                    <h4><i class="fa fa-star"></i> Điểm nổi bật của tour</h4>
                                    <ul>
                                        <li>Khám phá cảnh đẹp thiên nhiên hùng vĩ</li>
                                        <li>Trải nghiệm văn hóa đặc sắc của địa phương</li>
                                        <li>Thưởng thức ẩm thực đặc sản vùng miền</li>
                                        <li>Lưu trú tại khách sạn tiêu chuẩn 4 sao</li>
                                    </ul>
                                </div>
                                
                                <div class="tour-detail-price">
                                    <i class="fa fa-tag"></i> Giá: <?php echo number_format($tour['Gia'],0,',','.'); ?> VNĐ/người
                                </div>
                                
                                <div class="tour-detail-meta">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><i class="fa fa-clock-o"></i> <strong>Thời gian:</strong> <?php echo htmlspecialchars($tour['ThoiGian']); ?></p>
                                            <p><i class="fa fa-calendar"></i> <strong>Ngày bắt đầu:</strong> <?php echo date('d/m/Y', strtotime($tour['NgayBatDau'])); ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><i class="fa fa-calendar-check-o"></i> <strong>Ngày kết thúc:</strong> <?php echo date('d/m/Y', strtotime($tour['NgayKetThuc'])); ?></p>
                                            <p><i class="fa fa-info-circle"></i> <strong>Trạng thái:</strong> 
                                                <span class="label <?php echo $tour['TrangThai'] == 'Còn chỗ' ? 'label-success' : 'label-danger'; ?>">
                                                    <?php echo htmlspecialchars($tour['TrangThai']); ?>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tour-detail-desc">
                                    <h4><i class="fa fa-file-text-o"></i> Giới thiệu</h4>
                                    <p><?php echo nl2br(htmlspecialchars($tour['MoTa'])); ?></p>
                                </div>
                            </div>
                            
                            <!-- Tabs thông tin chi tiết -->
                            <div class="product-tabs mt-40">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#lichtrinh" aria-controls="lichtrinh" role="tab" data-toggle="tab"><i class="fa fa-map-o"></i> Lịch trình</a></li>
                                    <li role="presentation"><a href="#dichvu" aria-controls="dichvu" role="tab" data-toggle="tab"><i class="fa fa-check-circle-o"></i> Dịch vụ đi kèm</a></li>
                                    <li role="presentation"><a href="#danhgia" aria-controls="danhgia" role="tab" data-toggle="tab"><i class="fa fa-comment-o"></i> Đánh giá</a></li>
                                    <li role="presentation"><a href="#luuy" aria-controls="luuy" role="tab" data-toggle="tab"><i class="fa fa-lightbulb-o"></i> Lưu ý</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Tab lịch trình -->
                                    <div role="tabpanel" class="tab-pane active" id="lichtrinh">
                                        <h4>Lịch trình chi tiết:</h4>
                                        
                                        <!-- Ngày 1 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Ngày 1: Khởi hành - Khám phá</h4>
                                            </div>
                                            <div class="panel-body">
                                                <p>Sáng: Tập trung tại điểm hẹn, khởi hành đi tour. Trên đường đi, quý khách sẽ được hướng dẫn viên giới thiệu về các địa điểm tham quan.</p>
                                                <p>Trưa: Dùng bữa trưa tại nhà hàng địa phương với các món ăn đặc sản.</p>
                                                <p>Chiều: Tham quan các địa điểm du lịch nổi tiếng. Chụp hình lưu niệm.</p>
                                                <p>Tối: Ăn tối và nghỉ ngơi tại khách sạn.</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Ngày 2 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Ngày 2: Trải nghiệm văn hóa địa phương</h4>
                                            </div>
                                            <div class="panel-body">
                                                <p>Sáng: Ăn sáng tại khách sạn. Tham gia các hoạt động văn hóa đặc sắc của địa phương.</p>
                                                <p>Trưa: Thưởng thức ẩm thực đặc sản.</p>
                                                <p>Chiều: Khám phá các làng nghề truyền thống, mua sắm đặc sản làm quà.</p>
                                                <p>Tối: Tham gia chương trình giao lưu văn nghệ.</p>
                                            </div>
                                        </div>
                                        
                                        <!-- Ngày 3 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Ngày 3: Khám phá thiên nhiên - Kết thúc tour</h4>
                                            </div>
                                            <div class="panel-body">
                                                <p>Sáng: Ăn sáng tại khách sạn. Tham quan cảnh đẹp thiên nhiên.</p>
                                                <p>Trưa: Dùng bữa trưa tại nhà hàng.</p>
                                                <p>Chiều: Khởi hành về điểm xuất phát. Trên đường về ghé mua đặc sản.</p>
                                                <p>Tối: Về đến điểm hẹn, kết thúc chuyến đi. Hẹn gặp lại quý khách!</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Tab dịch vụ -->
                                    <div role="tabpanel" class="tab-pane" id="dichvu">
                                        <h4>Dịch vụ bao gồm:</h4>
                                        <ul class="feature-list list-unstyled">
                                            <li><i class="fa fa-check-circle theme-color"></i> Xe du lịch đời mới máy lạnh</li>
                                            <li><i class="fa fa-check-circle theme-color"></i> Khách sạn tiêu chuẩn 3-4 sao (2 người/phòng)</li>
                                            <li><i class="fa fa-check-circle theme-color"></i> Ăn uống theo chương trình (3 bữa/ngày)</li>
                                            <li><i class="fa fa-check-circle theme-color"></i> Vé tham quan tại các điểm du lịch</li>
                                            <li><i class="fa fa-check-circle theme-color"></i> Hướng dẫn viên chuyên nghiệp, nhiệt tình</li>
                                            <li><i class="fa fa-check-circle theme-color"></i> Nước uống: 1 chai/người/ngày</li>
                                            <li><i class="fa fa-check-circle theme-color"></i> Bảo hiểm du lịch</li>
                                        </ul>
                                        
                                        <h4 class="mt-20">Không bao gồm:</h4>
                                        <ul class="feature-list list-unstyled">
                                            <li><i class="fa fa-times-circle text-danger"></i> Chi phí cá nhân: giặt là, điện thoại, đồ uống...</li>
                                            <li><i class="fa fa-times-circle text-danger"></i> Thuế VAT</li>
                                            <li><i class="fa fa-times-circle text-danger"></i> Các chi phí không được đề cập trong mục "bao gồm"</li>
                                        </ul>
                                    </div>
                                    
                                    <!-- Tab đánh giá -->
                                    <div role="tabpanel" class="tab-pane" id="danhgia">
                                        <?php if (isset($_GET['msg'])): ?>
                                            <?php if ($_GET['msg'] == 'review_success'): ?>
                                                <div class="alert alert-success">Cảm ơn bạn đã đánh giá tour này!</div>
                                            <?php elseif ($_GET['msg'] == 'review_exists'): ?>
                                                <div class="alert alert-warning">Bạn đã gửi đánh giá cho tour này rồi.</div>
                                            <?php elseif ($_GET['msg'] == 'review_notallowed'): ?>
                                                <div class="alert alert-danger">Bạn chỉ có thể đánh giá khi đã đi tour này (đơn hàng đã thanh toán).</div>
                                            <?php elseif ($_GET['msg'] == 'review_fail'): ?>
                                                <div class="alert alert-danger">Gửi đánh giá thất bại. Vui lòng thử lại!</div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if (empty($danhgia)): ?>
                                            <p>Chưa có đánh giá nào cho tour này. Hãy là người đầu tiên đánh giá!</p>
                                        <?php else: ?>
                                            <h4>Đánh giá từ khách hàng:</h4>
                                            <?php foreach($danhgia as $item): ?>
                                            <div class="review-item">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p><strong><?php echo htmlspecialchars($item['HoTen']); ?></strong></p>
                                                        <p class="text-muted"><small><?php echo date('d/m/Y', strtotime($item['NgayDanhGia'])); ?></small></p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="rating">
                                                            <?php 
                                                            for ($i = 1; $i <= 5; $i++) {
                                                                echo $i <= $item['SoSao'] ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>';
                                                            }
                                                            ?>
                                                        </div>
                                                        <p><?php echo nl2br(htmlspecialchars($item['NoiDung'])); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        
                                        <?php if (isset($_SESSION['user_id'])): ?>
                                        <div class="review-form mt-30">
                                            <h4>Gửi đánh giá của bạn:</h4>
                                            <form action="gui-danh-gia.php" method="post">
                                                <input type="hidden" name="tour_id" value="<?php echo $tour['MaTour']; ?>">
                                                <div class="form-group">
                                                    <label>Đánh giá:</label>
                                                    <select name="rating" class="form-control" style="width:200px;">
                                                        <option value="5">5 sao - Xuất sắc</option>
                                                        <option value="4">4 sao - Rất tốt</option>
                                                        <option value="3">3 sao - Tốt</option>
                                                        <option value="2">2 sao - Trung bình</option>
                                                        <option value="1">1 sao - Kém</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nhận xét:</label>
                                                    <textarea name="comment" class="form-control" rows="4" placeholder="Chia sẻ trải nghiệm của bạn..."></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                                            </form>
                                        </div>
                                        <?php else: ?>
                                            <div class="alert alert-info">Vui lòng <a href="login.php">đăng nhập</a> để đánh giá.</div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Tab lưu ý -->
                                    <div role="tabpanel" class="tab-pane" id="luuy">
                                        <h4>Lưu ý khi đi tour:</h4>
                                        <ul class="feature-list">
                                            <li><i class="fa fa-info-circle theme-color"></i> Quý khách vui lòng có mặt tại điểm đón trước 15 phút.</li>
                                            <li><i class="fa fa-info-circle theme-color"></i> Mang theo giấy tờ tùy thân (CMND/CCCD/Hộ chiếu).</li>
                                            <li><i class="fa fa-info-circle theme-color"></i> Mang theo thuốc đặc trị cá nhân nếu có.</li>
                                            <li><i class="fa fa-info-circle theme-color"></i> Mang theo quần áo phù hợp với điều kiện thời tiết tại điểm du lịch.</li>
                                            <li><i class="fa fa-info-circle theme-color"></i> Tuân thủ quy định về an toàn giao thông, phòng cháy chữa cháy.</li>
                                            <li><i class="fa fa-info-circle theme-color"></i> Không mang theo vật dụng cồng kềnh, chất cháy nổ.</li>
                                        </ul>
                                        
                                        <h4 class="mt-20">Chính sách hủy tour:</h4>
                                        <ul class="feature-list">
                                            <li><i class="fa fa-calendar-times-o theme-color"></i> Hủy trước 15 ngày: Hoàn 100% tiền cọc</li>
                                            <li><i class="fa fa-calendar-times-o theme-color"></i> Hủy trước 10 ngày: Hoàn 70% tiền cọc</li>
                                            <li><i class="fa fa-calendar-times-o theme-color"></i> Hủy trước 5 ngày: Hoàn 50% tiền cọc</li>
                                            <li><i class="fa fa-calendar-times-o theme-color"></i> Hủy sau 5 ngày: Không hoàn tiền cọc</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tour liên quan -->
                            <?php if (!empty($tours_lienquan)): ?>
                            <div class="related-tours mt-50">
                                <h3 class="title-2 fw-600">Tour liên quan</h3>
                                <div class="row">
                                    <?php foreach($tours_lienquan as $item): ?>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="tour-card">
                                            <a href="listing-1.html?id=<?php echo $item['MaTour']; ?>">
                                                <img src="assets/images/tour/<?php echo htmlspecialchars($item['HinhAnh']); ?>" alt="<?php echo htmlspecialchars($item['TenTour']); ?>" class="img-responsive">
                                            </a>
                                            <div class="tour-card-content">
                                                <h4 class="tour-card-title">
                                                    <a href="listing-1.html?id=<?php echo $item['MaTour']; ?>"><?php echo htmlspecialchars($item['TenTour']); ?></a>
                                                </h4>
                                                <p class="tour-card-price"><?php echo number_format($item['Gia'],0,',','.'); ?> VNĐ</p>
                                                <p><i class="fa fa-clock-o"></i> <?php echo htmlspecialchars($item['ThoiGian']); ?></p>
                                                <a href="listing-1.html?id=<?php echo $item['MaTour']; ?>" class="btn btn-sm btn-tour">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Phần bên phải - Form đặt tour -->
                        <div class="col-md-4 col-sm-12">
                            <div class="tour-order-form">
                                <h3 class="title"><i class="fa fa-shopping-cart"></i> Đặt tour</h3>
                                <?php if ($order_success && $order_info): ?>
                                    <div class="alert alert-success"><b>Đặt tour thành công!</b> Dưới đây là thông tin đơn hàng của bạn:</div>
                                    <ul class="list-group">
                                        <li class="list-group-item"><b>Tên tour:</b> <?php echo htmlspecialchars($order_info['TenTour']); ?></li>
                                        <li class="list-group-item"><b>Ngày khởi hành:</b> <?php echo htmlspecialchars($order_info['NgayKhoiHanh']); ?></li>
                                        <li class="list-group-item"><b>Người lớn:</b> <?php echo $order_info['NguoiLon']; ?></li>
                                        <li class="list-group-item"><b>Trẻ em:</b> <?php echo $order_info['TreEm']; ?></li>
                                        <li class="list-group-item"><b>Tổng chi phí:</b> <?php echo number_format($order_info['TongGia'],0,',','.'); ?> VNĐ</li>
                                        <li class="list-group-item"><b>Họ tên:</b> <?php echo htmlspecialchars($order_info['HoTen']); ?></li>
                                        <li class="list-group-item"><b>Email:</b> <?php echo htmlspecialchars($order_info['Email']); ?></li>
                                        <li class="list-group-item"><b>Số điện thoại:</b> <?php echo htmlspecialchars($order_info['DienThoai']); ?></li>
                                        <li class="list-group-item"><b>Ghi chú:</b> <?php echo htmlspecialchars($order_info['GhiChu']); ?></li>
                                        <?php if (isset($qr_url)): ?>
                                            <li class="list-group-item" style="text-align:center;">
                                                <div class="alert alert-info mt-20">Vui lòng quét mã QR bên dưới để thanh toán:</div>
                                                <img src="<?php echo $qr_url; ?>" alt="QR thanh toán" style="max-width:100%;height:auto;">
                                                <p><b>Nội dung chuyển khoản:</b> <?php echo htmlspecialchars($noi_dung); ?></p>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="alert alert-info mt-20">Vui lòng kiểm tra email hoặc liên hệ hotline để xác nhận thanh toán!</div>
                                <?php else: ?>
                                <?php if (isset($_SESSION['user_id'])): ?>
                                <form method="post" action="vnpay_create_payment.php">
                                    <input type="hidden" name="tour_id" value="<?php echo $tour['MaTour']; ?>">
                                    <input type="hidden" name="gia_tour" value="<?php echo $tour['Gia']; ?>">
                                    <div class="form-group">
                                        <label for="ho_ten"><i class="fa fa-user"></i> Họ và tên:</label>
                                        <input type="text" name="ho_ten" id="ho_ten" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dien_thoai"><i class="fa fa-phone"></i> Số điện thoại:</label>
                                        <input type="tel" name="dien_thoai" id="dien_thoai" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ngay_khoi_hanh"><i class="fa fa-calendar"></i> Ngày khởi hành:</label>
                                        <input type="date" name="ngay_khoi_hanh" id="ngay_khoi_hanh" class="form-control" value="<?php echo $tour['NgayBatDau']; ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nguoi_lon"><i class="fa fa-user"></i> Người lớn:</label>
                                                <input type="number" min="1" max="20" name="nguoi_lon" id="nguoi_lon" class="form-control" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tre_em"><i class="fa fa-child"></i> Trẻ em:</label>
                                                <input type="number" min="0" max="10" name="tre_em" id="tre_em" class="form-control" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ghi_chu"><i class="fa fa-comment"></i> Ghi chú:</label>
                                        <textarea name="ghi_chu" id="ghi_chu" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-tour btn-block btn-lg"><i class="fa fa-check"></i> Đặt tour ngay</button>
                                </form>
                                <?php else: ?>
                                    <div class="alert alert-info">Vui lòng <a href="login.php">đăng nhập</a> để đặt tour.</div>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Thông tin liên hệ -->
                            <div class="tour-order-form">
                                <h3 class="title"><i class="fa fa-phone-square"></i> Liên hệ tư vấn</h3>
                                <p><i class="fa fa-phone"></i> Hotline: <strong style="font-size:18px;">0123.456.789</strong></p>
                                <p><i class="fa fa-envelope"></i> Email: <strong>info@vetrovtravel.com</strong></p>
                                <p><i class="fa fa-map-marker"></i> Địa chỉ: 123 Đường ABC, Quận XYZ, TP. HCM</p>
                                <hr>
                                <p><i class="fa fa-info-circle"></i> Tư vấn miễn phí 24/7</p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </section>
        </article>
    </main>
    
    <script src="assets/js/plugin/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugin/bootstrap.min.js"></script>
    <script src="assets/js/plugin/owl.carousel.min.js"></script>
    <script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script>
    $(document).ready(function(){
        // Popup gallery
        $('.gallery-container').magnificPopup({
            delegate: '.gallery-item',
            type: 'image',
            gallery:{enabled:true}
        });
        
        // Tính tổng tiền khi thay đổi số lượng
        $('#nguoi_lon, #tre_em').on('change', function(){
            var nguoiLon = parseInt($('#nguoi_lon').val()) || 0;
            var treEm = parseInt($('#tre_em').val()) || 0;
            var giaNguoiLon = <?php echo $tour ? $tour['Gia'] : 0; ?>;
            var giaTreEm = giaNguoiLon * 0.7; // Giả sử giá trẻ em = 70% người lớn
            
            var tongTien = nguoiLon * giaNguoiLon + treEm * giaTreEm;
            $('.tour-order-price').text(tongTien.toLocaleString('vi-VN') + ' VNĐ');
        });
    });
    </script>
</body>
</html>