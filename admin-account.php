<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'quanly') {
    header('Location: index.php');
    exit();
}
?>
 