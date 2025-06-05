<?php
// models/StatModel.php
include_once __DIR__ . '/../ketnoi.php';
class StatModel {
    public static function getStats() {
        global $conn;
        $sql = "SELECT * FROM doanhthu ORDER BY id DESC";
        $result = mysql_query($sql, $conn);
        $stats = array();
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $stats[] = $row;
            }
        }
        return $stats;
    }
    public static function getOrderStats($month, $year) {
        global $conn;
        $sql = "SELECT COUNT(*) AS total_order, SUM(TongGia) AS total_revenue FROM donhang WHERE TrangThai='dathanhtoan' AND MONTH(NgayTao)=$month AND YEAR(NgayTao)=$year";
        $result = mysql_query($sql, $conn);
        return mysql_fetch_assoc($result);
    }
    public static function getTourStats() {
        global $conn;
        $sql = "SELECT COUNT(*) AS total_tour FROM tourdulich";
        $result = mysql_query($sql, $conn);
        return mysql_fetch_assoc($result);
    }
    public static function getUserStats() {
        global $conn;
        $sql = "SELECT COUNT(*) AS total_user FROM nguoidung WHERE VaiTro='khachhang'";
        $result = mysql_query($sql, $conn);
        return mysql_fetch_assoc($result);
    }
}
