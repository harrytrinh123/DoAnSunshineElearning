<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 
  include("./partials/session.php");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hỗ trợ</title>
  <meta name="robots" content="noindex">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">
  <link type="text/css" href="../student/public/vendor/spinkit.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/style.css" rel="stylesheet">

  <link type="text/css" href="../student/public/vendor/perfect-scrollbar.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/material-icons.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/fontawesome.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/preloader.css" rel="stylesheet">
  <link type="text/css" href="../student/public/css/app.css" rel="stylesheet">
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

      
      <?php include("./partials/header1.php")?>

      <div class="navbar navbar-list navbar-light bg-white border-bottom-2 border-bottom navbar-expand-sm" style="white-space: nowrap;">
        <div class="container page__container">
          <nav class="nav navbar-nav">
            <div class="nav-item navbar-list__item">
              <a href="student-take-course.html" class="nav-link h-auto"><i class="material-icons icon--left"></i>Quay lại khóa học</a>
            </div>
            <div class="nav-item navbar-list__item">
              <div class="d-flex align-items-center flex-nowrap">
                <div class="flex">
                  <a href="student-take-course.html" class="card-title text-body mb-0">Movers</a>
                  <p class="lh-1 d-flex align-items-center mb-0">
                    <span class="text-50 small font-weight-bold mr-8pt"> Young Learners English</span>
                  </p>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="container page__container">
        <form action="hotrohandler.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-9">
              <div class="page-section">
                <h4>Yêu cầu hỗ trợ</h4>

                <div class="card--connect pb-32pt pb-lg-64pt">
                  <div class="card o-hidden mb-0">
                    <div class="card-body table--elevated">
                      <div class="form-group m-0" role="group" aria-labelledby="label-title">
                        <div class="form-row align-items-center">
                          <label id="label-title" for="title" class="col-md-3 col-form-label form-label">Question title</label>
                          <div class="col-md-9">
                            <input name="title" id="title" type="text" placeholder="Your question ..." class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-header bg-transparent">
                      <h5 class="text-uppercase mb-0">Câu hỏi tương tự</h5>
                    </div>

                    <div class="list-group list-group-flush">

                      <div class="list-group-item p-3">
                        <div class="row align-items-start">
                          <div class="col-md-3 mb-8pt mb-md-0">
                            <div class="media align-items-center">
                              <div class="media-left mr-12pt">
                                <a href="#" class="avatar avatar-sm">
                                  <span class="avatar-title rounded-circle">NĐ</span>
                                </a>
                              </div>
                              <div class="d-flex flex-column media-body media-middle">
                                <a href="#" class="card-title">Nguyễn Đức</a>
                                <small class="text-muted">2 days ago</small>
                              </div>
                            </div>
                          </div>
                          <div class="col mb-8pt mb-md-0">
                            <p class="mb-8pt"><a href="#" class="text-body"><strong>Các cấu trúc thường gặp trong Tiếng Anh?</strong></a></p>

                            <a href="#" class="chip chip-outline-secondary"> Cấu trúc thường gặp</a>

                          </div>
                          <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                            <h5 class="m-0">1</h5>
                            <p class="lh-1 mb-0"><small class="text-70">câu trả lời</small></p>
                          </div>
                        </div>
                      </div>

                      <div class="list-group-item p-3">
                        <div class="row align-items-start">
                          <div class="col-md-3 mb-8pt mb-md-0">
                            <div class="media align-items-center">
                              <div class="media-left mr-12pt">
                                <a href="#" class="avatar avatar-sm">
                                  <span class="avatar-title rounded-circle">MH</span>
                                </a>
                              </div>
                              <div class="d-flex flex-column media-body media-middle">
                                <a href="#" class="card-title">Mai Hương</a>
                                <small class="text-muted">3 days ago</small>
                              </div>
                            </div>
                          </div>
                          <div class="col mb-8pt mb-md-0">
                            <p class="mb-0"><a href="#" class="text-body"><strong>Tại sao mình không thể đăng ký khóa học Movers, cần có điều kiện gì ạ?</strong></a></p>

                          </div>
                          <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                            <h5 class="m-0">1</h5>
                            <p class="lh-1 mb-0"><small class="text-70">câu trả lời</small></p>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <div class="list-group">
                  <div class="list-group-item">
                    <div role="group" aria-labelledby="label-question" class="m-0 form-group">
                      <div class="form-row">
                        <label id="label-question" for="question" class="col-md-3 col-form-label form-label">Chi tiết câu hỏi</label>
                        <div class="col-md-9">
                          <textarea name="content"  id="question" placeholder="Mô tả chi tiết câu hỏi của bạn ..." rows="4" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="form-group m-0" role="group" aria-labelledby="label-topic">
                      <div class="form-row align-items-center">
                        <label id="label-topic" for="topic" class="col-md-3 col-form-label form-label">Chọn tệp</label>
                        <div class="col-md-9">
                          <form>
                            <input name="file" type="file" accept="image/*" />
                          </form>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input id="notify" type="checkbox" class="custom-control-input" checked="">
                      <label for="notify" class="custom-control-label">Thông báo cho qua email nếu có ai trả lời câu hỏi</label>
                    </div>
                    <small id="description-notify" class="form-text text-muted">Bạn vẫn sẽ nhận được thông báo của chúng tôi qua website</small>
                  </div>
                  <div class="list-group-item">
                    <button type="submit" class="btn btn-accent">Đăng câu hỏi</button>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-3 page-nav">
              <div data-perfect-scrollbar data-perfect-scrollbar-wheel-propagation="true">
                <div class="page-section pt-lg-112pt">
                  <div class="nav page-nav__menu">
                    <a href="javascript:void(0)" class="nav-link active">Lưu ý </a>
                  </div>
                  <div class="page-nav__content">
                    <p class="text-70">Có thể nhiều người có cùng câu hỏi với bạn nên hãy cân nhắc trước khi hỏi câu hỏi nào đó.</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <?php include("./partials/footer.php")?>

    </div>

    <?php include("./partials/sidebar.php")?>
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