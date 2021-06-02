<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
include("./partials/session.php");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Account</title>
  <meta name="robots" content="noindex">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
  <link type="text/css" href="./public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="./public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="./public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="./public/css/fontawesome.css" rel="stylesheet">


  <!-- Preloader -->
  <link type="text/css" href="./public/css/preloader.css" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="./public/css/app.css" rel="stylesheet">
  <?php include("./partials/headlibs.php"); ?>

</head>

<body class="layout-app ">

  <!-- <div class="preloader">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
  </div> -->

  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">
      <!-- NAV -->
      <?php
      include("./partials/header1.php");
      include("./partials/connect.php");
      $uname = $_SESSION['username'];
      $sql = "SELECT * FROM student JOIN account ON student.Username=account.Username WHERE student.Username='$uname'";
      $result = $connect->query($sql);
      $final = $result->fetch_assoc();

      ?>

      <div class="pt-32pt">
        <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
          <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
              <h2 class="mb-0">PROFILE</h2>

            </div>
          </div>

        </div>
      </div>

      <div class="page-section container page__container">
        <div class="page-separator">
          <div class="page-separator__text">CẬP NHẬT THÔNG TIN</div>
        </div>
        <div class="col-md-7 p-0">
          <div class="form-group">
            <label class="form-label">Your photo</label>
            <div class="media align-items-center">
              <a href="#" class="media-left mr-16pt">
                <img src="./public/images/people/110/woman-1.jpg" alt="people" width="56" class="rounded-circle" />
              </a>
              <div class="media-body">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <input id="stID" type="hidden" value="<?php echo $final['ID'] ?>">
            <label class="form-label"> Profile name</label>
            <input id="studentname" type="text" class="form-control" value="<?php echo $final['StudentName'] ?>">
          </div>

          <!-- <form> -->
            <div class="form-group">
              <label class="form-label">Date of birth</label>
              <input id="dateofbirth" type="date" class="form-control" value="<?php echo $final['DateOfBirth'] ?>" placeholder="Your Date of birth...">
            </div>

            <div class="form-group">
              <label class="form-label">Phone number</label>
              <input id="phonenumber" type="text" class="form-control" value="<?php echo $final['PhoneNumber'] ?>" placeholder="Your phone number...">
            </div>
            <div class="form-group">
              <label class="form-label">Address</label>
              <input id="address" type="text" class="form-control" value="<?php echo $final['Address'] ?>">
            </div>
            <div class="form-group">
              <label class="form-label">Email address</label>
              <input id="email" type="email" class="form-control" value="<?php echo $final['Email'] ?>">
              <small class="form-text text-muted">Nếu bạn cập nhật lại email của bạn thì cần phải xác nhận
                EMAIL</small>
            </div>
            <div class="form-group">
              <label class="form-label">Mật khẩu</label>
              <input id="password" minlength="6" maxlength="16" class="form-control" type="password" placeholder="Nhập mật khẩu...">
            </div>
            <div class="form-group">
              <label class="form-label">Nhập lại mật khẩu</label>
              <input id="passwordNL" class="form-control" type="password" placeholder="Nhập lại mật khẩu...">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Cho phép mọi người có thể xem hồ sơ
                  của bạn</label>
              </div>
            </div>

            <button id="btn-Save" type="submit" class="btn btn-primary" id="btn-Save">Save changes</button>
          <!-- </form> -->

        </div>

      </div>

      <!-- // END Page Content -->

      <!-- Footer -->
      <?php include("./partials/footer.php"); ?>
      <!-- // END Footer -->

      <script>
        $('#btn-Save').click(function() {
          var studentID = $('#stID').val();
          var name = $('#studentname').val();
          var dateofbirth = $('#dateofbirth').val();
          var phonenumber = $('#phonenumber').val();
          var address = $('#address').val();
          var email = $('#email').val();
          $.ajax({
            type: "POST", //type of method
            url: "accounthandler.php", //your page
            data: {
              studentID: studentID,
              name: name,
              dob: dateofbirth,
              phonenumber: phonenumber,
              ar: address,
              email: email
            }, // passing the values
            success: function(res) {
              alert("Cập nhật thành công");    
            }
          });
        });
      </script>

    </div>

    <!-- // END drawer-layout__content -->

    <?php include("./partials/sidebar.php"); ?>

    <!-- // END Drawer -->

  </div>

  <!-- // END Drawer Layout -->

  <!-- jQuery -->
  <script src="./public/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="./public/vendor/popper.min.js"></script>
  <script src="./public/vendor/bootstrap.min.js"></script>

  <!-- Perfect Scrollbar -->
  <script src="./public/vendor/perfect-scrollbar.min.js"></script>

  <!-- DOM Factory -->
  <script src="./public/vendor/dom-factory.js"></script>

  <!-- MDK -->
  <script src="./public/vendor/material-design-kit.js"></script>

  <!-- App JS -->
  <script src="./public/js/app.js"></script>

  <!-- Preloader -->
  <script src="./public/js/preloader.js"></script>

</body>


<!-- Mirrored from luma.humatheme.com/Demos/App_Layout/edit-account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 09:35:30 GMT -->

</html>