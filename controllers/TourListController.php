<?php
// controllers/TourListController.php
session_start();
include_once dirname(__FILE__) . '/../models/TourModel.php';
// Lấy danh sách tour với điều kiện lọc
$filters = array();
if (!empty($_GET['ten'])) {
    $filters['ten'] = $_GET['ten'];
}
if (!empty($_GET['gia_tu'])) {
    $filters['gia_tu'] = $_GET['gia_tu'];
}
if (!empty($_GET['gia_den'])) {
    $filters['gia_den'] = $_GET['gia_den'];
}
if (!empty($_GET['ngay_bd'])) {
    $filters['ngay_bd'] = $_GET['ngay_bd'];
}
if (!empty($_GET['ngay_kt'])) {
    $filters['ngay_kt'] = $_GET['ngay_kt'];
}
$tours = TourModel::getToursWithFilters($filters);
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---';
