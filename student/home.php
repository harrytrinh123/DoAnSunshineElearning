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

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
              <h2 class="mb-0">KẾT QUẢ HỌC TẬP</h2>

              <ol class="breadcrumb p-0 m-0">
                <li><a href="index.php">Home</a></li>

                <li>
                  > > Kết quả học tập
                </li>

              </ol>

            </div>
          </div>



        </div>
      </div>

      <div class="container page__container">
        <div class="page-section">

          <div class="page-separator">
            <div class="page-separator__text">TỔNG QUÁT</div>
          </div>

          <div class="row mb-lg-8pt">
            <div class="col-lg-6">

              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <div class="h2 mb-0 mr-3">116</div>
                  <div class="flex">
                    <p class="card-title"></p>
                    <p class="card-subtitle text-50">Điểm cao nhất</p>
                  </div>
                  <div class="dropdown">
                    <a href="#" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Khóa học</a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Staters</a>
                      <a href="#" class="dropdown-item">Movers</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="page-separator">
                <div class="page-separator__text">Quá trình học tập</div>
              </div>

              <div class="card">
                <div class="month">
                  <ul>
                    <li class="prev">&#10094;</li>
                    <li class="next">&#10095;</li>
                    <li>
                      JUNE<br>
                      <span style="font-size:18px">2021</span>
                    </li>
                  </ul>
                </div>
                <ul class="weekdays">
                  <li>Mo</li>
                  <li>Tu</li>
                  <li>We</li>
                  <li>Th</li>
                  <li>Fr</li>
                  <li>Sa</li>
                  <li>Su</li>
                </ul>

                <ul class="days">
                  <li>1 <p class="a"> ✔</p>
                  </li>
                  <li>2</li>
                  <li>3 <p>✘ </p>
                  </li>
                  <li>4</li>
                  <li>5 <p class="a"> ✔</p>
                  </li>
                  <li>6</li>
                  <li>7 <p>✘ </p>
                  </li>
                  <li>8</li>
                  <li>9</li>
                  <li>10 <p class="a"> ✔</p>
                  </li>
                  <li>11 </li>
                  <li>12 <p class="a"> ✔</p>
                  </li>
                  <li>13</li>
                  <li>14<p class="a"> ✔</p>
                  </li>
                  <li>15</li>
                  <li>16</li>
                  <li>17 <p class="a"> ✔</p>
                  </li>
                  <li>18</li>
                  <li>19 <p class="a"> ✔</p>
                  </li>
                  <li>20</li>
                  <li>21</li>
                  <li>22 <p class="a"> ✔</p>
                  </li>
                  <li> <span class="active">23 </span></li>
                  <li>24</li>
                  <li>25</li>
                  <li>26</li>
                  <li>27</li>
                  <li>28</li>
                  <li>29</li>
                  <li>30</li>
                  <li>31</li>
                </ul>
              </div>

            </div>
            <div class="col-lg-6">

              <div class="card">
                <div class="card-header d-flex align-items-center border-0">
                  <div class="h2 mb-0 mr-3">110</div>
                  <div class="flex">
                    <p class="card-title">Điểm trung bình</p>
                    <p class="card-subtitle text-50">4 ngày liên tiếp trong tuần này</p>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="chart" style="height: 128px;">
                    <canvas id="iqChart" class="chart-canvas js-update-chart-line" data-chart-hide-axes="false" data-chart-points="true" data-chart-suffix="pt" data-chart-line-border-color="primary"></canvas>
                  </div>
                </div>
              </div>

              <div id="carouselExampleFade" class="carousel carousel-card slide mb-24pt">
                <div class="carousel-inner">

                  <div class="carousel-item active">

                    <a class="card border-0 mb-0" href="#">
                      <img src="../student1/public/images/achievements/flinto.png" alt="Flinto" class="card-img" style="max-height: 100%; width: initial;">
                      <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                      <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                        <span class="row flex-nowrap">
                          <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                            <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Thành tích</span>
                            <span class="text-white-60 d-block mb-24pt">Jun 5, 2018</span>
                          </span>
                          <span class="col d-flex flex-column">
                            <span class="text-right flex mb-16pt">
                              <img src="../student1/public/images/paths/mailchimp_200x168.png" width="64" alt="Flinto" class="rounded">
                            </span>
                          </span>
                        </span>
                        <span class="row flex-nowrap">
                          <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                            <img src="../student1/public/images/illustration/achievement/128/white.png" width="64" alt="achievement">
                          </span>
                          <span class="col d-flex flex-column">
                            <span>
                              <span class="card-title text-white mb-4pt d-block">Flinto</span>
                              <span class="text-white-60">Học viên hoàn thành xuất sắc khóa học Staters</span>
                            </span>
                          </span>
                        </span>
                      </span>
                    </a>

                  </div>

                  <div class="carousel-item">

                    <a class="card border-0 mb-0" href="#">
                      <img src="../student1/public/images/achievements/angular.png" alt="Angular fundamentals" class="card-img" style="max-height: 100%; width: initial;">
                      <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                      <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                        <span class="row flex-nowrap">
                          <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                            <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Thành tích</span>
                            <span class="text-white-60 d-block mb-24pt">Jun 7, 2019</span>
                          </span>
                          <span class="col d-flex flex-column">
                            <span class="text-right flex mb-16pt">
                              <img src="../student1/public/images/paths/angular_64x64.png" width="64" alt="Angular" class="rounded">
                            </span>
                          </span>
                        </span>
                        <span class="row flex-nowrap">
                          <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                            <img src="../student1/public/images/illustration/achievement/128/white.png" width="64" alt="achievement">
                          </span>
                          <span class="col d-flex flex-column">
                            <span>
                              <span class="card-title text-white mb-4pt d-block">Angular</span>
                              <span class="text-white-60">Học viên xuất sắc giành “cú đúp” giải nhất trong cuộc thi Olympic Tiếng Anh</span>
                            </span>
                          </span>
                        </span>
                      </span>
                    </a>

                  </div>

                </div>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-icon material-icons" aria-hidden="true"> »</span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>
          </div>

          <div class="row mb-lg-16pt">
            <div class="col-lg-6 mb-8pt mb-sm-0">
              <div class="page-separator">
                <div class="page-separator__text">Lộ trình học tập</div>
              </div>

              <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                  <div class="d-flex align-items-center">
                    <div class="flex">
                      <div class="d-flex align-items-center">
                        <div class="rounded mr-12pt z-0 o-hidden">
                          <div class="overlay">
                            <img src="../student1/public/images/marker/khoahoc1.jpg" width="40" height="40" alt="Angular" class="rounded">
                            <span class="overlay__content overlay__content-transparent">
                              <span class="overlay__action d-flex flex-column text-center lh-1">
                                <small class="h6 small text-white mb-0" style="font-weight: 500;">100%</small>
                              </span>
                            </span>
                          </div>
                        </div>
                        <div class="flex">
                          <div class="card-title">Staters</div>
                          <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                        </div>
                      </div>
                    </div>

                    <a href="#" class="ml-4pt btn btn-sm btn-link text-secondary">Done</a>

                  </div>

                </div>
              </div>

              <div class="popoverContainer d-none">
                <div class="media">
                  <div class="media-left mr-12pt">
                    <img src="../student1/public/images/marker/khoahoc1.jpg" width="40" height="40" alt="loan" class="rounded">
                  </div>
                  <div class="media-body">
                    <div class="card-title">Staters</div>
                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                  </div>
                </div>

                <p class="mt-16pt text-70">Chứng chỉ tiếng Anh quốc tế Starters là chứng chỉ Anh ngữ Quốc tế bắt buộc dành cho các em học sinh bậc tiểu học.</p>

                <div class="my-32pt">
                  <div class="d-flex align-items-center mb-8pt justify-content-center">
                    <div class="d-flex align-items-center mr-8pt">
                      <span class="material-icons icon-16pt text-50 mr-4pt"></span>
                      <p class="flex text-50 lh-1 mb-0"><small>30 days</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-4pt"></span>
                      <p class="flex text-50 lh-1 mb-0"><small>11 lessons</small></p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="#" class="btn btn-primary mr-8pt">Done</a>
                    <a href="#" class="btn btn-outline-secondary ml-0">Start over</a>
                  </div>
                </div>

                <div class="d-flex align-items-center">
                  <small class="text-50 mr-8pt">Đánh giá </small>
                  <div class="rating mr-8pt">
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                  </div>
                  <small class="text-50">4/5</small>
                </div>
              </div>

              <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                  <div class="d-flex align-items-center">
                    <div class="flex">
                      <div class="d-flex align-items-center">
                        <div class="rounded mr-12pt z-0 o-hidden">
                          <div class="overlay">
                            <img src="../student1/public/images/marker/khoahoc2.jpg" width="40" height="40" alt="Angular" class="rounded">
                            <span class="overlay__content overlay__content-transparent">
                              <span class="overlay__action d-flex flex-column text-center lh-1">
                                <small class="h6 small text-white mb-0" style="font-weight: 500;">20%</small>
                              </span>
                            </span>
                          </div>
                        </div>
                        <div class="flex">
                          <div class="card-title">Movers</div>
                          <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                        </div>
                      </div>
                    </div>

                    <a href="#" class="ml-4pt btn btn-sm btn-link text-secondary border-1 border-secondary">Resume</a>

                  </div>

                </div>
              </div>

              <div class="popoverContainer d-none">
                <div class="media">
                  <div class="media-left mr-12pt">
                    <img src="../student1/public/images/marker/khoahoc2.jpg" width="40" height="40" alt="" class="rounded">
                  </div>
                  <div class="media-body">
                    <div class="card-title">Movers</div>
                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                  </div>
                </div>

                <p class="mt-16pt text-70"> Movers, là bước thứ hai trong hành trình học ngoại ngữ của trẻ sau khi vượt qua Cambridge English: Starters.</p>

                <div class="my-32pt">
                  <div class="d-flex align-items-center mb-8pt justify-content-center">
                    <div class="d-flex align-items-center mr-8pt">
                      <span class="material-icons icon-16pt text-50 mr-4pt"></span>
                      <p class="flex text-50 lh-1 mb-0"><small>30 days</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-4pt"></span>
                      <p class="flex text-50 lh-1 mb-0"><small>14 lessons</small></p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="#" class="btn btn-primary mr-8pt">Resume</a>
                    <a href="#" class="btn btn-outline-secondary ml-0">Start over</a>
                  </div>
                </div>

                <div class="d-flex align-items-center">
                  <small class="text-50 mr-8pt">Đánh giá </small>
                  <div class="rating mr-8pt">
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                  </div>
                  <small class="text-50">4/5</small>
                </div>
              </div>

              <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                  <div class="d-flex align-items-center">
                    <div class="flex">
                      <div class="d-flex align-items-center">
                        <div class="rounded mr-12pt z-0 o-hidden">
                          <div class="overlay">
                            <img src="../student1/public/images/marker/khoahoc3.jpg" width="40" height="40" alt="Angular" class="rounded">
                            <span class="overlay__content overlay__content-transparent">
                              <span class="overlay__action d-flex flex-column text-center lh-1">
                                <small class="h6 small text-white mb-0" style="font-weight: 500;">0%</small>
                              </span>
                            </span>
                          </div>
                        </div>
                        <div class="flex">
                          <div class="card-title">Flyers</div>
                          <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                        </div>
                      </div>
                    </div>

                    <a href="#" class="ml-4pt btn btn-sm btn-link text-secondary">Start</a>

                  </div>

                </div>
              </div>

              <div class="popoverContainer d-none">
                <div class="media">
                  <div class="media-left mr-12pt">
                    <img src="../student1/public/images/marker/khoahoc3.jpg" width="40" height="40" alt="Angular" class="rounded">
                  </div>
                  <div class="media-body">
                    <div class="card-title">Flyers</div>
                    <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                  </div>
                </div>

                <p class="mt-16pt text-70">Flyers là cấp độ cao nhất trong kỳ thi Cambridge YLE, thuộc trình độ A2 theo Khung trình độ chung Châu Âu (CEFR).</p>

                <div class="my-32pt">
                  <div class="d-flex align-items-center mb-8pt justify-content-center">
                    <div class="d-flex align-items-center mr-8pt">
                      <span class="material-icons icon-16pt text-50 mr-4pt"></span>
                      <p class="flex text-50 lh-1 mb-0"><small>29 days</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-4pt"></span>
                      <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="#" class="btn btn-primary mr-8pt">Resume</a>
                    <a href="#" class="btn btn-outline-secondary ml-0">Start over</a>
                  </div>
                </div>

                <div class="d-flex align-items-center">
                  <small class="text-50 mr-8pt">Đánh giá </small>
                  <div class="rating mr-8pt">
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                    <span class="rating__item"><span class="material-icons text-primary">✰</span></span>
                  </div>
                  <small class="text-50">5/5</small>
                </div>
              </div>

            </div>
            <div class="col-lg-6">

              <div class="page-separator">
                <div class="page-separator__text">KHÓA HỌC</div>
              </div>

              <div class="position-relative carousel-card">
                <div class="js-mdk-carousel row d-block" id="carousel-courses1">

                  <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#" role="button" data-slide="next">
                    <span class="carousel-control-icon material-icons" aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>

                  <div class="mdk-carousel__content">

                    <div class="col-12 col-sm-6">

                      <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">

                        <a href="#" class="js-image" data-position="">
                          <img src="../student1/public/images/paths/angular_patterns_430x168.png" alt="course">
                          <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                              <i class="material-icons mr-4pt"></i>
                              <span class="card-title text-white">Resume</span>
                            </span>
                          </span>
                        </a>

                        <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>

                        <div class="mdk-reveal__content">
                          <div class="card-body">
                            <div class="d-flex">
                              <div class="flex">
                                <a class="card-title" href="#">Learn Premium</a>
                                <small class="text-50 font-weight-bold mb-4pt">Khóa nâng cao</small>
                              </div>
                              <a href="#" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite"></a>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-12 col-sm-6">

                      <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">

                        <a href="#" class="js-image" data-position="">
                          <img src="../student1/public/images/paths/angular_testing_430x168.png" alt="course">
                          <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                              <span class="card-title text-white">Resume</span>
                            </span>
                          </span>
                        </a>

                        <div class="mdk-reveal__content">
                          <div class="card-body">
                            <div class="d-flex">
                              <div class="flex">
                                <a class="card-title" href="#">Movers </a>
                                <small class="text-50 font-weight-bold mb-4pt">Khóa học nâng cao</small>
                              </div>
                              <a href="#" data-toggle="tooltip" data-title="Remove Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite"></a>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-12 col-sm-6">

                      <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">

                        <a href="#" class="js-image" data-position="">
                          <img src="../student1/public/images/paths/figma_430x168.png" alt="course">
                          <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                              <span class="card-title text-white">Resume</span>
                            </span>
                          </span>
                        </a>

                        <div class="mdk-reveal__content">
                          <div class="card-body">
                            <div class="d-flex">
                              <div class="flex">
                                <a class="card-title" href="#">Flyers </a>
                                <small class="text-50 font-weight-bold mb-4pt">Khóa học nâng cao</small>
                              </div>
                              <a href="#" data-toggle="tooltip" data-title="Remove Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite"></a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="page-separator">
            <div class="page-separator__text">Mức độ hoàn thành</div>
          </div>

          <div class="row card-group-row">

            <div class="card-group-row__col col-md-6">

              <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                  <a href="#" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="../student1/public/images/paths/mailchimp_200x168.png" alt="Introduction to TypeScript" class="avatar-img rounded">
                    <span class="overlay__content"></span>
                  </a>
                  <div class="flex mr-12pt">
                    <a class="card-title" href="#">Lesson 1:Các cấu trúc thường gặp trong câu</a>
                    <div class="card-subtitle text-50">3 days ago</div>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <span class="lead text-headings lh-1">58%</span>
                    <small class="text-50 text-uppercase text-headings">Hoàn thành</small>
                  </div>
                </div>

                <div class="progress rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 58%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex mr-2">
                      <a href="#" class="btn btn-light btn-sm">

                        <i class="material-icons icon--left"></i> Continue

                      </a>
                    </div>

                  </div>
                </div>
              </div>

            </div>
            <div class="card-group-row__col col-md-6">

              <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                  <a href="#" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="../student1/public/images/paths/swift_200x168.png" alt="Introduction to TypeScript" class="avatar-img rounded">
                    <span class="overlay__content"></span>
                  </a>
                  <div class="flex mr-12pt">
                    <a class="card-title" href="#">Lesson 2:Động từ và cấu trúc của câu</a>
                    <div class="card-subtitle text-50">3 days ago</div>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <span class="lead text-headings lh-1">60%</span>
                    <small class="text-50 text-uppercase text-headings">Hoàn thành</small>
                  </div>
                </div>

                <div class="progress rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex mr-2">
                      <a href="#" class="btn btn-light btn-sm">

                        <i class="material-icons icon--left"> Reset</i>

                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="card-group-row__col col-md-6">

              <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                  <a href="#" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="../student1/public/images/paths/sketch_200x168.png" alt="Introduction to TypeScript" class="avatar-img rounded">
                    <span class="overlay__content"></span>
                  </a>
                  <div class="flex mr-12pt">
                    <a class="card-title" href="#">Lesson 3:Tính từ và cấu trúc của câu</a>
                    <div class="card-subtitle text-50">1 days ago</div>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <span class="lead text-headings lh-1">90%</span>
                    <small class="text-50 text-uppercase text-headings">Hoàn thành</small>
                  </div>
                </div>

                <div class="progress rounded-0" style="height: 4px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex mr-2">
                      <a href="#" class="btn btn-light btn-sm">

                        <i class="material-icons icon--left"> Reset</i>

                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="card-group-row__col col-md-6">

              <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                  <a href="#" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                    <img src="../student1/public/images/paths/craft_200x168.png" alt="Angular Fundamentals" class="avatar-img rounded">
                    <span class="overlay__content"></span>
                  </a>
                  <div class="flex mr-12pt">
                    <a class="card-title" href="#">Lesson 4:Động từ và cấu trúc của câu</a>
                    <div class="card-subtitle text-50">2 days ago</div>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <span class="lead text-headings lh-1">0%</span>
                    <small class="text-50 text-uppercase text-headings">Hoàn thành</small>
                  </div>
                </div>

                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex mr-2">
                      <a href="#" class="btn btn-light btn-sm">

                        <i class="material-icons icon--left"></i> Reset

                      </a>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="mb-32pt">

            <ul class="pagination justify-content-start pagination-xsm m-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true" class="material-icons"></span>
                  <span>Prev</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Page 1">
                  <span>1</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Page 2">
                  <span>2</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span>Next</span>
                  <span aria-hidden="true"></span>
                </a>
              </li>
            </ul>
          </div>

        </div>
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