<?php
include_once 'controllers/AdminUserController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý tài khoản</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;max-width:900px;">
    <h2>Quản lý tài khoản người dùng</h2>
    <div style="margin-bottom:15px; color:#555; font-size:15px;">
        <b>Đăng nhập:</b> <?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '---'; ?>
        (<b>Vai trò:</b> <?php echo isset($_SESSION['user_role']) ? htmlspecialchars($_SESSION['user_role']) : '---'; ?>)
    </div>
    <div style="position:absolute;top:20px;right:40px;">
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <div class="admin-menu" style="margin-bottom:20px;">
        <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
        <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
        <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
        <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
    </div>
    <form method="get" class="form-inline mb-3" style="margin-bottom:20px;">
        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm tên hoặc email..." value="<?php echo htmlspecialchars($keyword); ?>">
        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        
        <a href="admin-user.php" class="btn btn-default">Xem tất cả</a>
    </form>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($users)): foreach($users as $row): ?>
            <tr>
                <td><?php echo $row['MaNguoiDung']; ?></td>
                <td><?php echo htmlspecialchars($row['Ten']); ?></td>
                <td><?php echo htmlspecialchars($row['Email']); ?></td>
                <td><?php echo $row['VaiTro']; ?></td>
                <td><?php echo $row['TrangThai']; ?></td>
                <td>
                    <a href="admin-user-edit.php?id=<?php echo $row['MaNguoiDung']; ?>" class="btn btn-sm btn-primary">Sửa</a>
                    <?php if ($row['VaiTro'] != 'quanly'): ?>
                        <a href="admin-user-delete.php?id=<?php echo $row['MaNguoiDung']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Xóa tài khoản này?');">Xóa</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; else: ?>
            <tr><td colspan="6" class="text-center">Không tìm thấy tài khoản nào.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
    <a href="admin-user-add.php" class="btn btn-success">Thêm tài khoản mới</a>
</div>
</body>
</html> 