<?php
include_once 'controllers/AdminContentController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý nội dung</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:900px;">
    <h2>Quản lý nội dung (bài viết)</h2>
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
    <a href="admin-content-add.php" class="btn btn-success" style="margin-bottom:15px;">Thêm bài viết mới</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Ngày đăng</th>
                <th>Tác giả</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result && mysql_num_rows($result) > 0): while($row = mysql_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['MaBaiViet']; ?></td>
                <td><?php echo htmlspecialchars($row['TieuDe']); ?></td>
                <td><?php echo $row['NgayDang']; ?></td>
                <td><?php echo htmlspecialchars($row['TacGia']); ?></td>
                <td>
                    <a href="admin-content-edit.php?id=<?php echo $row['MaBaiViet']; ?>" class="btn btn-sm btn-primary">Sửa</a>
                    <a href="admin-content-delete.php?id=<?php echo $row['MaBaiViet']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Xóa bài viết này?');">Xóa</a>
                </td>
            </tr>
        <?php endwhile; else: ?>
            <tr><td colspan="5" class="text-center">Chưa có bài viết nào.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html> 