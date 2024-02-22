<aside
            id="layout-menu"
            class="layout-menu menu-vertical menu bg-menu-theme"
        >
            {{-- Strat Logo --}}
            @include('partials.admin.dashboard.logo')
            {{-- End Logo --}}

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">

                <!-- Start ashboard -->
                <li class="menu-item">
                    <a href="/admin/dashboard" class="menu-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <i class="menu-icon tf-icons bi bi-box-seam"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>
                <!-- End Dashboard -->


                {{-- Start Sidebar --}}
                @include('partials.admin.dashboard.sidebar')
                {{-- End Sidebar --}}
            </ul>
        </aside>