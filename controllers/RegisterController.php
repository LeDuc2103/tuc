<?php
// controllers/RegisterController.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once dirname(__FILE__) . '/../ketnoi.php';
$thongbao = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM nguoidung WHERE Email = '" . mysql_real_escape_string($email) . "'";
    $result = mysql_query($sql, $conn);
    if (!$result) {
        die("Lỗi truy vấn: " . mysql_error());
    }
    if (mysql_num_rows($result) > 0) {
        $thongbao = "Email đã tồn tại!";
    } else {
        $hashed = md5($password);
        $sql = "INSERT INTO nguoidung (Ten, Email, MatKhau, VaiTro) VALUES ('" . mysql_real_escape_string($email) . "', '" . mysql_real_escape_string($email) . "', '$hashed', 'khachhang')";
        if (mysql_query($sql, $conn)) {
            $thongbao = "Đăng ký thành công!";
        } else {
            $thongbao = "Lỗi đăng ký: " . mysql_error();
        }
    }
} 