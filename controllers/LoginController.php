<?php
// controllers/LoginController.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once dirname(__FILE__) . '/../ketnoi.php';
session_start();
$thongbao = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $hashed = md5($password);
    $sql = "SELECT * FROM nguoidung WHERE Email = '" . mysql_real_escape_string($email) . "' AND MatKhau = '$hashed'";
    $result = mysql_query($sql, $conn);
    if (!$result) {
        die("Lỗi truy vấn: " . mysql_error());
    }
    if (mysql_num_rows($result) > 0) {
        $user = mysql_fetch_assoc($result);
        $_SESSION['user_id'] = $user['MaNguoiDung'];
        $_SESSION['user_email'] = $user['Email'];
        $_SESSION['user_role'] = $user['VaiTro'];
        $thongbao = "Đăng nhập thành công!";
        if ($user['VaiTro'] == 'quanly') {
            header("Location: admin-user.php");
            exit;
        } elseif ($user['VaiTro'] == 'nhanvien') {
            header("Location: admin-order.php");
            exit;
        } else {
            header("Location: index.php");
            exit;
        }
    } else {
        $thongbao = "Email hoặc mật khẩu không đúng!";
    }
} 