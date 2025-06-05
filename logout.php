<?php
session_start();
session_destroy();
header("Location: index.php"); // hoặc về trang chủ
exit();