<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Management</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">


  <link rel="shortcut icon" href="assets\images\logo-lightt.png">

  <!-- Bootstrap Css -->
  <link href="assets\css\bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="assets\css\app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">

  <!-- Begin page -->
  <div id="layout-wrapper">

    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="." class="logo logo-dark">
              <span class="logo-sm">
                <img src="assets\images\logo.svg" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="assets\images\logo-dark.png" alt="" height="17">
              </span>
            </a>

            <a href="." class="logo logo-light">
              <span class="logo-sm">
                <img src="assets\images\logo-lightt.svg" alt="" height="100">
              </span>
              <span class="logo-lg">
                <img src="assets\images\logo-lightt.png" alt="" height="97">
              </span>
            </a>
          </div>


          <!-- App Search-->
          <form class="app-search d-none d-lg-block">
            <div class="position-relative">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="bx bx-search-alt"></span>
            </div>
          </form>
        </div>
        <div class="d-flex">
          <div class="dropdown d-inline-block d-lg-none ml-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

              <form class="p-3">
                <div class="form-group m-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-bell bx-tada"></i>
            <span class="badge badge-danger badge-pill"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
            <div class="p-3">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="m-0"> Notifications </h6>
                </div>
                <div class="col-auto">
                  <a href="#!" class="small"> View All</a>
                </div>
              </div>
            </div>

          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user" src="assets\images\users\avatar-1.jpg" alt="Header Avatar">
              <span class="d-none d-xl-inline-block ml-1">Long</span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- item-->
              <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
              <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
              <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
            </div>
          </div>

        </div>
      </div>
    </header>
    <div class="vertical-menu">

      <div data-simplebar="" class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->

          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>
            <li>
              <a href="javascript: void(0);" class="waves-effect">
                <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"></span>
                <span>Trang chủ</span>
              </a>
            </li>
            <li>
            <li>
              <a href="rollcall.php" class=" waves-effect">
                <i class="bx bx-briefcase-alt-2"></i>
                <span>Điểm danh</span>
              </a>
            </li>
            <li>
              <a href="xemlichday.php">
                <i class="bx bx-briefcase-alt-2"></i>
                <span>Xem lịch dạy</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);">
                <i class="bx bx-briefcase-alt-2"></i>
                <span>Xem chi tiết các lớp học</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);">
                <i class="bx bx-briefcase-alt-2"></i>
                <span>Giao bài tập</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);">
                <i class="bx bx-briefcase-alt-2"></i>
                <span>Xem công nợ</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);">
                <i class="bx bx-briefcase-alt-2"></i>
                <span>Nội quy</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--ds-->
    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
            <div class="col-12">
              <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">ĐIỂM DANH</h4>

                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">MENU</a></li>
                    <li class="breadcrumb-item active">ĐIỂM DANH</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- end page title -->
          <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">

              </div>
              <pre></pre>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead style="text-align: center;">
                    <tr>
                      <th>ID</th>
                      <th>IsChecked</th>
                      <th>Date</th>
                      <th>StudentID</th>
                      <th>ClassID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($_GET['s']) && $_GET['s'] != '') {
                      $sql = 'select * from rollcall where fullname like "%' . $_GET['s'] . '%"';
                    } else {
                      $sql = 'select * from rollcall';
                    }

                    $rollcallList = executeResult($sql);

                    $index = 1;
                    foreach ($rollcallList as $std) {
                      echo '<tr>
			<td>' . $std['ID'] . '</td>
			<td>' . $std['IsChecked'] . '</td>
            <td>' . $std['Date'] . '</td>
            <td>' . $std['StudentID'] . '</td>
			<td>' . $std['ClassID'] . '</td>
			<td><button class="btn btn-danger" onclick="delete(' . $std['ID'] . ')">Delete</button></td>
		</tr>';
                    }
                    ?>
                  </tbody>
                </table>
                <button class="btn btn-success" onclick="window.open('dd.php', '_self')">Check Attendance</button>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            function delete(ID) {
              option = confirm('Bạn có muốn xoá sinh viên này không')
              if (!option) {
                return;
              }

              console.log(ID)
              $.post('delete_student.php', {
                'ID': ID
              }, function(data) {
                alert(data)
                location.reload()
              })
            }
          </script>




          <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <script>
                    document.write(new Date().getFullYear())
                  </script> © Sunshine Team.
                </div>
                <div class="col-sm-6">
                  <div class="text-sm-right d-none d-sm-block">
                    Design & Develop by Sunshine Team
                  </div>
                </div>
              </div>
            </div>
          </footer>