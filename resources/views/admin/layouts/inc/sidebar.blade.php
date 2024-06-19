  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="{{ url(config('lte3.dashboard_slug')) }}" class="brand-link">
      <img src="/vendor/adminlte/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{!! config('lte3.logo') !!}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @auth
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/vendor/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin/profile" class="d-block"> {{ Lte3::user('name') }} </a>
            </div>
        </div>
        @endauth
{{--        @if(config('lte3.view.sidebar.search'))--}}
{{--        <!-- SidebarSearch Form -->--}}
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-sidebar">--}}
{{--                <i class="fas fa-search fa-fw"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endif--}}

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column js-activeable" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.authors.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Категорії</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.brands.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>Бренди</p>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('admin.attributes.index') }}" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-file-alt"></i>--}}
{{--                            <p>Атрибути товару</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a href="{{ route('admin.products.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Товари</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.orders.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check-circle"></i>
                            <p>Замовлення</p>
                        </a>
                    </li>


                </ul>
            </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
