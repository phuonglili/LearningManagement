<!-- Register.php nó gửi theo phương thức post > Toàn bộ dữ liệu tự động lưu $_POST -->
<!-- $_POST là 1 MẢNG -->

<?php
  
    // Lấy giá trị từ FORM gửi sang và lưu vào BIẾN:
    $first_name = $_POST['firstName'];
    $last_name  = $_POST['lastName'];
    $email      = $_POST['email'];
    $pass1      = $_POST['pass1'];
   
  

    // QUY TRÌNH 4 bước:
    // Bước 01:
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','manage_support');

    // Kết nối SERVER
    $conn = mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die("Kết nối không thành công");
    }



    // Bước 02: Xử lý truy vấn
    $sql_1 = "SELECT * FROM users_student WHERE email='$email'";
    $result_1 = mysqli_query($conn,$sql_1);
    if(mysqli_num_rows($result_1) > 0){
        $value='failed';
        header("Location:register.php?reply=$value");
    }else{
        // Bước 02.2 - Chèn dữ liệu đăng kí vào BẢNG
        // Mật khẩu phải được BĂM
        $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
        // echo $pass_hash;
        $sql_2="INSERT INTO users_student(first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$pass_hash')";
        $result_2 = mysqli_query($conn,$sql_2);  //Đối với lệnh INSERT, nếu CHÈN THÀNH CÔNG, nó trả về số NGUYÊN

        if($result_2>0){
            $value='successfully';
            header("Location:login.php?reply=$value");
        }
    }

?>