<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <?php include("./partials/headlibs.php");?>

</head>

<body class="layout-app ">

  <div class="preloader">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
  </div>

  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">
      <!-- NAV -->
      <?php include("./partials/header1.php");?>

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
            <label class="form-label"> Profile name</label>
            <input type="text" class="form-control" value="Nguyễn Thị Loan" placeholder="Your profile name ...">
          </div>

          <form>
            <div class="form-group">
              <label class="form-label">Date of birth</label>
              <input type="text" class="form-control" value="07-02-2000" placeholder="Your Date of birth...">
            </div>

            <div class="form-group">
              <label class="form-label">Phone number</label>
              <input type="text" class="form-control" value="0375072437" placeholder="Your phone number...">
            </div>
            <div class="form-group">
              <label class="form-label">Address</label>
              <input type="text" class="form-control" value="12 Nguyễn Văn Bảo - Phường 4 - Gò Vấp - Hồ Chí Minh" placeholder="Your address...">
            </div>
            <div class="form-group">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" value="nguyenthiloan2000gialai@gmail.com" placeholder="Your email address ...">
              <small class="form-text text-muted">Nếu bạn cập nhật lại email của bạn thì cần phải xác nhận
                EMAIL</small>
            </div>
            <div class="form-group">
              <label class="form-label">About you</label>
              <textarea rows="3" class="form-control" placeholder="About you ..."></textarea>
            </div>
          </form>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" checked id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Hiển thị tên trên thật trên hồ sơ của
                bạn</label>
            </div>
          </div>

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" checked id="customCheck2">
              <label class="custom-control-label" for="customCheck2">Cho phép mọi người có thể xem hồ sơ
                của bạn</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="submit" class="btn btn-primary">Cancel</button>

        </div>

      </div>

      <!-- // END Page Content -->

      <!-- Footer -->
      <?php include("./partials/footer.php");?>

      <!-- // END Footer -->

    </div>

    <!-- // END drawer-layout__content -->

    <?php include("./partials/sidebar.php");?>

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