<?php
// Cấu hình VNPAY (thay bằng thông tin demo của bạn)
$vnp_TmnCode = "FZ920A9G"; // Mã website
$vnp_HashSecret = "MD22N65L74XZRTO74ZTLM6BZSLUZD3HC"; // Chuỗi bí mật
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_ReturnUrl = "http://localhost/DoAn_CongngheMoi_MVC_Chatbot_payment/vnpay_return.php"; // Đổi thành domain của bạn

session_start();
include_once 'ketnoi.php'; // file kết nối DB

// Lấy dữ liệu từ form
$order_id = time();
$order_desc = "Thanh toán đặt tour";
$order_type = "billpayment";
$gia_tour = isset($_POST['gia_tour']) ? (int)$_POST['gia_tour'] : 0;
$nguoi_lon = isset($_POST['nguoi_lon']) ? (int)$_POST['nguoi_lon'] : 0;
$tre_em = isset($_POST['tre_em']) ? (int)$_POST['tre_em'] : 0;
$amount = $nguoi_lon * $gia_tour + $tre_em * $gia_tour * 0.7;
$amount = $amount * 100; // VNPAY yêu cầu đơn vị là VND * 100

// Lưu đơn hàng vào DB với trạng thái 'dangcho'
$maNguoiDung = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 'NULL';
$maTour = isset($_POST['tour_id']) ? (int)$_POST['tour_id'] : 0;
$soLuongNguoi = $nguoi_lon + $tre_em;
$tongGia = $amount / 100; // số tiền VND
$trangThai = 'dangcho';
$sql = "INSERT INTO donhang (MaNguoiDung, MaTour, SoLuongNguoi, TongGia, TrangThai, NgayTao) VALUES ($maNguoiDung, $maTour, $soLuongNguoi, $tongGia, '$trangThai', NOW())";
mysql_query($sql, $conn);

$vnp_Params = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'],
    "vnp_Locale" => "vn",
    "vnp_OrderInfo" => $order_desc,
    "vnp_OrderType" => $order_type,
    "vnp_ReturnUrl" => $vnp_ReturnUrl,
    "vnp_TxnRef" => $order_id,
);

// Loại bỏ vnp_SecureHash nếu có
if (isset($vnp_Params['vnp_SecureHash'])) {
    unset($vnp_Params['vnp_SecureHash']);
}
ksort($vnp_Params);
$query = "";
$i = 0;
$hashdata = "";
foreach ($vnp_Params as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}
$vnp_Url = $vnp_Url . "?" . $query;
$vnp_SecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
$vnp_Url .= 'vnp_SecureHash=' . $vnp_SecureHash;
header('Location: ' . $vnp_Url);
exit; 