<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-content.php');
    exit;
}
$maBV = (int)$_GET['id'];
$sql = "DELETE FROM baiviet WHERE MaBaiViet=$maBV";
if (mysql_query($sql, $conn)) {
    header('Location: admin-content.php?msg=delete_success');
    exit;
} else {
    header('Location: admin-content.php?msg=delete_fail');
    exit;
} 