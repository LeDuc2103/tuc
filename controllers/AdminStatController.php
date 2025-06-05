<?php
// controllers/AdminStatController.php
session_start();
include_once dirname(__FILE__) . '/../models/StatModel.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
$month = isset($_GET['month']) ? (int)$_GET['month'] : date('m');
$year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');
$data1 = StatModel::getOrderStats($month, $year);
$data2 = StatModel::getTourStats();
$data3 = StatModel::getUserStats();
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; 