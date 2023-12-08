<!-- Navbar -->
<nav class="main-header navbar navbar-expand {{config('lte3.view.dark_mode') ? 'dark-mode' : 'navbar-white navbar-light'}}">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        @auth
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="/vendor/adminlte/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2"
                     alt="User Image">
                <span class="d-none d-md-inline">{{ Lte3::user('name') }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="/admin/profile" class="btn btn-default btn-flat">Profile</a>
                    <a href="/logout" class="btn btn-default btn-flat float-right js-click-submit"
                       data-confirm="Logout?">Sign out</a>
                </li>
            </ul>
        </li>
        @else
        <li class="nav-item">
            <a href="/logout" class="nav-link js-click-submit" data-confirm="Logout?" role="button">
                <i class="fa fa-sign-out-alt"></i>
            </a>
        </li>
        @endauth
    </ul>
</nav>
<!-- /.navbar -->
