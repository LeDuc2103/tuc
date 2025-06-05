<?php
// controllers/AdminContentController.php
session_start();
include_once dirname(__FILE__) . '/../models/ContentModel.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
$posts = ContentModel::getAllPosts();
$user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---';
$user_role = isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; 