<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-tour.php');
    exit;
}
$maTour = (int)$_GET['id'];
$sql = "DELETE FROM tourdulich WHERE MaTour=$maTour";
if (mysql_query($sql, $conn)) {
    header('Location: admin-tour.php?msg=delete_success');
    exit;
} else {
    header('Location: admin-tour.php?msg=delete_fail');
    exit;
} 