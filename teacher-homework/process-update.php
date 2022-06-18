<?php
// if (!isset($_POST['id_hw'])) echo 'Not Update';
// $id_hw = $_GET['id_hw'];
// $query = "SELECT * FROM give_hw WHERE id_hw = '$id_hw'";
// // $result = mysqli_query($conn, $query);
// // $recipient = mysqli_fetch_assoc($result);
// $name_hw = $recipient['name_hw'];
// $require_hw = $recipient['require_hw'];
// $time_ex = $recipient['time_ex'];
$id_hw = $_GET['id_hw'];
$sql = "SELECT * FROM give_hw WHERE id_hw = '$id_hw'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $id_hw = $row["id_hw"];
    $name_hw = $row["name_hw"];
    $require_hw = $row["require_hw"];
    $time_st = $row["time_st"];
    $time_ex = $row["time_ex"];
}
if (isset($_POST['submit'])) {
    $name_hw = $_POST['name'];
    $require_hw    = $_POST['require'];
    $time_ex    = $_POST['date'];
}
// Thực hiện quy trình 3 bước:
// Bước 01: Kết nối DBS
require("templates/config.php");

// Bước 02: Khai báo truy vấn
$sql = "UPDATE give_hw set name_hw='$name_hw', require_hw='$require_hw', time_ex='$time_ex' where id_hw = '$id_hw'";


echo $sql . "<br>";

if (mysqli_query($conn, $sql) == TRUE) {
    echo "Sửa thành công";
    header("Location:exercise.php");
} else {
    echo "Chưa sửa được ....";
}
// Bước 03: Đóng kết nối
mysqli_close($conn);
?>