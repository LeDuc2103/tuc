<?php
// models/OrderModel.php
include_once __DIR__ . '/../ketnoi.php';
class OrderModel {
    public static function getAllOrders() {
        global $conn;
        $sql = "SELECT * FROM orders ORDER BY id DESC";
        $result = mysql_query($sql, $conn);
        $orders = array();
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $orders[] = $row;
            }
        }
        return $orders;
    }

    public static function getOrders($keyword = '') {
        global $conn;
        $where = '';
        if ($keyword != '') {
            $keyword = mysql_real_escape_string($keyword);
            $where = "WHERE t.TenTour LIKE '%$keyword%' OR n.Ten LIKE '%$keyword%' OR n.Email LIKE '%$keyword%'";
        }
        $sql = "SELECT d.*, t.TenTour, n.Ten AS TenKH, n.Email FROM donhang d
                LEFT JOIN tourdulich t ON d.MaTour = t.MaTour
                LEFT JOIN nguoidung n ON d.MaNguoiDung = n.MaNguoiDung
                $where
                ORDER BY d.NgayTao DESC";
        $result = mysql_query($sql, $conn);
        $orders = array();
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $orders[] = $row;
            }
        }
        return $orders;
    }
}
