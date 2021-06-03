<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 
  include("./partials/session.php");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chọn lớp phù hợp với bạn</title>
  <meta name="robots" content="noindex">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
  <link type="text/css" href="../student/public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/style.css" rel="stylesheet">

  <link type="text/css" href="../student/public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/fontawesome.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/preloader.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/app.css" rel="stylesheet">
  <?php include("./partials/headlibs.php") ?>

</head>
<style>
  .labl {
    width: 90%;
    background-color: forestgreen;
  }

  .labl>input {
    /* HIDE RADIO */
    visibility: hidden;
    /* Makes input not-clickable */
    position: absolute;
    /* Remove input from document flow */
  }

  .labl>input+div {
    /* DIV STYLES */
    cursor: pointer;
    border: 2px solid transparent;
  }

  .labl>input:checked+div {
    /* (RADIO CHECKED) DIV STYLES */
    background-color: #ffd6cc;
    border: 1px solid #ff6600;
  }
</style>

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


      <?php include("./partials/header1.php") ?>
      <div class="container page__container">
        <form action="thanhtoan.php">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-section">
                <?php
                include("./partials/connect.php");
                $sql = "SELECT * FROM `result` WHERE `StudentID` = '25221' ";
                $result = $connect->query($sql);
                $final = $result->fetch_assoc();
                $diem = $final['Score'];
                ?>
                <h4>Điểm của bạn là: <?php echo $diem ?></h4>
                <?php
                $idKhoaHoc;
                if ($diem < 50) {
                  $idKhoaHoc = '15120';
                  echo "<h4>Khóa học phù hợp với bạn là: Starters</h4>";
                } else if ($diem < 80) {
                  $idKhoaHoc = '15121';
                  echo "<h4>Khóa học phù hợp với bạn là: Movers</h4>";
                } else {
                  $idKhoaHoc = '15122';
                  echo "<h4>Khóa học phù hợp với bạn là: Flyers</h4>";
                }
                ?>

                <div class="card--connect pb-32pt pb-lg-64pt">
                  <div class="card o-hidden mb-0">
                    <div class="card-header bg-transparent">
                      <h5 class="text-uppercase mb-0">Danh sách các lớp học dành cho bạn</h5>
                    </div>

                    <div class="list-group list-group-flush">
                      <div class="row">
                        <?php
                        $sql = "SELECT * FROM `class` WHERE `CourseID` = '$idKhoaHoc' ";
                        $result = $connect->query($sql);
                        while ($final = $result->fetch_assoc()) {
                        ?>
                          <div class="col-md-4">
                            <label class="labl">
                              <input type="radio" name="classID" value="<?php echo $final['ID'] ?>" />
                              <div>
                                <h6><?php echo $final['ClassName'] ?></h6>
                                <p>Sỉ số: <?php echo $final['ClassSize'] ?></p>
                                <p>Ngày bắt đầu: <?php echo $final['DateStart'] ?></p>
                                <p>Ngày kết thúc: <?php echo $final['DateEnd'] ?></p>
                                <p>Lịch học: <?php
                                              if ($final['LichHoc'] == 0) {
                                                echo '7 giờ tối 2, 4, 6';
                                              }
                                              if ($final['LichHoc'] == 1) {
                                                echo '7 giờ tối 3, 5, 7';
                                              }
                                              ?>
                                </p>
                              </div>
                            </label>

                          </div>
                        <?php
                        }
                        ?>

                      </div>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>

          <button style="display: none; width: 200px;" id="btn-DangKy" class="btn btn-primary">ĐĂNG KÝ</button>
        </form>
      </div>
      <?php include("./partials/footer.php") ?>

    </div>

    <?php include("./partials/sidebar.php") ?>
    <!-- My script -->
    <script>
      $("input[type=radio]").change(function() {
        if(this.checked) {
          $('#btn-DangKy').show();
        }
      });
    </script>

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

</html>