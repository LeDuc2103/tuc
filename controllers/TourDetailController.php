<?php
// controllers/TourDetailController.php
session_start();
include_once dirname(__FILE__) . '/../models/TourModel.php';
include_once dirname(__FILE__) . '/../ketnoi.php';
mysql_query("SET NAMES 'utf8'", $conn);
$tour = null;
$order_success = false;
$order_info = null;
$qr_url = null;
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $tour = TourModel::getTourById($id);
}
// Xử lý đặt tour
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tour_id'])) {
    $maTour = (int)$_POST['tour_id'];
    $hoTen = isset($_POST['ho_ten']) ? mysql_real_escape_string($_POST['ho_ten']) : '';
    $email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : '';
    $dienThoai = isset($_POST['dien_thoai']) ? mysql_real_escape_string($_POST['dien_thoai']) : '';
    $ngayKhoiHanh = isset($_POST['ngay_khoi_hanh']) ? mysql_real_escape_string($_POST['ngay_khoi_hanh']) : '';
    $nguoiLon = isset($_POST['nguoi_lon']) ? (int)$_POST['nguoi_lon'] : 1;
    $treEm = isset($_POST['tre_em']) ? (int)$_POST['tre_em'] : 0;
    $ghiChu = isset($_POST['ghi_chu']) ? mysql_real_escape_string($_POST['ghi_chu']) : '';
    $soNguoi = $nguoiLon + $treEm;
    $giaTour = 0;
    $tenTour = '';
    $rowTour = TourModel::getTourById($maTour);
    if ($rowTour) {
        $giaTour = (float)$rowTour['Gia'];
        $tenTour = $rowTour['TenTour'];
    }
    $tongGia = $nguoiLon * $giaTour + $treEm * $giaTour * 0.7;
    $maNguoiDung = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 'NULL';
    $sql = "INSERT INTO donhang (MaNguoiDung, MaTour, SoLuongNguoi, TongGia, TrangThai, NgayThanhToan, MaQR, NgayTao, NgayCapNhat) VALUES (" .
        ($maNguoiDung ? $maNguoiDung : 'NULL') . ", $maTour, $soNguoi, $tongGia, 'dangcho', NULL, NULL, NOW(), NULL)";
    $result = mysql_query($sql, $conn);
    if ($result) {
        $maDonHang = mysql_insert_id();
        $order_success = true;
        $order_info = array(
            'MaDonHang' => $maDonHang,
            'TenTour' => $tenTour,
            'NgayKhoiHanh' => $ngayKhoiHanh,
            'NguoiLon' => $nguoiLon,
            'TreEm' => $treEm,
            'TongGia' => $tongGia,
            'HoTen' => $hoTen,
            'Email' => $email,
            'DienThoai' => $dienThoai,
            'GhiChu' => $ghiChu
        );
        // Tạo QR code
        $so_tai_khoan = '123456789';
        $ngan_hang = 'VCB';
        $ten_thu_huong = 'CONG TY DU LICH ABC';
        $so_tien = $order_info['TongGia'];
        $noi_dung = 'Thanh toan don hang ' . $order_info['MaDonHang'];
        $qr_url = "https://img.vietqr.io/image/{$ngan_hang}-{$so_tai_khoan}-compact2.png?amount={$so_tien}&addInfo=" . urlencode($noi_dung) . "&accountName=" . urlencode($ten_thu_huong);
    }
}
// Lấy các dịch vụ đi kèm
$dichvu = array();
$danhgia = array();
$tours_lienquan = array();
if ($tour) {
    $sql_dichvu = "SELECT * FROM dichvu WHERE MaTour = {$tour['MaTour']}";
    $result_dichvu = mysql_query($sql_dichvu, $conn);
    if ($result_dichvu && mysql_num_rows($result_dichvu) > 0) {
        while ($row = mysql_fetch_assoc($result_dichvu)) {
            $dichvu[] = $row;
        }
    }
    $sql_danhgia = "SELECT d.*, k.HoTen FROM danhgia d JOIN khachhang k ON d.MaKH = k.MaKH WHERE d.MaTour = {$tour['MaTour']} ORDER BY d.NgayDanhGia DESC";
    $result_danhgia = mysql_query($sql_danhgia, $conn);
    if ($result_danhgia && mysql_num_rows($result_danhgia) > 0) {
        while ($row = mysql_fetch_assoc($result_danhgia)) {
            $danhgia[] = $row;
        }
    }
    $sql_lienquan = "SELECT * FROM tourdulich WHERE MaTour != {$tour['MaTour']} ORDER BY RAND() LIMIT 4";
    $result_lienquan = mysql_query($sql_lienquan, $conn);
    if ($result_lienquan && mysql_num_rows($result_lienquan) > 0) {
        while ($row = mysql_fetch_assoc($result_lienquan)) {
            $tours_lienquan[] = $row;
        }
    }
} 