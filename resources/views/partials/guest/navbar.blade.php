<!-- Navigation-->
<div class="content-wrapper">
    <div>
        <!-- Basic -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Byteq</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
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
