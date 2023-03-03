<?php
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_type'] == 'admin')
    {
        echo 'truy cập vào trang quản trị';
    }
    echo 'truy cập thông tin cá nhân';
}
else { 
    echo 'quay lại trang chủ';
header('Location: Login.php');
exit;
}
