<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = mysql_real_escape_string(trim($_POST['ten']));
    $email = mysql_real_escape_string(trim($_POST['email']));
    $matkhau = md5(trim($_POST['matkhau']));
    $vaitro = mysql_real_escape_string($_POST['vaitro']);
    // Kiểm tra email đã tồn tại chưa
    $sql_check = "SELECT * FROM nguoidung WHERE Email = '$email'";
    $result_check = mysql_query($sql_check, $conn);
    if ($result_check && mysql_num_rows($result_check) > 0) {
        $msg = '<div class="alert alert-danger">Email đã tồn tại!</div>';
    } else {
        $sql_insert = "INSERT INTO nguoidung (Ten, Email, MatKhau, VaiTro) VALUES ('$ten', '$email', '$matkhau', '$vaitro')";
        if (mysql_query($sql_insert, $conn)) {
            header('Location: admin-user.php?msg=add_success');
            exit;
        } else {
            $msg = '<div class="alert alert-danger">Thêm tài khoản thất bại!</div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thêm tài khoản mới</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:500px;">
    <div style="position:absolute;top:20px;right:40px;">
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <div class="admin-menu" style="margin-bottom:20px;">
        <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
        <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
        <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
        <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
    </div>
    <h2>Thêm tài khoản mới</h2>
    <?php echo $msg; ?>
    <form method="post">
        <div class="form-group">
            <label>Họ tên:</label>
            <input type="text" name="ten" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" name="matkhau" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Vai trò:</label>
            <select name="vaitro" class="form-control">
                <option value="khachhang">Khách hàng</option>
                <option value="nhanvien">Nhân viên</option>
                <option value="quanly">Quản lý</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Thêm tài khoản</button>
        <a href="admin-user.php" class="btn btn-default">Quay lại</a>
    </form>
</div>
</body>
</html> 