<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Đăng nhập</title>
    
</head>
<body>
    <div class="container-fluid" >
  
  
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="background-color: #f2f4f7;border: 1px solid rgba(0,0,0,.125);max-width: 450px; margin-left: auto; margin-right: auto;margin-top:50px">
                <div>
                    <h2>
                        <img src="img/logo.png" alt="" style="width:180px; height:54px; display: block;margin-top:30px; margin-left: auto; margin-right: auto;">
                    </h2>
                    <h3 style="text-align: center;font: 400 16px/28px Roboto,Helvetica Neue,sans-serif;margin-top:16px">Nền tảng giáo dục số</h3>
                    <hr style="margin-top: 1rem;margin-bottom: 1rem; border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                </div>
                <div>
                    <h1 style=" color:#3c5ca5; font-size: 32px;  font-weight: 400!important;  line-height: 1.6; text-align: center;">Đăng nhập</h1>
                    <?php
                    if(isset($_GET['reply'])){
                        if($_GET['reply'] == 'successfully'){
                           echo "<p >Bạn đã đăng kí thành công. Vui lòng đăng nhập tại đây.</p>";
                        }else { 
                           echo "<p>Email đã tồn tại</p>";
                        }
                    }
                ?>
                </div>
                <div class="input">
                <form class="form-signin" action="process-login.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email " required autofocus>                   
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Mật Khẩu" required>                  
                </div>
                </div>
                <button type="submit" class="btn btn-primary " name="submit" style="width:422px; height:34px; background-color:  #3c5ca5;" >ĐĂNG NHẬP</button>
                <h3 style="text-align: center;font: 400 16px/28px Roboto,Helvetica Neue,sans-serif;margin-top:16px">Quên mật khẩu?</h3>
                <a href="register.php" style="text-decoration: none"><p style="text-align: center;">Đăng ký</p></a> 
            </div>
            <div class="col-md-3">
            </div>
                </form>
        </div>
    </div>
</body>
</html>
