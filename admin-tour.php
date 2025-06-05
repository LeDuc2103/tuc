<?php
include_once 'controllers/AdminTourController.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Quản lý tour du lịch</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top:40px;max-width:1100px;">
        <h2>Quản lý tour du lịch</h2>
        <div style="margin-bottom:15px; color:#555; font-size:15px;">
            <b>Đăng nhập:</b> <?php echo isset($user_name) ? $user_name : '---'; ?>
            (<b>Vai trò:</b> <?php echo isset($user_role) ? $user_role : '---'; ?>)
        </div>
        <div class="admin-menu" style="margin-bottom:20px;">
            <a href="admin-user.php" class="btn btn-info">Quản lý tài khoản</a>
            <a href="admin-tour.php" class="btn btn-info">Quản lý tour</a>
            <a href="admin-order.php" class="btn btn-info">Quản lý đơn hàng</a>
            <a href="admin-stat.php" class="btn btn-warning">Thống kê doanh thu</a>
        </div>
        <a href="admin-tour-add.php" class="btn btn-success" style="margin-bottom:15px;">Thêm tour mới</a>
        <div style="position:absolute;top:20px;right:40px;">
            <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Mã tour</th>
                    <th>Tên tour</th>
                    <th>Giá</th>
                    <th>Thời gian</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($tours)): foreach($tours as $row): ?>
                <tr>
                    <td><?php echo $row['MaTour']; ?></td>
                    <td><?php echo htmlspecialchars($row['TenTour']); ?></td>
                    <td><?php echo number_format($row['Gia'],0,',','.'); ?> VNĐ</td>
                    <td><?php echo htmlspecialchars($row['ThoiGian']); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row['NgayBatDau'])); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row['NgayKetThuc'])); ?></td>
                    <td><?php echo htmlspecialchars($row['TrangThai']); ?></td>
                    <td>
                        <a href="admin-tour-edit.php?id=<?php echo $row['MaTour']; ?>" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="admin-tour-delete.php?id=<?php echo $row['MaTour']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Xóa tour này?');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; else: ?>
                <tr><td colspan="8" class="text-center">Không có tour nào.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>