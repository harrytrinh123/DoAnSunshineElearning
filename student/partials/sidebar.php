<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
      <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left" data-perfect-scrollbar>

          <!-- Sidebar Content -->

          <div class="d-flex align-items-center navbar-height">
            <form action="#" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
              <input type="text" class="form-control pl-0" placeholder="Search">
              <button class="btn" type="submit"><i class="material-icons">search</i></button>
            </form>
          </div>

          <a href="../student/home.php" class="sidebar-brand ">

            <span class="avatar avatar-xl sidebar-brand-icon h-auto">

              <span class="avatar-title rounded bg-primary"><img src="./public/images/people/110/avatar.jpg" class="img-fluid" alt="logo" /></span>

            </span>

            <span><?php echo $_SESSION['username']?></span>
          </a>
          <ul class="sidebar-menu">

            <li class="sidebar-menu-item ">
              <a class="sidebar-menu-button" href="home.php">
                <span class="sidebar-menu-text">Home</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="testnangluc.php">
                <span class="sidebar-menu-text">Test năng lực</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="chonlop.php">
                <span class="sidebar-menu-text">Đăng ký khóa học</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="lichhoc.php">
                <span class="sidebar-menu-text">Lịch học</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="diemdanh.php">
                <span class="sidebar-menu-text">Điểm danh</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="baitap.php">
                <span class="sidebar-menu-text">Bài tập</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="danhgia.php">
                <span class="sidebar-menu-text">Đánh giá</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="forum.php">
                <span class="sidebar-menu-text">Forum</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="hotro.php">
                <span class="sidebar-menu-text">Hỗ trợ</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="account.php">
                <span class="sidebar-menu-text">Thông tin cá nhân</span>
              </a>
            </li>
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="./partials/logout.php">
                <span class="sidebar-menu-text">Logout</span>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>