<?php
include_once 'controllers/AdminOrderController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:1100px;">
    <div style="margin-bottom:15px; color:#555; font-size:15px;">
        <b>Đăng nhập:</b> <?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---'; ?>
        (<b>Vai trò:</b> <?php echo isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; ?>)
    </div>
    <div style="position:absolute;top:20px;right:40px;">
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <h2>Quản lý đơn hàng</h2>
    <div class="admin-menu" style="margin-bottom:20px;">
        <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
        <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
        <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
        <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
    </div>
    <form method="get" class="form-inline mb-3" style="margin-bottom:20px;">
        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm tên tour, tên khách hoặc email..." value="<?php echo htmlspecialchars($keyword); ?>">
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        <a href="admin-order.php" class="btn btn-default">Xem tất cả</a>
    </form>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Mã đơn</th>
                <th>Tên tour</th>
                <th>Khách hàng</th>
                <th>Ngày đặt</th>
                <th>Số người</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($orders)): foreach($orders as $row): ?>
            <tr>
                <td><?php echo $row['MaDonHang']; ?></td>
                <td><?php echo htmlspecialchars($row['TenTour']); ?></td>
                <td><?php echo htmlspecialchars($row['TenKH']); ?> <br><small><?php echo htmlspecialchars($row['Email']); ?></small></td>
                <td><?php echo $row['NgayTao']; ?></td>
                <td><?php echo $row['SoLuongNguoi']; ?></td>
                <td><?php echo number_format($row['TongGia'],0,',','.'); ?> VNĐ</td>
                <td>
                    <?php
                        if($row['TrangThai']=='dangcho') echo '<span class="label label-warning">Chờ duyệt</span>';
                        elseif($row['TrangThai']=='dathanhtoan') echo '<span class="label label-success">Đã thanh toán</span>';
                        elseif($row['TrangThai']=='dahuy') echo '<span class="label label-danger">Đã hủy</span>';
                        else echo htmlspecialchars($row['TrangThai']);
                    ?>
                </td>
                <td>
                    <?php if (
                        $row['TrangThai']=='dangcho'):
                    ?>
                        <a href="admin-order-approve.php?id=<?php echo $row['MaDonHang']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Duyệt đơn này?');">Duyệt</a>
                        <a href="admin-order-cancel.php?id=<?php echo $row['MaDonHang']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hủy đơn này?');">Hủy</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr><td colspan="8" class="text-center">Không tìm thấy đơn hàng nào.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html> 