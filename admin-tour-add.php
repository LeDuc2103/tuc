<?php
include_once 'controllers/AdminTourAddController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thêm tour mới</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:600px;">
    <div style="margin-bottom:15px; color:#555; font-size:15px;">
        <b>Đăng nhập:</b> <?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---'; ?>
        (<b>Vai trò:</b> <?php echo isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; ?>)
    </div>
    <h2>Thêm tour mới</h2>
    <?php echo $msg; ?>
    <form method="post">
        <div class="form-group">
            <label>Tên tour:</label>
            <input type="text" name="tentour" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Giá:</label>
            <input type="number" name="gia" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Thời gian:</label>
            <input type="text" name="thoigian" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Ngày bắt đầu:</label>
            <input type="date" name="ngaybatdau" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Ngày kết thúc:</label>
            <input type="date" name="ngayketthuc" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Trạng thái:</label>
            <select name="trangthai" class="form-control">
                <option value="Còn chỗ">Còn chỗ</option>
                <option value="Hết chỗ">Hết chỗ</option>
            </select>
        </div>
        <div class="form-group">
            <label>Mô tả:</label>
            <textarea name="mota" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Thêm tour</button>
        <a href="admin-tour.php" class="btn btn-default">Quay lại</a>
    </form>
</div>
</body>
</html> 