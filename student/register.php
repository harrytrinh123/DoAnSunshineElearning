<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <script src="../libs/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="../libs/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../libs/fontawesome/css/all.css">
  <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
  <div class="background d-flex justify-content-center align-items-center">
    <div class="row box align-items-center bg-light position-relative">
      <div class="col-md-6">
        <div class="row">
          <img class="user-img" src="./images/login2.jpg" alt="user">
        </div>
      </div>
      <!-- form register -->
      <div class="col-md-6 textce">
        <h2 class="text-center text-primary font-weight-bold">Đăng ký</h2>
        <form action="">
          <div class="form-group">
            <label for="unam">Tài khoản:</label>
            <input type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="uname" required>
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd" required>
          </div>
          <div class="form-group">
            <label for="phone">Điện thoại:</label>
            <input type="text" class="form-control" id="phone" placeholder="Nhập điện thoại" name="phone">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required>
          </div>
          <div class="form-group">
            <input type="checkbox" id="accept"> Tôi chấp nhận với <a href="#">điều khoản sử dụng.</a>
          </div>
         <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
         <a class="back_to_login" href="./login.php" >Trở về <i class="fas fa-long-arrow-alt-left"></i></a>
        </form>
        </p>
      </div>
    </div>
  </div>
</body>

</html>