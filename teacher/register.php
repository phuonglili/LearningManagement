<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Đăng Ký</title>
    
</head>
<body>
    <div class="container-fluid" style=" ">
  
  
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="background-color: #f2f4f7;border: 1px solid rgba(0,0,0,.125);max-width: 600px; margin-left: auto; margin-right: auto;margin-top:20px">
                <div>
                    <h2>
                        <img src="img/logo.png" alt="" style="width:180px; height:54px; display: block;margin-top:30px; margin-left: auto; margin-right: auto;">
                    </h2>
                    <h3 style="text-align: center;font: 400 16px/28px Roboto,Helvetica Neue,sans-serif;margin-top:16px">Nền tảng giáo dục số</h3>
                    <hr style="margin-top: 1rem;margin-bottom: 1rem; border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                </div>
                <div>
                    <h1 style="color: #3c5ca5;font-size: 32px;  font-weight: 400!important;  line-height: 1.6; text-align: center;">Đăng Ký Tài Khoản</h1>
                    <?php
                    if(isset($_GET['reply'])){
                        if($_GET['reply'] == 'successfully'){
                           echo "<p ></p>";
                        }else { 
                           echo "<p>Email đã tồn tại</p>";
                        }
                    }
                    ?>
                <form class="mx-1 mx-md-4" action="process-register.php" method="post">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw" style="padding-top:40px"></i>
                        <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="firstName">Họ đệm</label>
                        <input type="text" id="firstName" name="firstName" class="form-control" />
                        
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw" style="padding-top:40px"></i>
                        <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="lastName">Tên</label>
                        <input type="text" id="lastName" name="lastName" class="form-control" />
                        
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw" style="padding-top:40px"></i>
                        <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" />
                        
                        </div>
                    </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw" style="padding-top:40px"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="pass1">Mật Khẩu</label>
                        <input type="password" id="pass1" name="pass1" class="form-control" />
                      
                    </div>
                  </div>

               

                 

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="btnRegister" style="background-color:  #3c5ca5;">Hoàn Thành Đăng ký</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</body>
</html>