<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','manage_support');

    // Kết nối SERVER
    $conn = mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die("Kết nối không thành công");
    }
  
    mysqli_set_charset($conn,"utf8");



?>