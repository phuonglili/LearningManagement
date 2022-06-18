<?php
session_start();

if (session_destroy()){
    echo "Đăng xuất thành công!";
    header("Location:login.php?reply=$value");
}else{
    echo "Không thể đăng xuất có lỗi trong việc hủy session";
}


?>