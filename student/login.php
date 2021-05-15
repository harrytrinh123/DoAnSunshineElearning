<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
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
          <img class="user-img" src="./images/login1.jpg" alt="user">
        </div>
      </div>
      <!-- form login -->
      <div class="col-md-6 textce p-md-5">
        <h2 class="text-center text-primary font-weight-bold">Đăng nhập</h2>
        <form action="">
          <div class="form-group">
            <label for="unam">Tài khoản:</label>
            <input type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="uname" required>
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd" required>
          </div>
          <div class="form-group">
            <input type="checkbox" id="remeber"> Nhớ tài khoản
          </div>
          <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
        <p class="forgot text-right">
          <a href="#">Quên mật khẩu?</a>
        </p>
        <p class="register text-right">
          <a href="./register.php" >Tạo tài khoản mới <i class="fas fa-long-arrow-alt-right"></i></a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>