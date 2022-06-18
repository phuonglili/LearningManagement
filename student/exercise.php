<?php
session_start();

include('templates/header.php')
?> 
        <h1 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px">BÀI TẬP VỀ NHÀ</h2>

        <div class="content" style="margin-top:50px">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên bài tập</th>
                        <th scope="col">Yêu cầu</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Hạn nộp</th>
                        <th scope="col">Nộp bài</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    

                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                    #B1 kết nối với CSDL
                    $conn = mysqli_connect('localhost', 'root', '', 'manage_support');
                    mysqli_set_charset($conn, "utf8"); //Định dang font chữ 
                    if (!$conn) {
                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                    }
                    #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                    $query = "SELECT * FROM give_hw ";
                    $result = mysqli_query($conn, $query);
                    #Bước 3: Xử lí kết quả trả về

                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row['name_hw']; ?></td>
                                <td><?php echo $row['require_hw']; ?></td>
                                <td><?php echo $row['time_st']; ?></td>
                                <td><?php echo $row['time_ex']; ?></td>
                                <td><a href="submit.php"><i class="far fa-plus-square" style="text-align: center;"></i> </a></td>
                                
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