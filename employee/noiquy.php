<?php
require_once ('dbhelp.php');
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
                            <span class="d-none d-xl-inline-block ml-1">Bee</span>
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
                            <a href="index.php" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"></span>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlylop.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý lớp</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlykh.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý khóa học</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a href="quanlyhs.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý học sinh</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlygv.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý giáo viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="dshschuathanhtoan.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>DS HS chưa thanh toán</span>
                            </a>
                        </li>
                        <li>
                            <a href="noiquy.php"  class=" waves-effect">
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
                                <h4 class="mb-0 font-size-18">NỘI QUY</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">MENU</a></li>
                                        <li class="breadcrumb-item active">NỘI QUY</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="container">
		<div class="panel panel-primary">
		<p style="font-size: 120%;font-weight: bold">Nội quy giành cho học viên tại trung tâm Anh ngữ Sunshine VIETNAM <br> </p>
<p> 1. Học viên cần tham gia tích cực, hăng hái phát biểu trong lớp và làm bài tập đầy đủ trước khi đến lớp.<br>

2. Đi học đầy đủ, đúng giờ. Học viên đến muộn 30 phút được tính là nghỉ học.<br>

Học viên nghỉ quá 20% số buổi sẽ không được cấp chứng chỉ cuối khoá.<br>

3.  Không được tự do ăn uống trong lớp học.<br>

4.  Không làm mất trật tự, hạn chế làm việc riêng trong giờ học. Học viên nào có vi phạm làm ảnh hưởng đến việc học tập của người khác thì giáo viên có quyền yêu cầu học viên không tham gia buổi học nữa. Nếu các lần tiêp theo vẫn có hành vi như vậy, trung tâm có quyền yêu cầu học viên dừng học mà không cần hoàn trả lại học phí. <br>

5. Tắt điện thoại hoặc để chế độ rung trong lớp. Có thể xin ra ngoài để nghe điện thoại.<br>

6. Điều hòa sẽ được giáo viên sử dụng theo đúng nội quy của trung tâm. Học viên không được dùng điều khiển điều hòa. Nếu cần dùng, hãy hỏi nhân viên trung tâm.<br>

7. Không hút thuốc trong phòng học, tuân thủ các quy định về an toàn cháy nổ cũng như tiết kiệm điện khi không cần thiết.<br>

8. Giữ gìn vệ sinh chung của lớp và trung tâm.<br>

9. Trong trường hợp học viên tham gia < 1/3 khoá học mà muốn bao lưu do có lý do chính   đáng (phải đi công tác đột xuất hoặc do ốm phải đi viện...) học viên phải làm đơn xin bảo lưu gửi tới trung tâm và đơn bảo lưu phải được sự chấp nhận của giám đốc trung tâm. Thời hạn bảo lưu là 2 tháng kể từ ngày được chấp nhận bảo lưu. Lệ phí bảo lưu là 20% tổng học phí của khoá học.<br>
10. Oxford English UK Vietnam không có chính sách hoàn lại học phí trong mọi trường hợp.
Mọi thắc mắc xin liên hệ để có thêm thông tin.
Các quy định trên áp dụng cho tất cả các khoá học tại trung tâm. Vì vậy, khi học viên đã đăng ký khoá học thì trung tâm sẽ mặc định là học viên đã tìm hiểu, cân nhắc đầy đủ và đồng ý tuân thủ các quy định trên.<br>

Để tham khảo các khóa học và biết thêm chi tiết hãy liên hệ với chúng tôi:<br>

Bộ phận tư vấn - Trung tâm Anh ngữ Sunshine
Địa chỉ: 12, Nguyễn Văn Bảo, phường 4, quận Gò Vấp, Thành phố Hồ Chí Minh
Điện thoại: 0325894792
Email: sunshine_elerning@oxford.edu.vn</p>
	




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