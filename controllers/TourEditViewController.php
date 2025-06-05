<?php
// controllers/TourEditViewController.php
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
$row = TourModel::getTourById($maTour);
if (!$row) {
    echo '<div class="alert alert-danger">Không tìm thấy tour!</div>';
    echo '<a href="admin-tour.php" class="btn btn-default">Quay lại</a>';
    exit;
}
