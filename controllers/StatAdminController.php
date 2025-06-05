<?php
// controllers/StatAdminController.php
session_start();
include_once __DIR__ . '/../controllers/StatController.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
$stats = StatController::index();
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---';
