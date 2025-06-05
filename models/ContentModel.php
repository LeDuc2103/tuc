<?php
// models/ContentModel.php
include_once dirname(__FILE__) . '/../ketnoi.php';
class ContentModel {
    public static function getAllPosts() {
        global $conn;
        $sql = "SELECT * FROM baiviet ORDER BY NgayDang DESC";
        $result = mysql_query($sql, $conn);
        $posts = array();
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $posts[] = $row;
            }
        }
        return $posts;
    }
} 