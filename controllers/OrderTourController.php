<?php
// controllers/OrderTourController.php
session_start();
include_once dirname(__FILE__) . '/../ketnoi.php';
mysql_query("SET NAMES 'utf8'", $conn);
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $maTour = isset($_POST['tour_id']) ? (int)$_POST['tour_id'] : 0;
    $hoTen = isset($_POST['ho_ten']) ? mysql_real_escape_string($_POST['ho_ten']) : '';
    $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : '';
    $dienThoai = isset($_POST['dien_thoai']) ? mysql_real_escape_string($_POST['dien_thoai']) : '';
    $ngayKhoiHanh = isset($_POST['ngay_khoi_hanh']) ? mysql_real_escape_string($_POST['ngay_khoi_hanh']) : '';
    $nguoiLon = isset($_POST['nguoi_lon']) ? (int)$_POST['nguoi_lon'] : 1;
    $treEm = isset($_POST['tre_em']) ? (int)$_POST['tre_em'] : 0;
    $ghiChu = isset($_POST['ghi_chu']) ? mysql_real_escape_string($_POST['ghi_chu']) : '';
    $soNguoi = $nguoiLon + $treEm;
    $sqlTour = "SELECT Gia FROM tourdulich WHERE MaTour = $maTour";
    $resultTour = mysql_query($sqlTour, $conn);
    $giaTour = 0;
    if ($resultTour && mysql_num_rows($resultTour) > 0) {
        $rowTour = mysql_fetch_assoc($resultTour);
        $giaTour = (float)$rowTour['Gia'];
    }
    $tongGia = $nguoiLon * $giaTour + $treEm * $giaTour * 0.7;
    $maNguoiDung = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 'NULL';
    $sql = "INSERT INTO donhang (MaNguoiDung, MaTour, SoLuongNguoi, TongGia, TrangThai, NgayThanhToan, MaQR, NgayTao, NgayCapNhat) VALUES (" .
        ($maNguoiDung ? $maNguoiDung : 'NULL') . ", $maTour, $soNguoi, $tongGia, 'dangcho', NULL, NULL, NOW(), NULL)";
    $result = mysql_query($sql, $conn);
    if ($result) {
        $maDonHang = mysql_insert_id();
        header("Location: thanh-toan-qr.php?madonhang=$maDonHang");
        exit();
    } else {
        $order_error = 'Đặt tour thất bại. Vui lòng thử lại!';
    }
} else {
    header('Location: index.php');
    exit();
} 