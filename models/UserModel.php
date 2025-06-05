<?php
// models/UserModel.php
include_once __DIR__ . '/../ketnoi.php';
class UserModel {
    public static function getAllUsers() {
        global $conn;
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $result = mysql_query($sql, $conn);
        $users = array();
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
        return $users;
    }

    public static function getUsers($keyword = '') {
        global $conn;
        $where = '';
        if ($keyword != '') {
            $keyword = mysql_real_escape_string($keyword);
            $where = "WHERE Ten LIKE '%$keyword%' OR Email LIKE '%$keyword%'";
        }
        $sql = "SELECT * FROM nguoidung $where ORDER BY MaNguoiDung DESC";
        $result = mysql_query($sql, $conn);
        $users = array();
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
        return $users;
    }
}
