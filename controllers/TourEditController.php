<?php
// controllers/TourEditController.php
session_start();
include_once __DIR__ . '/../models/TourModel.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-tour.php');
    exit;
}
$maTour = (int)$_GET['id'];
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = mysql_real_escape_string(trim($_POST['tentour']));
    $gia = (float)$_POST['gia'];
    $thoigian = mysql_real_escape_string(trim($_POST['thoigian']));
    $ngaybd = mysql_real_escape_string($_POST['ngaybatdau']);
    $ngaykt = mysql_real_escape_string($_POST['ngayketthuc']);
    $trangthai = mysql_real_escape_string($_POST['trangthai']);
    $mota = mysql_real_escape_string(trim($_POST['mota']));
    $msg = TourModel::editTour($maTour, $ten, $gia, $thoigian, $ngaybd, $ngaykt, $trangthai, $mota);
}
$row = TourModel::getTourById($maTour);
if (!$row) {
    echo '<div class="alert alert-danger">Không tìm thấy tour!</div>';
    echo '<a href="admin-tour.php" class="btn btn-default">Quay lại</a>';
    exit;
}
