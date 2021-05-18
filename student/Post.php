<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("./partials/headlibs.php") ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Bài</title>
  <link rel="stylesheet" href="assets/css/forum.css" />
    <link rel="stylesheet" href="./assets/css/index.css">
<body>
  <?php include("./partials/header.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-3 col-s-3 menu">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action"><p style="text-align:center">Danh Mục</p></a>
                    <a href="#" class="list-group-item list-group-item-action active"><p style="text-align:center">Đăng Bài</p></a>
                    <a href="#" class="list-group-item list-group-item-action"><p style="text-align:center">Làm Bài Tập</p></a>
                    <a href="#" class="list-group-item list-group-item-action"><p style="text-align:center">Xem Lịch Học</p></a>
                </div>
            </div>
            <div class="col-9 col-s-9 menu" >
                <form>
                    <div class="form-group">
                        <label style="font-weight:bold" for="exampleFormControlInput1">Tiêu Đề</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vui lòng nhập tiêu đề ...">
                    </div>
                    <div class="form-group">
                        <label style="font-weight:bold" for="exampleFormControlSelect1">Chọn Chủ Đề</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Nghe</option>
                            <option>Nói</option>
                            <option>Đọc</option>
                            <option>Viết</option>
                            <option>Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="font-weight:bold" for="exampleFormControlTextarea1">Nội Dung</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Đăng Bài</button>
						<button type="button" class="btn btn-danger btn-lg btn-block">Huỷ</button>
                    </div>
                </form>
            </div>
		</div>
        </div>
<<<<<<< HEAD
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
>>>>>>> main
</body>
</html>