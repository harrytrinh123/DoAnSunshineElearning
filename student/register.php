<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký tài khoản Sunshine English</title>
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4197e7d2f0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="row bar_header">
    <div class="col-md-10"></div>
    <div class="col-md-2">
      <a class href="#" id="cuaHang"><i class="fas fa-store"></i></a>
      <a class="btn-login" href="register.php">Đăng ký</a> |
      <a class="btn-login" href="login.php">Đăng nhập</a>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light my_nav">
    <a class="navbar-brand" href=".">
      <img id="logo" src="./images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./home.php"> Homepage <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./forum.php">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about.php">About</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
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
        <form action="POST">
          <div class="form-group">
            <label for="unam">Tài khoản:</label>
            <input type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="uname" required>
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd" required>
          </div>
          <div class="form-group">
            <label for="pwd">Nhập lại mật khẩu:</label>
            <input type="password" class="form-control" id="pwdNhapLai" placeholder="Nhập lại mật khẩu" name="pwdNhapLai" required>
          </div>
          <div class="form-group">
            <label for="hoTen">Họ tên:</label>
            <input type="text" class="form-control" id="hoTen" placeholder="Nhập họ tên" name="hoTen">
          </div>
          <div class="form-group">
            <label for="ngaySinh">Ngày sinh:</label>
            <input type="date" class="form-control" id="ngaySinh" name="ngaySinh">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required>
          </div>
          <div class="form-group">
            <input type="checkbox" id="accept"> Tôi chấp nhận với <a href="#">điều khoản sử dụng.</a>
          </div>
          <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
          <a class="back_to_login" href="./login.php">Đã có tài khoản</a>
        </form>
        </p>
      </div>
    </div>
  </div>
  <?php include("./partials/footer.php") ?>
</body>

</html>