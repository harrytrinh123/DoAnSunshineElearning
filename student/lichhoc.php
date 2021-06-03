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
  <link rel="stylesheet" href="./assets/css/lichhoc.css">
  <?php include("./partials/headlibs.php") ?>


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


      <?php include("./partials/header1.php") ?>
      <div class="container page__container">
        <div class="portlet">
          <div class="portlet-title">
            <div class="caption">
              <h1 class="title">Lịch học theo tuần</h1>
            </div>
            <div class="actions">
              <a href="javascript:;" class="btn btn-action" id="btn_HienTai">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                Hiện tại
              </a>
              <a href="#" class="btn btn-action" id="btn-TroVe">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                Trở về
              </a>
              <a href="#" class="btn btn-action" id="btn-Tiep">
                Tiếp
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </a>
              <a href="javascript:;" class="btn btn-action" id="full-table">
                <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
              </a>
            </div>
          </div>
          <div id="viewLichTheoTuan">
            <div class="table-responsive">
              <table class="fl-table table table-bordered text-center no-footer dtr-inline" width="100%" role="grid">
                <thead>
                  <tr role="row">
                    <th>Ca học</th>
                    <th>Thứ 2<br>
                      <p id="t2"></p>
                    </th>
                    <th>Thứ 3<br>
                      <p id="t3"></p>
                    </th>
                    <th>Thứ 4<br>
                      <p id="t4"></p>
                    </th>
                    <th>Thứ 5<br>
                      <p id="t5"></p>
                    </th>
                    <th>Thứ 6<br>
                      <p id="t6"></p>
                    </th>
                    <th>Thứ 7<br>
                      <p id="t7"></p>
                    </th>
                    <th>Chủ nhật<br>
                      <p id="cn"></p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr role="row">
                    <td><b>Tối</b></td>
                    <td id="2">
                    </td>
                    <td id="3"></td>
                    <td id="4"></td>
                    <td id="5"></td>
                    <td id="6"></td>
                    <td id="7"></td>
                    <td id="cnn"></td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php include("./partials/footer.php") ?>

    </div>

    <?php include("./partials/sidebar.php") ?>

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
    <script>
      var currentDate = new Date();
      var temp;
      var weeks = [];

      $(document).ready(function() {

        for (var i = 1; i <= 7; i++) {
          temp = currentDate.setDate(currentDate.getDate() - currentDate.getDay() + i);
          weeks.push(temp);
        }
        ThemNgayVaoTuan(weeks);

        $.ajax({
          url: 'lichhochandler.php',
          type: 'get',
          success: function(data) {
            d = jQuery.parseJSON(data);
            if(d[0] == "0") {
              var lich = "<h6>" + d[3] + "</h6><br> Tiết: 19 giờ - 21 giờ <br> ZoomID: " + d[1] + "<br>Password: " + d[2];
              $('#2').html(lich);
              $('#4').html(lich);
              $('#6').html(lich);


            }
            else {
              var lich = "<h6>" + d[3] + "</h6><br> Tiết: 19 giờ - 21 giờ <br> ZoomID: " + d[1] + "<br>Password: " + d[2];
              $('#3').html(lich);
              $('#5').html(lich);
              $('#7').html(lich);
            }
          }
        });
      });

      $('#btn-TroVe').click(function() {
        ThemNgayVaoTuan(TuanTruoc(weeks));
        alert(new Date(weeks[0]).toLocaleDateString("en-US"));
      });

      $('#btn-Tiep').click(function() {
        TuanSau(weeks);

        ThemNgayVaoTuan(weeks);
      });

      function TuanTruoc(weeks) {
        for (var i = 0; i <= 6; i++) {
          weeks[i] = (weeks[i] - 7);
        }
        return weeks;
      }

      function TuanSau(weeks) {
        for (var i = 0; i <= 6; i++) {
          weeks[i] = (weeks[i] + 7);
        }
        return weeks;
      }

      function ThemNgayVaoTuan(weeks) {
        $('#t2').text(new Date(weeks[0]).toLocaleDateString("en-US"));
        $('#t3').text(new Date(weeks[1]).toLocaleDateString("en-US"));
        $('#t4').text(new Date(weeks[2]).toLocaleDateString("en-US"));
        $('#t5').text(new Date(weeks[3]).toLocaleDateString("en-US"));
        $('#t6').text(new Date(weeks[4]).toLocaleDateString("en-US"));
        $('#t7').text(new Date(weeks[5]).toLocaleDateString("en-US"));
        $('#cn').text(new Date(weeks[6]).toLocaleDateString("en-US"));
      }
    </script>

</body>

</html>