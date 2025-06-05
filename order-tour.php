<?php
include_once 'controllers/OrderTourController.php';
?>
<?php
session_start();
include 'ketnoi.php';
mysql_query("SET NAMES 'utf8'", $conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $maTour = isset($_POST['tour_id']) ? (int)$_POST['tour_id'] : 0;
    $hoTen = isset($_POST['ho_ten']) ? mysql_real_escape_string($_POST['ho_ten']) : '';
    $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : '';
    $dienThoai = isset($_POST['dien_thoai']) ? mysql_real_escape_string($_POST['dien_thoai']) : '';
    $ngayKhoiHanh = isset($_POST['ngay_khoi_hanh']) ? mysql_real_escape_string($_POST['ngay_khoi_hanh']) : '';
    $nguoiLon = isset($_POST['nguoi_lon']) ? (int)$_POST['nguoi_lon'] : 1;
    $treEm = isset($_POST['tre_em']) ? (int)$_POST['tre_em'] : 0;
    $ghiChu = isset($_POST['ghi_chu']) ? mysql_real_escape_string($_POST['ghi_chu']) : '';
    $soNguoi = $nguoiLon + $treEm;

    // Lấy giá tour
    $sqlTour = "SELECT Gia FROM tourdulich WHERE MaTour = $maTour";
    $resultTour = mysql_query($sqlTour, $conn);
    $giaTour = 0;
    if ($resultTour && mysql_num_rows($resultTour) > 0) {
        $rowTour = mysql_fetch_assoc($resultTour);
        $giaTour = (float)$rowTour['Gia'];
    }
    // Giá trẻ em = 70% người lớn
    $tongGia = $nguoiLon * $giaTour + $treEm * $giaTour * 0.7;

    // Lấy mã người dùng nếu đã đăng nhập
    $maNguoiDung = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 'NULL';

    // Lưu vào bảng donhang
    $sql = "INSERT INTO donhang (MaNguoiDung, MaTour, SoLuongNguoi, TongGia, TrangThai, NgayThanhToan, MaQR, NgayTao, NgayCapNhat) VALUES (" .
        ($maNguoiDung ? $maNguoiDung : 'NULL') . ", $maTour, $soNguoi, $tongGia, 'dangcho', NULL, NULL, NOW(), NULL)";
    $result = mysql_query($sql, $conn);

    if ($result) {
        // Lấy mã đơn hàng vừa tạo
        $maDonHang = mysql_insert_id();
        // Có thể lưu thêm thông tin khách (hoTen, email, dienThoai, ghiChu) vào bảng riêng hoặc bảng donhang nếu có cột
        // Chuyển hướng sang trang xác nhận/thanh toán QR
        header("Location: thanh-toan-qr.php?madonhang=$maDonHang");
        exit();
    } else {
        echo '<div class="alert alert-danger">Đặt tour thất bại. Vui lòng thử lại!</div>';
    }
} else {
    header('Location: index.php');
    exit();
}
?> 