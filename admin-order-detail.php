<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-order.php');
    exit;
}
$maDon = (int)$_GET['id'];
$sql = "SELECT d.*, t.TenTour, t.HinhAnh, t.Gia, t.ThoiGian, t.NgayBatDau, t.NgayKetThuc, n.Ten AS TenKH, n.Email, n.DienThoai FROM donhang d
        LEFT JOIN tourdulich t ON d.MaTour = t.MaTour
        LEFT JOIN nguoidung n ON d.MaNguoiDung = n.MaNguoiDung
        WHERE d.MaDonHang = $maDon";
$result = mysql_query($sql, $conn);
if (!$result || mysql_num_rows($result) == 0) {
    echo '<div class="alert alert-danger">Không tìm thấy đơn hàng!</div>';
    echo '<a href="admin-order.php" class="btn btn-default">Quay lại</a>';
    exit;
}
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:700px;">
    <h2>Chi tiết đơn hàng #<?php echo $row['MaDonHang']; ?></h2>
    <table class="table table-bordered">
        <tr><th>Mã đơn hàng</th><td><?php echo $row['MaDonHang']; ?></td></tr>
        <tr><th>Khách hàng</th><td><?php echo htmlspecialchars($row['TenKH']); ?> (<?php echo htmlspecialchars($row['Email']); ?>, <?php echo htmlspecialchars($row['DienThoai']); ?>)</td></tr>
        <tr><th>Tên tour</th><td><?php echo htmlspecialchars($row['TenTour']); ?></td></tr>
        <tr><th>Ảnh tour</th><td><img src="assets/images/tour/<?php echo htmlspecialchars($row['HinhAnh']); ?>" style="max-width:200px;"></td></tr>
        <tr><th>Giá tour</th><td><?php echo number_format($row['Gia'],0,',','.'); ?> VNĐ</td></tr>
        <tr><th>Thời gian tour</th><td><?php echo htmlspecialchars($row['ThoiGian']); ?></td></tr>
        <tr><th>Ngày khởi hành</th><td><?php echo date('d/m/Y', strtotime($row['NgayBatDau'])); ?></td></tr>
        <tr><th>Ngày kết thúc</th><td><?php echo date('d/m/Y', strtotime($row['NgayKetThuc'])); ?></td></tr>
        <tr><th>Số người</th><td><?php echo $row['SoLuongNguoi']; ?></td></tr>
        <tr><th>Tổng tiền</th><td><?php echo number_format($row['TongGia'],0,',','.'); ?> VNĐ</td></tr>
        <tr><th>Trạng thái</th><td><?php
            if($row['TrangThai']=='dangcho') echo '<span class="label label-warning">Chờ duyệt</span>';
            elseif($row['TrangThai']=='dathanhtoan') echo '<span class="label label-success">Đã thanh toán</span>';
            elseif($row['TrangThai']=='dahuy') echo '<span class="label label-danger">Đã hủy</span>';
            else echo htmlspecialchars($row['TrangThai']);
        ?></td></tr>
        <tr><th>Ngày đặt</th><td><?php echo $row['NgayTao']; ?></td></tr>
        <tr><th>Cập nhật cuối</th><td><?php echo $row['NgayCapNhat']; ?></td></tr>
    </table>
    <a href="admin-order.php" class="btn btn-default">Quay lại</a>
</div>
</body>
</html> 