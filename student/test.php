<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('./partials/session.php');?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <meta name="robots" content="noindex">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
  <link type="text/css" href="./public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="../student1/public/css/home.css" rel="stylesheet">
  <link type="text/css" href="./public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="public/css/style.css" rel="stylesheet">
  <link type="text/css" href="./public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="./public/css/fontawesome.css" rel="stylesheet">
  <link type="text/css" href="./public/css/preloader.css" rel="stylesheet">
  <link type="text/css" href="./public/css/app.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4197e7d2f0.js" crossorigin="anonymous"></script>

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
      <?php
        include('./partials/header1.php');
      ?>


      <div class="pt-32pt">
        <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
          <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            
          </div>



        </div>
      </div>

      <div class="container page__container">
        
      </div>

      <!-- Footer -->
      <?php include('./partials/footer.php');?>

    </div>

    <?php include('./partials/sidebar.php');?>

  </div>

  <!-- // END Drawer Layout -->

  <!-- jQuery -->
  <script src="public/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="public/vendor/popper.min.js"></script>
  <script src="public/vendor/bootstrap.min.js"></script>

  <!-- Perfect Scrollbar -->
  <script src="public/vendor/perfect-scrollbar.min.js"></script>

  <!-- DOM Factory -->
  <script src="public/vendor/dom-factory.js"></script>
  <script src="public/js/js_1.js"></script>

  <!-- MDK -->
  <script src="public/vendor/material-design-kit.js"></script>

  <!-- App JS -->
  <script src="public/js/app.js"></script>

  <!-- Preloader -->
  <script src="public/js/preloader.js"></script>

  <!-- Global Settings -->
  <script src="public/js/settings.js"></script>

  <!-- Flatpickr -->
  <script src="public/vendor/flatpickr/flatpickr.min.js"></script>
  <script src="public/js/flatpickr.js"></script>

  <!-- Moment.js -->
  <script src="public/vendor/moment.min.js"></script>
  <script src="public/vendor/moment-range.js"></script>

  <!-- Chart.js -->
  <script src="public/vendor/Chart.min.js"></script>
  <script src="public/js/chartjs.js"></script>

  <!-- Chart.js Samples -->
  <script src="public/js/page.student-dashboard.js"></script>
  <script src="public/js/page.hr-dashboard.js"></script>
  <!-- List.js -->
  <script src="public/vendor/list.min.js"></script>
  <script src="public/js/list.js"></script>

  <!-- Tables -->
  <script src="public/js/toggle-check-all.js"></script>
  <script src="public/js/check-selected-row.js"></script>

</body>

</html>