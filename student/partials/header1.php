<div class="header1 navbar navbar-expand pr-0 navbar-light border-bottom-2" id="default-navbar" data-primary>
    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
        <span class="material-icons">short_text</span>
    </button>

    <a href="index.html" class="navbar-brand mr-16pt d-lg-none">
        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">
            <span class="d-none d-lg-block">Sunshine</span>
    </a>

    <div class="flex"></div>

    <!-- Navbar Menu -->

    <div class=" nav navbar-nav flex-nowrap d-flex mr-16pt">

        <!-- Notifications dropdown -->
        <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Messages" data-placement="bottom" data-boundary="window">
            <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <div data-perfect-scrollbar class="position-relative">
                    <div class="dropdown-header"><strong>Messages</strong></div>
                    <div class="list-group list-group-flush mb-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window">
            <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
            </button>
        </div>

        <div class="nav-item dropdown">
            <li class="nav-item">
                <a class="btn btn-outline-dark"><?php echo $_SESSION['username'] ?></a>
            </li>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header"><strong>Account</strong></div>
                <a class="dropdown-item" href="../account.php">Edit Account</a>
                <a class="dropdown-item" href="../partials/logout.php">Logout</a>
            </div>
        </div>
    </div>

</div>