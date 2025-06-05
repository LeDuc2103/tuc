<?php
// controllers/OrderHistoryController.php
session_start();
include_once dirname(__FILE__) . '/../ketnoi.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
$user_id = (int)$_SESSION['user_id'];
$sql = "SELECT d.*, t.TenTour, t.HinhAnh, t.NgayBatDau FROM donhang d JOIN tourdulich t ON d.MaTour = t.MaTour WHERE d.MaNguoiDung = $user_id ORDER BY d.NgayTao DESC";
$result = mysql_query($sql, $conn);
$orders = array();
if ($result) {
    while ($row = mysql_fetch_assoc($result)) {
        $orders[] = $row;
    }
} 