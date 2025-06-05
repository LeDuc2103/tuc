<?php
$host = "localhost";
$dbname = "quan_ly_du_lich";
$username = "root";
$password = "";

$conn = mysql_connect($host, $username, $password) or die("Không kết nối được MySQL");
mysql_select_db($dbname, $conn) or die("Không chọn được database");
mysql_query("SET NAMES 'utf8'", $conn);
?>