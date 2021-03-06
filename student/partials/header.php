<div class="container-fluid">
  <div class="row bar_header">
    <div class="col-md-10"></div>
    <div class="col-md-2">
      <a class href="#" id="cuaHang"><i class="fas fa-store"></i></a>
      <?php 
        session_start();
        if (empty($_SESSION['username'])) {
          echo '<a class="btn-login" href="register.php">Đăng ký</a> |
          <a class="btn-login" href="login.php">Đăng nhập</a>';
          
        }
        else {
          echo '<a class="btn-login" href="account.php">'.$_SESSION['username'].'</a> |
          <a class="btn-login" href="./partials/logout.php">Logout</a>';
        }
      ?>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light my_nav">
  <a class="navbar-brand" href="."><img id="logo" src="./images/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./home.php"> Homepage <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./forum.php">Forum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./about.php">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item  carousel_img_custom">
      <img src="./images/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active carousel_img_custom">
      <img src="./images/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item carousel_img_custom">
      <img src="./images/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>