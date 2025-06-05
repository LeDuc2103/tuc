<?php
// controllers/TourAddController.php
session_start();
include_once __DIR__ . '/../models/TourModel.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = mysql_real_escape_string(trim($_POST['tentour']));
    $gia = (float)$_POST['gia'];
    $thoigian = mysql_real_escape_string(trim($_POST['thoigian']));
    $ngaybd = mysql_real_escape_string($_POST['ngaybatdau']);
    $ngaykt = mysql_real_escape_string($_POST['ngayketthuc']);
    $trangthai = mysql_real_escape_string($_POST['trangthai']);
    $mota = mysql_real_escape_string(trim($_POST['mota']));
    $msg = TourModel::addTour($ten, $gia, $thoigian, $ngaybd, $ngaykt, $trangthai, $mota);
}
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---';
