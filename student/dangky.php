<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('./partials/session.php'); ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
  <link type="text/css" href="./public/css/style.css" rel="stylesheet">
  <link type="text/css" href="./public/css/payment.css" rel="stylesheet">
  <link type="text/css" href="./public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="./public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="./public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="./public/css/fontawesome.css" rel="stylesheet">
  <link type="text/css" href="./public/css/preloader.css" rel="stylesheet">
  <link type="text/css" href="./public/css/app.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4197e7d2f0.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
      <?php include('./partials/header1.php'); ?>

      <div class="py-32pt navbar-submenu">
        <div class="container page__container">
          <div class="progression-bar progression-bar--active-accent">
            <a href="#" class="progression-bar__item progression-bar__item--complete">
              <span class="progression-bar__item-content">
                <i class="material-icons progression-bar__item-icon">✓</i>
                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Test năng lực </span>
              </span>
            </a>
            <a href="#" class="progression-bar__item progression-bar__item--complete">
              <span class="progression-bar__item-content">
                <i class="material-icons progression-bar__item-icon">✓</i>
                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Chọn lớp</span>
              </span>
            </a>
            <a href="./signup-payment.html" class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
              <span class="progression-bar__item-content">
                <i class="material-icons progression-bar__item-icon"></i>
                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Đăng ký</span>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="page-section">
        <div class="container page__container">
          <!-- <form class="col-md-8 p-0 mx-auto"> -->
          <?php
          include("./partials/connect.php");
          $uname = $_SESSION['username'];
          $sql = "SELECT * FROM student JOIN account ON student.Username=account.Username WHERE student.Username='$uname'";
          $result = $connect->query($sql);
          $final = $result->fetch_assoc();

          $classID = $_GET["classID"];
          $sqlClass = "SELECT * FROM class WHERE class.ID = '$classID'";
          $r = $connect->query($sqlClass);
          $fn = $r->fetch_assoc();
          ?>

            <div class="list-group list-group-form mb-0">

              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Họ và tên</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?php echo $final['StudentName']?>" readonly />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Số điện thoại</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?php echo $final['PhoneNumber']?>" readonly />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" value="<?php echo $final['Email']?>" readonly />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Tên lớp</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?php echo $fn['ClassName'] ?>" readonly/>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Thời gian học</label>
                  <div class="col-sm-9">
                    <input readonly type="text" class="form-control" value="<?php echo $fn['LichHoc'] ? "Thứ 2  - Thứ 4 - Thứ 6": "Thứ 3 - Thứ 5 - Thứ 7" ?>"  />
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="col-form-label form-label col-sm-3">Học phí </label>
                  <div class="col-sm-9">
                    <input readonly type="text" class="form-control" value="<?php echo $fn['HocPhi']; ?> VND"  />
                  </div>
                </div>
              </div>
              <div class="list-group-item " style="height: 10rem;">
                <fieldset aria-labelledby="label-type" class="m-0 form-group" >
                  <div class="form-row align-items-center">
                    <label for="payment_cc" id="label-type" class="col-md-3 col-form-label form-label">Hình thức thanh toán</label>
                    <div role="group" aria-labelledby="label-type" class="col-md-9">
                      <label class="dropdown">

                        <div class="dd-button">
                          Tại Trung Tâm
                        </div>

                        <input type="checkbox" class="dd-input" id="test">

                        <ul class="dd-menu">

                          <li class="divider"></li>
                          <li>
                            <a href="./index.html">SunshineEnglish</a>
                          </li>
                        </ul>

                      </label>
                      <label class="dropdown">

                        <div class="dd-button"> Momo
                          <img src="public/images/logo/momo.jpg" width="20px">
                        </div>

                        <input type="checkbox" class="dd-input" id="test">

                        <ul class="dd-menu">
                          <li>
                            <img src="public/images/logo/QR.jpg" width="70px">
                          </li>
                        </ul>

                      </label>

                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="btn btn-lg  text-center mb-4pt">
                <button id="btn-DangKy" type="submit" class="btn btn-primary">ĐĂNG KÝ NGAY</button>

              </div>

            </div>

          <!-- </form> -->

        </div>
      </div>

      <!-- 
                     <div class="list-group-item text-center">
                                <button type="submit"
                                        class="btn btn-primary">Thanh toán ngay</button>
                                        <button type="submit"
                                        class="btn btn-primary">Hủy</button>
                            </div>// END Page Content -->

      <!-- Footer -->

      <?php include('./partials/footer.php'); ?>

      <!-- // END Footer -->

    </div>
    <?php include('./partials/sidebar.php'); ?>
    <!-- // END Drawer -->

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

  <script>
    $('#btn-DangKy').click(function() {
      var params = new URLSearchParams(location.search);
      var classID =  params.get('classID');
      $.ajax({
        type: "POST", //type of method
        url: "dangkyhandler.php", //your page
        data: {
          classID: classID
        }, // passing the values
        success: function(res) {
          swal("Đăng ký thành công!", "Khóa học sẽ được duyệt trong 8 tiếng làm việc( giờ hành chính)", "success");    
        }
      });
    });
  </script>

</body>

</html>