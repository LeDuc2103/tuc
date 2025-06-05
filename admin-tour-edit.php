<?php
session_start();
include 'ketnoi.php';
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], array('admin','quanly','nhanvien'))) {
    header('Location: login.php');
    exit;
}
if (!isset($_GET['id'])) {
    header('Location: admin-tour.php');
    exit;
}
$maTour = (int)$_GET['id'];
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = mysql_real_escape_string(trim($_POST['tentour']));
    $gia = (float)$_POST['gia'];
    $thoigian = mysql_real_escape_string(trim($_POST['thoigian']));
    $ngaybd = mysql_real_escape_string($_POST['ngaybatdau']);
    $ngaykt = mysql_real_escape_string($_POST['ngayketthuc']);
    $trangthai = mysql_real_escape_string($_POST['trangthai']);
    $mota = mysql_real_escape_string(trim($_POST['mota']));
    $sql_update = "UPDATE tourdulich SET TenTour='$ten', Gia=$gia, ThoiGian='$thoigian', NgayBatDau='$ngaybd', NgayKetThuc='$ngaykt', TrangThai='$trangthai', MoTa='$mota' WHERE MaTour=$maTour";
    if (mysql_query($sql_update, $conn)) {
        header('Location: admin-tour.php?msg=edit_success');
        exit;
    } else {
        $msg = '<div class="alert alert-danger">Cập nhật thất bại!</div>';
    }
}
$sql = "SELECT * FROM tourdulich WHERE MaTour=$maTour";
$result = mysql_query($sql, $conn);
if (!$result || mysql_num_rows($result) == 0) {
    echo '<div class="alert alert-danger">Không tìm thấy tour!</div>';
    echo '<a href="admin-tour.php" class="btn btn-default">Quay lại</a>';
    exit;
}
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Sửa tour</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:600px;">
    <h2>Sửa tour</h2>
    <?php echo $msg; ?>
    <form method="post">
        <div class="form-group">
            <label>Tên tour:</label>
            <input type="text" name="tentour" class="form-control" required value="<?php echo htmlspecialchars($row['TenTour']); ?>">
        </div>
        <div class="form-group">
            <label>Giá:</label>
            <input type="number" name="gia" class="form-control" required value="<?php echo $row['Gia']; ?>">
        </div>
        <div class="form-group">
            <label>Thời gian:</label>
            <input type="text" name="thoigian" class="form-control" required value="<?php echo htmlspecialchars($row['ThoiGian']); ?>">
        </div>
        <div class="form-group">
            <label>Ngày bắt đầu:</label>
            <input type="date" name="ngaybatdau" class="form-control" required value="<?php echo $row['NgayBatDau']; ?>">
        </div>
        <div class="form-group">
            <label>Ngày kết thúc:</label>
            <input type="date" name="ngayketthuc" class="form-control" required value="<?php echo $row['NgayKetThuc']; ?>">
        </div>
        <div class="form-group">
            <label>Trạng thái:</label>
            <select name="trangthai" class="form-control">
                <option value="Còn chỗ" <?php if($row['TrangThai']=='Còn chỗ') echo 'selected'; ?>>Còn chỗ</option>
                <option value="Hết chỗ" <?php if($row['TrangThai']=='Hết chỗ') echo 'selected'; ?>>Hết chỗ</option>
            </select>
        </div>
        <div class="form-group">
            <label>Mô tả:</label>
            <textarea name="mota" class="form-control" rows="4"><?php echo htmlspecialchars($row['MoTa']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Lưu thay đổi</button>
        <a href="admin-tour.php" class="btn btn-default">Quay lại</a>
    </form>
</div>
</body>
</html> 