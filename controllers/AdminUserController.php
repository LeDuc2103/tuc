<?php
// controllers/AdminUserController.php
session_start();
include_once dirname(__FILE__) . '/../models/UserModel.php';
if (!isset($_SESSION['user_id']) || (!in_array($_SESSION['user_role'], array('admin','quanly')))) {
    header('Location: login.php');
    exit;
}
$keyword = isset($_GET['keyword']) ? trim(mysql_real_escape_string($_GET['keyword'])) : '';
$users = UserModel::getUsers($keyword);
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; 