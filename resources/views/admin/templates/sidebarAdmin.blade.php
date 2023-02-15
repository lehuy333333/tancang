<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('timesheet/Calendar') }}" class="brand-link">

        <img src="{{ url('dist/img/logo.png') }}" alt="AdminLTE Logo" class="img-thumbnail" style="opacity: .8">
        {{-- <span class="brand-text font-weight-light">DỊCH VỤ KỸ THUẬT TÂN CẢNG</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        @auth
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    @if (isset(Auth::user()->picture_path))
                        <img src="{{ url('/dist/img\/') . Auth::user()->picture_path }}" class="img-circle elevation-2"
                            alt="User Image">
                    @else
                        <img class="img-circle elevation-2" src="{{ url('/dist/img/avatar.jpg') }}"
                            alt="User profile picture">
                    @endif

                </div>
                <div class="info">
                    <a href="{{ url('/users/profile?id=' . Auth::user()->id) }}" class="d-block">Hello,
                        {{ Auth::user()->name }}</a>
                </div>
            </div>
        @endauth

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('services') }}" class="nav-link {{ Route::is('users') ? 'active' : '' }} {{ Route::is('roles') ? 'active' : '' }} {{ Route::is('permissions') ? 'active' : '' }}">
                        <i class="fas fa-users  nav-icon"></i>
                        <p>
                            User Managerment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link {{ Route::is('users') ? 'active' : '' }}">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles') }}" class="nav-link {{ Route::is('roles') ? 'active' : '' }}">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('permissions') }}" class="nav-link {{ Route::is('permissions') ? 'active' : '' }}">
                                <i class="fas fa-key nav-icon"></i>
                                <p>Permissions</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('projects') }}" class="nav-link {{ Route::is('projects') ? 'active' : '' }}">
                        <i class="fas fa-tasks nav-icon " ></i>
                        <p>
                            Projects
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('services') }}" class="nav-link {{ Route::is('services') ? 'active' : '' }}">
                        <i class="fas fa-gifts nav-icon"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('blogs') }}" class="nav-link {{ Route::is('blogs') ? 'active' : '' }} {{ Route::is('blog_types') ? 'active' : '' }}">
                        <i class="fas fa-folder-open nav-icon"></i>
                        <p>
                            News Managerment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blog_types') }}" class="nav-link {{ Route::is('blog_types') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>
                                    Blog Types
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs') }}" class="nav-link {{ Route::is('blogs') ? 'active' : '' }}">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>
                                    Blogs
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="{{ route('settings') }}" class="nav-link {{ Route::is('settings') ? 'active' : '' }}">
                        <i class="fas fa-tools nav-icon"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
