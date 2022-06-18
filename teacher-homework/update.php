<?php
include('templates/header.php')
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="main-content">
    <div class="wrapper">
        <h1 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px; margin-bottom: 50px">SỬA BÀI TẬP</h1>
        <div class="container col-md-12 mx-auto">
            <form action="process-update.php" METHOD="POST" >
                <div class="col-md-6 mx-auto">
                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Bài tập</span>
                        <input type="text" class="form-control" name="name" placeholder="Tên bài tập" id= "input-group-text col-3">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Yêu cầu</span>
                        <input type="text" class="form-control" name="require"  placeholder="Yêu cầu"  id= "input-group-text col-3">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Hạn nộp</span>
                        <input type="datetime-local" id="meeting-time" class="form-control" name="date" value = "<?php echo $row['time_ex'];?>" placeholder="Nhập hạn nộp bài"  id= "input-group-text col-3">
                    </div>
                    <button type="submit" class="btn btn-info" name="submit">Sửa</button>

                </div>
            </form>

        </div>
    </div>
</div>
<?php
include('templates/footer.php');
?>