<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include("./partials/headlibs.php") ?>
  <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
  <?php include("./partials/header.php") ?>
  <div class="container">
    <!-- MAIN -->
    <div class="container">
      <!-- Muc tieu khoa hoc -->
      <h1 class="m-t-5 text-center">Tiếng Anh cho trẻ từ 6-14 tuổi</h1>
      <h4 class="text-center">Con chinh phục 6 mục tiêu vàng</h4>
      <div class="row">
        <div class="col-md-4">
          <div class="card card_muctieu">
            <img src="./images/muctieu1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <strong class="card_text_muctieu">Phát âm chuẩn</strong>
              <p class="card_text_muctieu">như người bản xứ</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card_muctieu">
            <img src="./images/muctieu2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <strong class="card_text_muctieu">Tự tin giao tiếp</strong>
              <p class="card_text_muctieu">tạo thành phản xạ ngôn ngữ</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card_muctieu">
            <img src="./images/muctieu3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <strong class="card_text_muctieu">Học online, hệ thống chấm bài online</strong>
              <p class="card_text_muctieu">thuận tiện cho việc đi lại, theo dõi sát sao quá trình học của con.</p>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card_muctieu">
            <img src="./images/muctieu4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <strong class="card_text_muctieu">Trang bị bộ kỹ năng</strong>
              <p class="card_text_muctieu">Sáng tạo, Hợp tác, Giao tiếp & Tư duy phản biện</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card_muctieu">
            <img src="./images/muctieu5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <strong class="card_text_muctieu">Sở hữu sớm chứng chỉ</strong>
              <p class="card_text_muctieu">Cambridge Starters, Movers, Flyers</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card_muctieu">
            <img src="./images/muctieu6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <strong class="card_text_muctieu">Hình thành nhân cách</strong>
              <p class="card_text_muctieu">
                Chia sẻ cảm xúc, quan tâm, đồng cảm, biết ơn,...</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Cac khoa hoc -->
      <h1 class="m-5 text-center">CÁC KHÓA HỌC CỦA CHÚNG TÔI</h1>
      <div class="row">

        <div class="col-md-4">
          <div class="card card_thongtin_khoahoc">
            <img src="./images/khoahoc1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Staters</h5>
              <p class="card-text">Chứng chỉ tiếng Anh quốc tế Starters là chứng chỉ Anh ngữ Quốc tế bắt buộc dành cho các em học sinh bậc tiểu học. Starters là bài thi đầu tiên trong số ba bài thi của Cambridge English: Young Learners (YLE), dành cho học sinh bậc giáo dục tiểu học và trung học cơ sở.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card card_thongtin_khoahoc">
            <img src="./images/khoahoc2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Movers</h5>
              <p class="card-text">Movers hay Young Learners English: Movers, là bước thứ hai trong hành trình học ngoại ngữ của trẻ sau khi vượt qua Cambridge English: Starters. Đây là phương pháp tuyệt vời giúp trẻ xây dựng các kỹ năng ngôn ngữ và tiến bộ hơn trong việc học tiếng Anh.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card_thongtin_khoahoc">
            <img src="./images/khoahoc3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Flyers</h5>
              <p class="card-text">Flyers là cấp độ cao nhất trong kỳ thi Cambridge YLE, thuộc trình độ A2 theo Khung trình độ chung Châu Âu (CEFR).</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End cac khoa hoc -->
      <div class="row m-3">
        <div class="col-md-6">
          <img class="img-fluid img-thumbnail" src="./images/hocbong.jpg" alt="">
        </div>
        <div class="col-md-6">
          <div class="row box align-items-center bg-light position-relative">
            <!-- form register -->
            <div class="col-md-12 textce">
              <h2 class="text-center font-weight-bold">Đăng ký tài khoản để tham gia học và nhận học bổng lên đến 3.500.000 Đ</h2>
              <form action="POST">
                <div class="form-group">
                  <label for="unam">Tài khoản:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="uname" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Mật khẩu:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Nhập lại mật khẩu:</label>
                  <input type="password" class="form-control" id="pwdNhapLai" placeholder="Nhập lại mật khẩu" name="pwdNhapLai" required>
                </div>
                <div class="form-group">
                  <label for="hoTen">Họ tên:</label>
                  <input type="text" class="form-control" id="hoTen" placeholder="Nhập họ tên" name="hoTen">
                </div>
                <div class="form-group">
                  <label for="ngaySinh">Ngày sinh:</label>
                  <input type="date" class="form-control" id="ngaySinh" name="ngaySinh">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="accept"> Tôi chấp nhận với <a href="#">điều khoản sử dụng.</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">ĐĂNG KÝ NGAY</button>
              </form>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <?php include("./partials/footer.php") ?>
  <!-- Contact bar -->
  <ul class="contact-bar">
    <li class="facebook">
      <a href="https://m.me" target="_blank" rel="nofollow"></a>
    </li>
    <li class="zalo">
      <a href="https://zalo.me" target="_blank" rel="nofollow"></a>
    </li>
  </ul>
</body>

</html>