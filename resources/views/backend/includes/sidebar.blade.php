@php
    use Illuminate\Support\Str;
    
    $currentUrl = request()->path(); // Get the current URL path
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend/asset/images//AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset("backend/asset/images//user2-160x160.jpg")}}" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.index') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li
                    class="nav-item {{ Str::startsWith($currentUrl, 'admin/home') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Home
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.home.index') }}"
                                class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Home</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li
                    class="nav-item {{ Str::startsWith($currentUrl, 'admin/about') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}"
                                class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Details</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ Str::startsWith($currentUrl, 'admin/service') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Service
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}"
                                class="nav-link {{ request()->is('admin/service') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Core Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.amenity.index') }}"
                                class="nav-link {{ request()->is('admin/amenity') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Amenities</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.focus.index') }}"
                                class="nav-link {{ request()->is('admin/focus') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Focus Data</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ Str::startsWith($currentUrl, 'admin/portfolio') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Portfolio
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.portfolio.index') }}"
                                class="nav-link {{ request()->is('admin/portfolio') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Portfolios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}"
                                class="nav-link {{ request()->is('admin/portfolio/category') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.achievement.index') }}"
                                class="nav-link {{ request()->is('admin/achievement') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Achievements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.feedback.index') }}"
                                class="nav-link {{ request()->is('admin/feedback') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Feedback</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ Str::startsWith($currentUrl, 'admin/contact') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.index') }}" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Mail</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ Str::startsWith($currentUrl, 'admin/setting') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.index') }}" class="nav-link {{ request()->is('admin/setting') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
