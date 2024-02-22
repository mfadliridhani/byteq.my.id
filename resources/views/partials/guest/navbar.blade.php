<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">I'm Fadli</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('resumes') ? 'active' : '' }}" href="/resumes">Resume</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('blogs') ? 'active' : '' }}" href="/blogs">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('contacts') ? 'active' : '' }}" href="/contacts">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('admin/login') ? 'active' : '' }}" href="/admin/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
