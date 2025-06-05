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
// Kiểm tra trạng thái đơn hàng
$sql = "SELECT TrangThai FROM donhang WHERE MaDonHang=$maDon";
$result = mysql_query($sql, $conn);
if ($result && mysql_num_rows($result) > 0) {
    $row = mysql_fetch_assoc($result);
    if ($row['TrangThai'] == 'dangcho') {
        $sql_update = "UPDATE donhang SET TrangThai='dathanhtoan', NgayCapNhat=NOW() WHERE MaDonHang=$maDon";
        mysql_query($sql_update, $conn);
        header('Location: admin-order.php?msg=approve_success');
        exit;
    }
}
header('Location: admin-order.php?msg=approve_fail');
exit; 