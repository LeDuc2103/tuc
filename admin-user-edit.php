<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-user.php');
    exit;
}
$maUser = (int)$_GET['id'];
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = mysql_real_escape_string(trim($_POST['ten']));
    $email = mysql_real_escape_string(trim($_POST['email']));
    $vaitro = mysql_real_escape_string($_POST['vaitro']);
    $sql_update = "UPDATE nguoidung SET Ten='$ten', Email='$email', VaiTro='$vaitro' WHERE MaNguoiDung=$maUser";
    if (mysql_query($sql_update, $conn)) {
        header('Location: admin-user.php?msg=edit_success');
        exit;
    } else {
        $msg = '<div class=\'alert alert-danger\'>Cập nhật thất bại!<br>' . mysql_error($conn) . '</div>';
    }
}
$sql = "SELECT * FROM nguoidung WHERE MaNguoiDung=$maUser";
$result = mysql_query($sql, $conn);
if (!$result || mysql_num_rows($result) == 0) {
    echo '<div class=\'alert alert-danger\'>Không tìm thấy tài khoản!</div>';
    echo '<a href=\'admin-user.php\' class=\'btn btn-default\'>Quay lại</a>';
    exit;
}
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Sửa tài khoản</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:600px;">
    <h2>Sửa tài khoản</h2>
    <div style="position:absolute;top:20px;right:40px;">
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <div class="admin-menu" style="margin-bottom:20px;">
        <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
        <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
        <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
        <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
    </div>
    <?php echo $msg; ?>
    <form method="post">
        <div class="form-group">
            <label>Họ tên:</label>
            <input type="text" name="ten" class="form-control" required value="<?php echo htmlspecialchars($row['Ten']); ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required value="<?php echo htmlspecialchars($row['Email']); ?>">
        </div>
        <div class="form-group">
            <label>Vai trò:</label>
            <select name="vaitro" class="form-control">
                <option value="khachhang" <?php if($row['VaiTro']=='khachhang') echo 'selected'; ?>>Khách hàng</option>
                <option value="nhanvien" <?php if($row['VaiTro']=='nhanvien') echo 'selected'; ?>>Nhân viên</option>
                <option value="quanly" <?php if($row['VaiTro']=='quanly') echo 'selected'; ?>>Quản lý</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Lưu thay đổi</button>
        <a href="admin-user.php" class="btn btn-default">Quay lại</a>
    </form>
</div>
</body>
</html> 