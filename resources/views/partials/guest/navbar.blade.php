<div class="content-wrapper">
    <div>
        <!-- Basic -->
        <nav class="navbar navbar-expand-lg navbar-light mb-5">
            <div class="container-fluid">
                
                <a class="navbar-brand" style="color: #6A6CFF" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bing" viewBox="0 0 16 16">
                        <path d="M8.35 5.046a.615.615 0 0 0-.54.575c-.009.13-.006.14.289.899.67 1.727.833 2.142.86 2.2q.101.215.277.395c.089.092.148.141.247.208.176.117.262.15.944.351.664.197 1.026.327 1.338.482.405.201.688.43.866.7.128.195.242.544.291.896.02.137.02.44 0 .564-.041.27-.124.495-.252.684-.067.1-.044.084.055-.039.278-.346.562-.938.707-1.475a4.42 4.42 0 0 0-2.14-5.028 70 70 0 0 0-.888-.465l-.53-.277-.353-.184c-.16-.082-.266-.138-.345-.18-.368-.192-.523-.27-.568-.283a1 1 0 0 0-.194-.03z"/>
                        <path d="M9.152 11.493a3 3 0 0 0-.135.083 320 320 0 0 0-1.513.934l-.8.496c-.012.01-.587.367-.876.543a1.9 1.9 0 0 1-.732.257c-.12.017-.349.017-.47 0a1.9 1.9 0 0 1-.884-.358 2.5 2.5 0 0 1-.365-.364 1.9 1.9 0 0 1-.34-.76 1 1 0 0 0-.027-.121c-.005-.006.004.092.022.22.018.132.057.324.098.489a4.1 4.1 0 0 0 2.487 2.796c.359.142.72.23 1.114.275.147.016.566.023.72.011a4.1 4.1 0 0 0 1.956-.661l.235-.149.394-.248.258-.163 1.164-.736c.51-.32.663-.433.9-.665.099-.097.248-.262.255-.283.002-.005.028-.046.059-.091a1.64 1.64 0 0 0 .25-.682c.02-.124.02-.427 0-.565a3 3 0 0 0-.213-.758c-.15-.314-.47-.6-.928-.83a2 2 0 0 0-.273-.12c-.006 0-.433.26-.948.58l-1.113.687z"/>
                        <path d="m3.004 12.184.03.129c.089.402.245.693.515.963a1.82 1.82 0 0 0 1.312.543c.361 0 .673-.09.994-.287l.472-.29.373-.23V5.334c0-1.537-.003-2.45-.008-2.521a1.82 1.82 0 0 0-.535-1.177c-.097-.096-.18-.16-.427-.33L4.183.24c-.239-.163-.258-.175-.33-.2a.63.63 0 0 0-.842.464c-.009.042-.01.603-.01 3.646l.003 8.035Z"/>
                      </svg>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="bi bi-list" style="color: #6A6CFF; font-size: 24px;"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                aria-current="page"
                                href="/"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('resumes') ? 'active' : '' }}"
                                aria-current="page"
                                href="/resumes"
                                >Resume</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('projects') ? 'active' : '' }}"
                                aria-current="page"
                                href="/projects"
                                >Projects</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('blogs') ? 'active' : '' }}"
                                aria-current="page"
                                href="/blogs"
                                >Blogs</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('contacts') ? 'active' : '' }}"
                                aria-current="page"
                                href="/contacts"
                                >Contacts</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('admin/login') ? 'active' : '' }}"
                                aria-current="page"
                                href="/admin/login"
                                >Login</a
                            >
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Resume</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="javascript:void(0)"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Blogs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0)"
                                        ></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0)"
                                        >Another action</a
                                    >
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0)"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link disabled"
                                href="javascript:void(0)"
                                tabindex="-1"
                                >Disabled</a
                            >
                        </li> --}}
                    </ul>
                    <form class="d-flex" onsubmit="return false">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <button class="btn btn-outline-primary" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!--/ Basic -->
    </div>
</div>
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">Byteq</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-1 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('resumes') ? 'active' : '' }}" href="/resumes">Resume</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('blogs') ? 'active' : '' }}" href="/blogs">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('contacts') ? 'active' : '' }}" href="/contacts">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('admin/login') ? 'active' : '' }}" href="/admin/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav> --}}
