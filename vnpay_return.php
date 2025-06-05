<?php
// Trang này sẽ nhận các tham số trả về từ VNPAY
session_start();
$vnp_ResponseCode = isset($_GET['vnp_ResponseCode']) ? $_GET['vnp_ResponseCode'] : '';
$vnp_Amount = isset($_GET['vnp_Amount']) ? $_GET['vnp_Amount'] : '';
$vnp_TxnRef = isset($_GET['vnp_TxnRef']) ? $_GET['vnp_TxnRef'] : '';
$vnp_OrderInfo = isset($_GET['vnp_OrderInfo']) ? $_GET['vnp_OrderInfo'] : '';

// Nếu thanh toán thành công, cập nhật trạng thái đơn hàng
if ($vnp_ResponseCode == '00') {
    include_once 'ketnoi.php';
    if (isset($_SESSION['user_id'])) {
        $user_id = (int)$_SESSION['user_id'];
        // Cập nhật đơn hàng mới nhất của user có trạng thái 'dangcho'
        $sql = "UPDATE donhang SET TrangThai='dathanhtoan', NgayThanhToan=NOW() WHERE MaNguoiDung=$user_id AND TrangThai='dangcho' ORDER BY MaDonHang DESC LIMIT 1";
        mysql_query($sql, $conn);
    }
}

// Hiển thị kết quả
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả thanh toán VNPAY</title>
    <link rel="stylesheet" href="assets/css/plugin/bootstrap.min.css">
</head>
<body style="padding:40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Kết quả thanh toán</h3></div>
                    <div class="panel-body">
                        <?php if ($vnp_ResponseCode == '00'): ?>
                            <div class="alert alert-success">
                                <b>Thanh toán thành công!</b><br>
                                Mã giao dịch: <b><?php echo htmlspecialchars($vnp_TxnRef); ?></b><br>
                                Số tiền: <b><?php echo number_format($vnp_Amount/100, 0, ',', '.'); ?> VNĐ</b><br>
                                Nội dung: <b><?php echo htmlspecialchars($vnp_OrderInfo); ?></b>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                <b>Thanh toán thất bại hoặc bị hủy!</b><br>
                                Mã giao dịch: <b><?php echo htmlspecialchars($vnp_TxnRef); ?></b><br>
                                Nội dung: <b><?php echo htmlspecialchars($vnp_OrderInfo); ?></b>
                            </div>
                        <?php endif; ?>
                        <a href="index.php" class="btn btn-primary">Quay về trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 