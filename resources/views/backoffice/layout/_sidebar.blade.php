<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Felicity Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8; width: 35px; height: auto;">
        <span class="brand-text font-weight-light">Felicity</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->routeIs('backoffice.home.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('backoffice.home.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backoffice.home.titleAndSubtitle') }}"
                                class="nav-link {{ request()->routeIs('backoffice.home.titleAndSubtitle') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Title and Subtitle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.home.visionAndManifesto') }}"
                                class="nav-link {{ request()->routeIs('backoffice.home.visionAndManifesto') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vision and Manifesto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.home.missions') }}"
                                class="nav-link {{ request()->routeIs('backoffice.home.missions') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Missions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.home.button1AndButton2') }}"
                                class="nav-link {{ request()->routeIs('backoffice.home.button1AndButton2') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Button 1 and Button 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>