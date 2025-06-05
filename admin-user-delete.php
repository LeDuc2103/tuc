<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-user.php');
    exit;
}
$maUser = (int)$_GET['id'];
// Không cho phép xóa chính mình
if ($maUser == $_SESSION['user_id']) {
    header('Location: admin-user.php?msg=delete_self');
    exit;
}
$sql = "DELETE FROM nguoidung WHERE MaNguoiDung=$maUser";
if (mysql_query($sql, $conn)) {
    header('Location: admin-user.php?msg=delete_success');
    exit;
} else {
    header('Location: admin-user.php?msg=delete_fail');
    exit;
} 