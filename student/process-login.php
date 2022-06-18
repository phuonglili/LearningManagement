<?php
    session_start();
    $email      = $_POST['email'];
    $pass       = $_POST['pass'];

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
    $sql = "SELECT * FROM users_student WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['password'];
        
        if(password_verify($pass,$pass_hash)){
            $_SESSION['login_ok'] = $email;
            header("Location:page.php");
        }else{
            
           
            header("Location:login.php");
            
        }
    }else{
        
        echo "Đăng nhập không thành công ";
        header("Location:login.php");
        
    }

?>