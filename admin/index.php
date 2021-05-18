<!DOCTYPE html>
<html lang="en">

<head>

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
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"></span>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý lớp</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý khóa học</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý học sinh</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý giáo viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý nhân viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>DS HS chưa thanh toán</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Quản lý giáo viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Thống kê doanh thu</span>
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
                                <h4 class="mb-0 font-size-18">Trang chủ</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Trang liên kết</h4>
                                    <div class="text-center">
                                        <div class="avatar-sm mx-auto mb-4">
                                            <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                                                <i class="mdi mdi-facebook text-primary"></i>
                                            </span>
                                        </div>
                                        <p class="font-16 text-muted mb-2"></p>
                                        <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 clicks</span> </a></h5>
                                        <p class="text-muted">Số lượt click vào khóa học tăng mạnh.</p>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                        <i class="mdi mdi-facebook text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Facebook</h5>
                                                <p class="text-muted mb-0">125 clicks</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-info font-size-16">
                                                        <i class="mdi mdi-twitter text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Twitter</h5>
                                                <p class="text-muted mb-0">112 clicks</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                        <i class="mdi mdi-instagram text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Instagram</h5>
                                                <p class="text-muted mb-0">104 clicks</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5">Hoạt động</h4>
                                    <ul class="verti-timeline list-unstyled">
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Khóa học do giảng viên Nguyễn Văn Thuận đã được đánh giá 5 sao.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Các khóa học mới được bắt đầu vào ngày 31/5 mới quý phụ huynh... <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list active">
                                            <div class="event-timeline-dot">
                                                <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Khóa học Flyers 204 đã được đánh giá bởi user dangthikimngan
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                                            </div>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Có 5 yêu cầu hỗ trợ từ học viên cần được xử lý.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-4"><a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ml-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Các khóa học bán chạy</h4>

                                    <div class="text-center">
                                        <div class="mb-4">
                                            <i class="bx bx-map-pin text-primary display-4"></i>
                                        </div>
                                        <h3>1,456</h3>
                                        <p>Khóa học Starters</p>
                                    </div>

                                    <div class="table-responsive mt-4">
                                        <table class="table table-centered table-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 30%">
                                                        <p class="mb-0">Khóa học Starters</p>
                                                    </td>
                                                    <td style="width: 25%">
                                                        <h5 class="mb-0">1,456</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0">Khóa học Movers</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="mb-0">1,123</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0">Khóa học Flyers</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="mb-0">1,026</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->




                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Skote.
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-right d-none d-sm-block">
                                        Design & Develop by Themesbrand
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>