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
                <li class="nav-header">STATIC CONTENT</li>
                <li class="nav-item {{ request()->routeIs('backoffice.static.home.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('backoffice.static.home.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.home.titleAndSubtitle') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.home.titleAndSubtitle') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Title and Subtitle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.home.visionAndManifesto') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.home.visionAndManifesto') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vision and Manifesto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.home.missions') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.home.missions') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Missions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.home.button1AndButton2') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.home.button1AndButton2') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Button 1 and Button 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->routeIs('backoffice.static.capabilities.*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('backoffice.static.capabilities.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Capabilities
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.capabilities.title') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.capabilities.title') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Title</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->routeIs('backoffice.static.opportunities.*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('backoffice.static.opportunities.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Opportunities
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.opportunities.titleAndSubtitle') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.opportunities.titleAndSubtitle') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Title and Subtitle</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.opportunities.benefits') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.opportunities.benefits') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Benefits</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backoffice.static.opportunities.reasons') }}"
                                class="nav-link {{ request()->routeIs('backoffice.static.opportunities.reasons') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reasons</p>
                            </a>
                        </li>
                    </ul>
                </li>


				<li class="nav-header">SECTIONS</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.section.footer.subtitle') }}"
						class="nav-link {{ request()->routeIs('backoffice.section.footer.subtitle') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Footer</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.section.have.project.idea') }}"
						class="nav-link {{ request()->routeIs('backoffice.section.have.project.idea') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Have Project Idea</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.section.insight.case.study') }}"
						class="nav-link {{ request()->routeIs('backoffice.section.insight.case.study') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Insights - Case Studies</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.section.join.the.team') }}"
						class="nav-link {{ request()->routeIs('backoffice.section.join.the.team') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Join The Team</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.section.subscribe') }}"
						class="nav-link {{ request()->routeIs('backoffice.section.subscribe') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Subscribe</p>
					</a>
				</li>

				<li class="nav-header">DYNAMIC</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.dynamic.capablities.index') }}"
						class="nav-link {{ request()->routeIs('backoffice.dynamic.capablities.index') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Capabilities</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('backoffice.dynamic.our.value.index') }}"
						class="nav-link {{ request()->routeIs('backoffice.dynamic.our.value.index') ? 'active' : '' }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Our Values</p>
					</a>
				</li>
            </ul>
        </nav>
    </div>
</aside>