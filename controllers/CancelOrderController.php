<?php
// controllers/CancelOrderController.php
session_start();
include_once dirname(__FILE__) . '/../ketnoi.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: order-history.php');
    exit;
}
$user_id = (int)$_SESSION['user_id'];
$maDon = (int)$_GET['id'];
$sql = "SELECT * FROM donhang WHERE MaDonHang=$maDon AND MaNguoiDung=$user_id AND TrangThai='dangcho'";
$result = mysql_query($sql, $conn);
if ($result && mysql_num_rows($result) > 0) {
    $sql_update = "UPDATE donhang SET TrangThai='dahuy', NgayCapNhat=NOW() WHERE MaDonHang=$maDon";
    mysql_query($sql_update, $conn);
    header('Location: order-history.php?msg=cancel_success');
    exit;
} else {
    header('Location: order-history.php?msg=cancel_fail');
    exit;
} 