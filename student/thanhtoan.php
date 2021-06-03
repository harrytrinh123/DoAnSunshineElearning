<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 
  include("./partials/session.php");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap"
    rel="stylesheet">
  <link type="text/css" href="../student/public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="../student/public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/fontawesome.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/preloader.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/app.css" rel="stylesheet">
  <?php include("./partials/headlibs.php")?>

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
      <?php include("./partials/header1.php")?>

      <div class="py-32pt navbar-submenu">
        <div class="container page__container">
          <div class="progression-bar progression-bar--active-accent">
            <a href="pricing.html" class="progression-bar__item progression-bar__item--complete">
              <span class="progression-bar__item-content">
                <i class="material-icons progression-bar__item-icon">✓</i>
                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Làm bài test</span>
              </span>
            </a>
            <a href="signup.html" class="progression-bar__item progression-bar__item--complete">
              <span class="progression-bar__item-content">
                <i class="material-icons progression-bar__item-icon">✓</i>
                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Chọn lớp</span>
              </span>
            </a>
            <a href="signup-payment.html"
              class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
              <span class="progression-bar__item-content">
                <i class="material-icons progression-bar__item-icon"></i>
                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Thanh toán</span>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="page-section">
        <div class="container page__container">
          <form action="https://luma.humatheme.com/Demos/App_Layout/index.html" class="col-md-8 p-0 mx-auto">

            <div class="list-group list-group-form mb-0">

              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Họ và tên</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nguyễn Thị Loan" />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">SĐT</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="0375 072 437" />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Email</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="nguyenthiloan2000gialai@gmail.com" />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Khóa học</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Stater/Movers/Flyers" />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Thời gian học</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Thứ 2-Thứ 4-Thứ 6" />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Học phí </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="20.000.000 VNĐ" />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <fieldset aria-labelledby="label-type" class="m-0 form-group">
                  <div class="form-row align-items-center">
                    <label for="payment_cc" id="label-type" class="col-md-3 col-form-label form-label">Hình thức thanh
                      toán</label>
                    <div role="group" aria-labelledby="label-type" class="col-md-9">
                      <div role="group" class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-secondary active">
                          <input type="radio" id="payment_cc" name="payment_type" value="cc" checked=""
                            aria-checked="true" /> Thẻ ngân hàng
                        </label>
                        <label class="btn btn-outline-secondary">
                          <input type="radio" id="payment_pp" name="payment_type" value="pp" aria-checked="true" /> Ví
                          điện tử
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Security code (CVV)</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="CVV" style="width:80px">
                  </div>
                </div>
              </div>

              <div class="list-group-item text-center">
                <button type="submit" class="btn btn-primary">Thanh toán ngay</button>
                <button type="submit" class="btn btn-primary">Hủy</button>
              </div>
            </div>

          </form>
        </div>
      </div>

      <!-- // END Page Content -->

      <!-- Footer -->

      <?php include("./partials/footer.php")?>

      <!-- // END Footer -->

    </div>
    <!-- Sidebar -->
    <?php include("./partials/sidebar.php")?>

    <!-- // END Drawer -->

    <!-- // END Drawer -->

  </div>

  <!-- // END Drawer Layout -->

  <!-- jQuery -->
  <script src="../student/public/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="../student/public/vendor/popper.min.js"></script>
  <script src="../student/public/vendor/bootstrap.min.js"></script>

  <!-- Perfect Scrollbar -->
  <script src="../student/public/vendor/perfect-scrollbar.min.js"></script>

  <!-- DOM Factory -->
  <script src="../student/public/vendor/dom-factory.js"></script>

  <!-- MDK -->
  <script src="../student/public/vendor/material-design-kit.js"></script>

  <!-- App JS -->
  <script src="../student/public/js/app.js"></script>

  <!-- Preloader -->
  <script src="../student/public/js/preloader.js"></script>

</body>


<!-- Mirrored from luma.humatheme.com/Demos/App_Layout/signup-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 09:35:30 GMT -->

</html>