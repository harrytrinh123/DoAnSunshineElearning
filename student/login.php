<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập Sunsine English</title>
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4197e7d2f0.js" crossorigin="anonymous"></script>

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