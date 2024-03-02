<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
<div class="container">
    <div
        class="navbar navbar-expand-lg landing-navbar px-3 px-md-4"
    >
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
                class="navbar-toggler border-0 px-0 me-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i
                    class="tf-icons bx bx-menu bx-sm align-middle"
                ></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="/" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bing" viewBox="0 0 16 16">
                        <path d="M8.35 5.046a.615.615 0 0 0-.54.575c-.009.13-.006.14.289.899.67 1.727.833 2.142.86 2.2q.101.215.277.395c.089.092.148.141.247.208.176.117.262.15.944.351.664.197 1.026.327 1.338.482.405.201.688.43.866.7.128.195.242.544.291.896.02.137.02.44 0 .564-.041.27-.124.495-.252.684-.067.1-.044.084.055-.039.278-.346.562-.938.707-1.475a4.42 4.42 0 0 0-2.14-5.028 70 70 0 0 0-.888-.465l-.53-.277-.353-.184c-.16-.082-.266-.138-.345-.18-.368-.192-.523-.27-.568-.283a1 1 0 0 0-.194-.03z"/>
                        <path d="M9.152 11.493a3 3 0 0 0-.135.083 320 320 0 0 0-1.513.934l-.8.496c-.012.01-.587.367-.876.543a1.9 1.9 0 0 1-.732.257c-.12.017-.349.017-.47 0a1.9 1.9 0 0 1-.884-.358 2.5 2.5 0 0 1-.365-.364 1.9 1.9 0 0 1-.34-.76 1 1 0 0 0-.027-.121c-.005-.006.004.092.022.22.018.132.057.324.098.489a4.1 4.1 0 0 0 2.487 2.796c.359.142.72.23 1.114.275.147.016.566.023.72.011a4.1 4.1 0 0 0 1.956-.661l.235-.149.394-.248.258-.163 1.164-.736c.51-.32.663-.433.9-.665.099-.097.248-.262.255-.283.002-.005.028-.046.059-.091a1.64 1.64 0 0 0 .25-.682c.02-.124.02-.427 0-.565a3 3 0 0 0-.213-.758c-.15-.314-.47-.6-.928-.83a2 2 0 0 0-.273-.12c-.006 0-.433.26-.948.58l-1.113.687z"/>
                        <path d="m3.004 12.184.03.129c.089.402.245.693.515.963a1.82 1.82 0 0 0 1.312.543c.361 0 .673-.09.994-.287l.472-.29.373-.23V5.334c0-1.537-.003-2.45-.008-2.521a1.82 1.82 0 0 0-.535-1.177c-.097-.096-.18-.16-.427-.33L4.183.24c-.239-.163-.258-.175-.33-.2a.63.63 0 0 0-.842.464c-.009.042-.01.603-.01 3.646l.003 8.035Z"/>
                      </svg>
                </span>
                <span
                    class="app-brand-text demo menu-text fw-bold ms-2 ps-1"
                    >byteq</span
                >
            </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div
            class="collapse navbar-collapse landing-nav-menu"
            id="navbarSupportedContent"
        >
            <button
                class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="tf-icons bx bx-x bx-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('/') ? 'active' : '' }}"
                        aria-current="page"
                        href="/"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('testimonials') ? 'active' : '' }}"
                        href="/testimonials"
                        >Testimonials</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('projects') ? 'active' : '' }}"
                        href="/projects"
                        >Projects</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('teams') ? 'active' : '' }}"
                        href="/teams"
                        >Teams</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('blogs') ? 'active' : '' }}"
                        href="/blogs"
                        >Blogs</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('contacts') ? 'active' : '' }}"
                        href="/contacts"
                        >Contacts</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link fw-medium {{ Request::is('faq') ? 'active' : '' }}"
                        href="/faq"
                        >FAQ</a
                    >
                </li>
            </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <!-- Menu wrapper: End -->
        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li
                class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0"
            >
                <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                >
                    <i class="bx bx-sm bx-sun"></i>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end dropdown-styles"
                >
                    <li>
                        <a
                            class="dropdown-item"
                            href="javascript:void(0);"
                            data-theme="light"
                        >
                            <span class="align-middle"
                                ><i class="bx bx-sun me-2"></i
                                >Light</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            class="dropdown-item"
                            href="javascript:void(0);"
                            data-theme="dark"
                        >
                            <span class="align-middle"
                                ><i class="bx bx-moon me-2"></i
                                >Dark</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            class="dropdown-item"
                            href="javascript:void(0);"
                            data-theme="system"
                        >
                            <span class="align-middle"
                                ><i class="bx bx-desktop me-2"></i
                                >System</span
                            >
                        </a>
                    </li>
                </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
                <a
                    href="/admin/login"
                    class="btn btn-primary"
                    ><span
                        class="tf-icons bx bx-user me-md-1"
                    ></span
                    ><span class="d-none d-md-block"
                        >Login/Register</span
                    ></a
                >
            </li>
            <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
    </div>
</div>
</nav>
<!-- Navbar: End -->