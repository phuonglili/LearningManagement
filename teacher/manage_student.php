<?php
session_start();
include('templates/header.php')
?>
<h1 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px">DANH SÁCH HỌC SINH</h1>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9 ">
                        <form class="d-flex">
                            <input class="form-control me-2" style="width:200px;margin-top:30px; margin-right:15px" type="search" placeholder="Search..." aria-label="Search">
                            <button type="submit" style="margin-top:30px;" class="btn btn-primary">Tìm kiếm</button>
                        </form>
                    </div>


                    <div class="col-md-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content" style="margin-top:50px">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ đệm học sinh</th>
                    <th scope="col">Tên học sinh</th>
                    <th scope="col">Email</th>
                   
                </tr>
            </thead>
            <tbody>

                <?php
                require_once 'templates/config.php';

                #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                #B1 kết nối với CSDL
                $conn = mysqli_connect('localhost', 'root', '', 'manage_support');
                mysqli_set_charset($conn, "utf8"); //Định dang font chữ 
                if (!$conn) {
                    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                }
                #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                $query = "SELECT * FROM users_student";
                $result = mysqli_query($conn, $query);
                #Bước 3: Xử lí kết quả trả về

                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                           
                        </tr>
                <?php

                        $i++;
                    }
                }

                ?>

            </tbody>
        </table>
    </div>
</div>

<?php
include('templates/footer.php')
?>