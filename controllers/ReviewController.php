<?php
// controllers/ReviewController.php
session_start();
include_once dirname(__FILE__) . '/../ketnoi.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tour_id'], $_POST['rating'], $_POST['comment'])) {
    $tour_id = (int)$_POST['tour_id'];
    $user_id = (int)$_SESSION['user_id'];
    $rating = (int)$_POST['rating'];
    $comment = trim(mysql_real_escape_string($_POST['comment']));
    $sql_check = "SELECT * FROM donhang WHERE MaNguoiDung=$user_id AND MaTour=$tour_id AND TrangThai='dathanhtoan'";
    $result_check = mysql_query($sql_check, $conn);
    if ($result_check && mysql_num_rows($result_check) > 0) {
        $sql_exist = "SELECT * FROM danhgia WHERE MaKH=$user_id AND MaTour=$tour_id";
        $result_exist = mysql_query($sql_exist, $conn);
        if ($result_exist && mysql_num_rows($result_exist) == 0) {
            $sql_insert = "INSERT INTO danhgia (MaTour, MaKH, SoSao, NoiDung, NgayDanhGia) VALUES ($tour_id, $user_id, $rating, '$comment', NOW())";
            if (mysql_query($sql_insert, $conn)) {
                header('Location: tour-detail.php?id='.$tour_id.'&msg=review_success');
                exit;
            } else {
                header('Location: tour-detail.php?id='.$tour_id.'&msg=review_fail');
                exit;
            }
        } else {
            header('Location: tour-detail.php?id='.$tour_id.'&msg=review_exists');
            exit;
        }
    } else {
        header('Location: tour-detail.php?id='.$tour_id.'&msg=review_notallowed');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
} 