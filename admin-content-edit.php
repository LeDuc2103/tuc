<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'quanly') {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-content.php');
    exit;
}
$maBV = (int)$_GET['id'];
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tieude = mysql_real_escape_string(trim($_POST['tieude']));
    $noidung = mysql_real_escape_string(trim($_POST['noidung']));
    $sql_update = "UPDATE baiviet SET TieuDe='$tieude', NoiDung='$noidung' WHERE MaBaiViet=$maBV";
    if (mysql_query($sql_update, $conn)) {
        header('Location: admin-content.php?msg=edit_success');
        exit;
    } else {
        $msg = '<div class=\'alert alert-danger\'>Cập nhật thất bại!</div>';
    }
}
$sql = "SELECT * FROM baiviet WHERE MaBaiViet=$maBV";
$result = mysql_query($sql, $conn);
if (!$result || mysql_num_rows($result) == 0) {
    echo '<div class=\'alert alert-danger\'>Không tìm thấy bài viết!</div>';
    echo '<a href=\'admin-content.php\' class=\'btn btn-default\'>Quay lại</a>';
    exit;
}
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Sửa bài viết</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:700px;">
    <h2>Sửa bài viết</h2>
    <div style="position:absolute;top:20px;right:40px;">
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <div class="admin-menu" style="margin-bottom:20px;">
        <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
        <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
        <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
        <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
        <a href="admin-content.php" class="btn btn-primary">Quản lý nội dung</a>
    </div>
    <?php echo $msg; ?>
    <form method="post">
        <div class="form-group">
            <label>Tiêu đề:</label>
            <input type="text" name="tieude" class="form-control" required value="<?php echo htmlspecialchars($row['TieuDe']); ?>">
        </div>
        <div class="form-group">
            <label>Nội dung:</label>
            <textarea name="noidung" class="form-control" rows="8" required><?php echo htmlspecialchars($row['NoiDung']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Lưu thay đổi</button>
        <a href="admin-content.php" class="btn btn-default">Quay lại</a>
    </form>
</div>
</body>
</html> 