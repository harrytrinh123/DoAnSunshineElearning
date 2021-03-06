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
                                <span>Trang ch???</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlylop.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Qu???n l?? l???p</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlykh.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Qu???n l?? kh??a h???c</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a href="quanlyhs.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Qu???n l?? h???c sinh</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlygv.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Qu???n l?? gi??o vi??n</span>
                            </a>
                        </li>
                        <li>
                            <a href="quanlynv.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Qu???n l?? nh??n vi??n</span>
                            </a>
                        </li>
                        <li>
                            <a href="dshschuathanhtoan.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>DS HS ch??a thanh to??n</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="thongkedoanhthu.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>Th???ng k?? doanh thu</span>
                            </a>
                        </li>
                        <li>
                            <a href="noiquy.php"  class=" waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span>N???i quy</span>
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
                                <h4 class="mb-0 font-size-18">N???I QUY</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">MENU</a></li>
                                        <li class="breadcrumb-item active">N???I QUY</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="container">
		<div class="panel panel-primary">
		<p style="font-size: 120%;font-weight: bold">N???i quy gi??nh cho h???c vi??n t???i trung t??m Anh ng??? Sunshine VIETNAM <br> </p>
<p> 1. H???c vi??n c???n tham gia t??ch c???c, h??ng h??i ph??t bi???u trong l???p v?? l??m b??i t???p ?????y ????? tr?????c khi ?????n l???p.<br>

2. ??i h???c ?????y ?????, ????ng gi???. H???c vi??n ?????n mu???n 30 ph??t ???????c t??nh l?? ngh??? h???c.<br>

H???c vi??n ngh??? qu?? 20% s??? bu???i s??? kh??ng ???????c c???p ch???ng ch??? cu???i kho??.<br>

3.  Kh??ng ???????c t??? do ??n u???ng trong l???p h???c.<br>

4.  Kh??ng l??m m???t tr???t t???, h???n ch??? l??m vi???c ri??ng trong gi??? h???c. H???c vi??n n??o c?? vi ph???m l??m ???nh h?????ng ?????n vi???c h???c t???p c???a ng?????i kh??c th?? gi??o vi??n c?? quy???n y??u c???u h???c vi??n kh??ng tham gia bu???i h???c n???a. N???u c??c l???n ti??p theo v???n c?? h??nh vi nh?? v???y, trung t??m c?? quy???n y??u c???u h???c vi??n d???ng h???c m?? kh??ng c???n ho??n tr??? l???i h???c ph??. <br>

5. T???t ??i???n tho???i ho???c ????? ch??? ????? rung trong l???p. C?? th??? xin ra ngo??i ????? nghe ??i???n tho???i.<br>

6. ??i???u h??a s??? ???????c gi??o vi??n s??? d???ng theo ????ng n???i quy c???a trung t??m. H???c vi??n kh??ng ???????c d??ng ??i???u khi???n ??i???u h??a. N???u c???n d??ng, h??y h???i nh??n vi??n trung t??m.<br>

7. Kh??ng h??t thu???c trong ph??ng h???c, tu??n th??? c??c quy ?????nh v??? an to??n ch??y n??? c??ng nh?? ti???t ki???m ??i???n khi kh??ng c???n thi???t.<br>

8. Gi??? g??n v??? sinh chung c???a l???p v?? trung t??m.<br>

9. Trong tr?????ng h???p h???c vi??n tham gia < 1/3 kho?? h???c m?? mu???n bao l??u do c?? l?? do ch??nh   ????ng (ph???i ??i c??ng t??c ?????t xu???t ho???c do ???m ph???i ??i vi???n...) h???c vi??n ph???i l??m ????n xin b???o l??u g???i t???i trung t??m v?? ????n b???o l??u ph???i ???????c s??? ch???p nh???n c???a gi??m ?????c trung t??m. Th???i h???n b???o l??u l?? 2 th??ng k??? t??? ng??y ???????c ch???p nh???n b???o l??u. L??? ph?? b???o l??u l?? 20% t???ng h???c ph?? c???a kho?? h???c.<br>
10. Oxford English UK Vietnam kh??ng c?? ch??nh s??ch ho??n l???i h???c ph?? trong m???i tr?????ng h???p.
M???i th???c m???c xin li??n h??? ????? c?? th??m th??ng tin.
C??c quy ?????nh tr??n ??p d???ng cho t???t c??? c??c kho?? h???c t???i trung t??m. V?? v???y, khi h???c vi??n ???? ????ng k?? kho?? h???c th?? trung t??m s??? m???c ?????nh l?? h???c vi??n ???? t??m hi???u, c??n nh???c ?????y ????? v?? ?????ng ?? tu??n th??? c??c quy ?????nh tr??n.<br>

????? tham kh???o c??c kh??a h???c v?? bi???t th??m chi ti???t h??y li??n h??? v???i ch??ng t??i:<br>

B??? ph???n t?? v???n - Trung t??m Anh ng??? Sunshine
?????a ch???: 12, Nguy???n V??n B???o, ph?????ng 4, qu???n G?? V???p, Th??nh ph??? H??? Ch?? Minh
??i???n tho???i: 0325894792
Email: sunshine_elerning@oxford.edu.vn</p>
	




                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> ?? Sunshine Team.
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-right d-none d-sm-block">
                                        Design & Develop by Sunshine Team
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>