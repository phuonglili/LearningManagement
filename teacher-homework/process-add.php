<?php
if (isset($_POST['submit'])) {
    $name_hw = $_POST['name'];
    $require_hw    = $_POST['require'];
    $time_ex    = $_POST['date'];

    // Thực hiện quy trình 3 bước:
    // Bước 01: Kết nối DBS
    require("templates/config.php");

    // Bước 02: Khai báo truy vấn
    $sql ="INSERT give_hw (name_hw,require_hw,time_ex) VALUES ('" . $name_hw . "','" . $require_hw . "','" . $time_ex . "')";


    echo $sql . "<br>";

    if (mysqli_query($conn, $sql) == TRUE) {
        echo "Thêm thành công";
        header("Location:exercise.php");
    } else {
        echo "Chưa thêm được ....";
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
?>
