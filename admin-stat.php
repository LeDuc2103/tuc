<?php
include_once 'controllers/AdminStatController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thống kê doanh thu</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:800px;">
    <h2>Thống kê doanh thu</h2>
    <div style="position:absolute;top:20px;right:40px;">
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <div class="admin-menu" style="margin-bottom:20px;">
        <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
        <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
        <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
        <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
    </div>
    <form method="get" class="form-inline" style="margin-bottom:20px;">
        <label>Tháng:</label>
        <select name="month" class="form-control">
            <?php for($m=1;$m<=12;$m++): ?>
                <option value="<?php echo $m; ?>" <?php if($m==$month) echo 'selected'; ?>><?php echo $m; ?></option>
            <?php endfor; ?>
        </select>
        <label>Năm:</label>
        <select name="year" class="form-control">
            <?php for($y=date('Y')-5;$y<=date('Y');$y++): ?>
                <option value="<?php echo $y; ?>" <?php if($y==$year) echo 'selected'; ?>><?php echo $y; ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit" class="btn btn-primary">Lọc</button>
    </form>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-info">
                <b>Tổng số đơn đã thanh toán:</b> <?php echo $data1['total_order'] ? $data1['total_order'] : 0; ?> <br>
                <b>Tổng doanh thu:</b> <?php echo $data1['total_revenue'] ? number_format($data1['total_revenue'],0,',','.') : 0; ?> VNĐ
            </div>
        </div>
        <div class="col-md-6">
            <div class="alert alert-success">
                <b>Tổng số tour:</b> <?php echo $data2['total_tour']; ?> <br>
                <b>Tổng số khách hàng:</b> <?php echo $data3['total_user']; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html> 