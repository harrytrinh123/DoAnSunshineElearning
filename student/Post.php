<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("./partials/headlibs.php") ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Bài</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4197e7d2f0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/forum.css" />
<body>
    <div class="container">
        <div class="header">
            <h1>Logo</h1>
        </div>
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
                        <label for="exampleFormControlInput1">Tiêu Đề</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vui lòng nhập tiêu đề ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Chọn Chủ Đề</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Nghe</option>
                            <option>Nói</option>
                            <option>Đọc</option>
                            <option>Viết</option>
                            <option>Khác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nội Dung</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Đăng Bài</button>
                        <button type="submit" class="btn btn-danger">Huỷ</button>
                    </div>
                </form>
            </div>

        </div>

        <?php include("./partials/footer.php")?>
    </div>
</body>
</html>