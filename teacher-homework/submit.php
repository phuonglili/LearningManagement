<?php
session_start();
include('templates/header.php')
?>
        <h1 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px">QUẢN LÝ BÀI TẬP</h1>
        <div class="main" >
            <div class="header" >
                <div class="container" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9 ">
                            <form class="d-flex">
                                <input class="form-control me-2"  style="width:200px;margin-top:30px; margin-right:15px"type="search" placeholder="Tên lớp học..." aria-label="Search">
                                <button type="submit" style="margin-top:30px;"class="btn btn-primary">Tìm kiếm</button>
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
            <div class="container-fluid"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="content"style="margin-top:50px">
                          
                            <h3 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px">Danh sách học sinh nộp bài</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã học sinh</th>
                                    <th scope="col">Họ Đệm học sinh</th>
                                    <th scope="col">Tên học sinh</th>
                                    <th scope="col">Tên bài tập</th>
                                    <th scope="col">file nộp</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                
                                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                                    #B1 kết nối với CSDL
                                    $conn=mysqli_connect('localhost','root','','manage_support');            
                                    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                                    if(!$conn){
                                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                                    }
                                    #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                                    $sql = "SELECT users_student.id_student, first_name, last_name, file_sb, name_hw FROM submit, users_student, give_hw where submit.id_student = users_student.id_student AND submit.id_hw = give_hw.id_hw ";
                                    $result = mysqli_query($conn,$sql);
                                    #Bước 3: Xử lí kết quả trả về
                                
                                    if(mysqli_num_rows($result)>0){
                                        $i=1;
                                        while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                            <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['id_student']; ?></td>
                                            <td><?php echo $row['first_name']; ?></td>
                                            <td><?php echo $row['last_name']; ?></td>
                                            <td><?php echo $row['name_hw']; ?></td>
                                            <td><?php echo $row['file_sb']; ?></td>
                                            
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
                    <div class="col-md-6">
                        <div class="content"style="margin-top:50px">
                            <h3 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px">Danh sách học sinh chưa nộp bài</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã học sinh</th>
                                    <th scope="col">Họ Đệm học sinh</th>
                                    <th scope="col">Tên học sinh</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                     #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                                    #B1 kết nối với CSDL
                                    $conn=mysqli_connect('localhost','root','','manage_support');            
                                    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                                    if(!$conn){
                                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                                    }
                                    #Khai báo câu lệnh thực thi và thực hiện truy vấn
                                    $sql_1 = "SELECT id_student, first_name, last_name from users_student where id_student = (SELECT id_student  FROM users_student EXCEPT SELECT id_student  FROM submit)";
                                    $result_1 = mysqli_query($conn,$sql_1);
                                    #Xử lí kết quả trả về
                                
                                    if(mysqli_num_rows($result_1)>0){
                                        $i=1;
                                        while($row = mysqli_fetch_assoc($result_1)){
                                    ?>
                                            <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['id_student']; ?></td>
                                            <td><?php echo $row['first_name']; ?></td>
                                            <td><?php echo $row['last_name']; ?></td>
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
                </div>
            
        
        </div>
<?php
include('templates/footer.php')
?>