<?php
// controllers/AdminOrderController.php
session_start();
include_once dirname(__FILE__) . '/../models/OrderModel.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
$keyword = isset($_GET['keyword']) ? trim(mysql_real_escape_string($_GET['keyword'])) : '';
$orders = OrderModel::getOrders($keyword);
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; 