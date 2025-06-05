<?php
// models/TourModel.php
include_once dirname(__FILE__) . '/../ketnoi.php';

class TourModel {
   
    public static function getTourById($maTour) {
        global $conn;
        $sql = "SELECT * FROM tourdulich WHERE MaTour = $maTour";
        $result = mysql_query($sql, $conn);
        if ($result && mysql_num_rows($result) > 0) {
            return mysql_fetch_assoc($result);
        }
        return false;
    }

    public static function addTour($ten, $gia, $thoigian, $ngaybd, $ngaykt, $trangthai, $mota) {
        global $conn;
        $sql_check = "SELECT * FROM tourdulich WHERE TenTour = '$ten'";
        $result_check = mysql_query($sql_check, $conn);
        if ($result_check && mysql_num_rows($result_check) > 0) {
            return '<div class="alert alert-warning">Tên tour đã tồn tại!</div>';
        } else {
            $sql_insert = "INSERT INTO tourdulich (TenTour, Gia, ThoiGian, NgayBatDau, NgayKetThuc, TrangThai, MoTa) 
                           VALUES ('$ten', $gia, '$thoigian', '$ngaybd', '$ngaykt', '$trangthai', '$mota')";
            if (mysql_query($sql_insert, $conn)) {
                header('Location: admin-tour.php?msg=add_success');
                exit;
            } else {
                return '<div class="alert alert-danger">Thêm tour thất bại!</div>';
            }
        }
    }

    public static function editTour($maTour, $ten, $gia, $thoigian, $ngaybd, $ngaykt, $trangthai, $mota) {
        global $conn;
        $sql_update = "UPDATE tourdulich 
                       SET TenTour='$ten', Gia=$gia, ThoiGian='$thoigian', NgayBatDau='$ngaybd', 
                           NgayKetThuc='$ngaykt', TrangThai='$trangthai', MoTa='$mota' 
                       WHERE MaTour=$maTour";
        if (mysql_query($sql_update, $conn)) {
            header('Location: admin-tour.php?msg=edit_success');
            exit;
        } else {
            return '<div class="alert alert-danger">Cập nhật thất bại!</div>';
        }
    }

    public static function deleteTour($maTour) {
        global $conn;
        $sql = "DELETE FROM tourdulich WHERE MaTour=$maTour";
        if (mysql_query($sql, $conn)) {
            header('Location: admin-tour.php?msg=delete_success');
            exit;
        } else {
            header('Location: admin-tour.php?msg=delete_fail');
            exit;
        }
    }

    public static function getToursWithFilters($filters = array()) {
        global $conn;
        $where = array();

        if (!empty($filters['ten'])) {
            $ten = mysql_real_escape_string($filters['ten']);
            $where[] = "TenTour LIKE '%$ten%'";
        }
        if (!empty($filters['gia_tu'])) {
            $gia_tu = (int)$filters['gia_tu'];
            $where[] = "Gia >= $gia_tu";
        }
        if (!empty($filters['gia_den'])) {
            $gia_den = (int)$filters['gia_den'];
            $where[] = "Gia <= $gia_den";
        }
        if (!empty($filters['ngay_bd'])) {
            $ngay_bd = mysql_real_escape_string($filters['ngay_bd']);
            $where[] = "NgayBatDau >= '$ngay_bd'";
        }
        if (!empty($filters['ngay_kt'])) {
            $ngay_kt = mysql_real_escape_string($filters['ngay_kt']);
            $where[] = "NgayKetThuc <= '$ngay_kt'";
        }

        $sql = "SELECT * FROM tourdulich";
        if (count($where) > 0) {
            $sql .= " WHERE " . implode(" AND ", $where);
        }
        $sql .= " ORDER BY NgayBatDau DESC";

        $result = mysql_query($sql, $conn);
        $tours = array();
        if ($result) {
            while ($row = mysql_fetch_assoc($result)) {
                $tours[] = $row;
            }
        }
        return $tours;
    }
}
