<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @auth
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->login_id }}</a>
            </div>
        @endauth
        @guest
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Guest</a>
            </div>
        @endguest
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @guest
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ Request::is('login') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-sign-in-alt"></i>
                        <p>
                            Login
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link {{ Request::is('register') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Register
                        </p>
                    </a>
                </li>
            @endguest

            @auth
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('itemmall') }}" class="nav-link {{ Request::is('itemmall') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Itemmall
                        </p>
                    </a>
                </li>
            @endauth
            <li class="nav-item">
                <a href="{{ route('donate') }}" class="nav-link {{ Request::is('donate') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-donate"></i>
                    <p>
                        Donate
                    </p>
                </a>
            </li>
            @include('partials.download.index')
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
