<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/CssLogin.css">
	</head>
<body>
<?php
session_start();

if(isset($_POST['login'])) {
  include("./partials/connect.php");
  $email = $_POST['uName'];
  $password = $_POST['pWord'];
  $sql = "SELECT * FROM account WHERE Username = '$email' AND Password = '$password'";
  $results = $connect->query($sql);

  $final = $results->fetch_assoc();
  $_SESSION['email'] = $final['Username'];
  $_SESSION['password'] = $final['Password'];
  if($email==$final['Username'] AND  $password==$final['Password'] AND $final['Role']==2) {
    header('location: index.php');
  }
  else {
    echo '<div class="bg-danger">Sai ten dang nhap hoac mat khau!</div>';
  }
}
?>
	<div class="loginbox" action="login.php">
	<img src="./assets/css/PLogo.png" class="avatar">
		<h1>Đăng nhập</h1>
		<form method="POST">
			<p>Tên đăng nhập:</p>
			<input type="text" name="uName" placeholder="Nhập tên đăng nhập">
			<p>Password</p>
			<input type="password" name="pWord" placeholder="Nhập mật khẩu">
			<input type="submit" name="login" value="Login">
			<a href="#">Quên mật khẩu</a><br>
			<a href="#">Đổi mật khẩu</a>
		</form>
	</div>
	</body>
</html>
