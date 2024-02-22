{{-- Start Sidebar --}}
@can('admin')
<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Home</span>
</li>
<li class="menu-item">
    <ul class="menu-inner py-1">

        <li class="menu-item">
            <a href="/admin/dashboard/homes" class="menu-link {{ Request::is('admin/dashboard/homes*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-crop"></i>
                <div data-i18n="Analytics">Your home</div>
            </a>
        </li>
    </ul>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Resume</span>
</li>
<li class="menu-item">
    <ul class="menu-inner py-1">

        <li class="menu-item">
            <a href="/admin/dashboard/blogs" class="menu-link {{ Request::is('admin/dashboard/blogs*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-activity"></i>
                <div data-i18n="Analytics">Experience</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="/admin/dashboard/categories" class="menu-link {{ Request::is('admin/dashboard/categories*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-mortarboard"></i>
                <div data-i18n="Analytics">Education</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="/admin/dashboard/categories" class="menu-link {{ Request::is('admin/dashboard/categories*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-code-slash"></i>
                <div data-i18n="Analytics">Professional skills</div>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="/admin/dashboard/categories" class="menu-link {{ Request::is('admin/dashboard/categories*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-braces"></i>
                <div data-i18n="Analytics">Languages</div>
            </a>
        </li>
    </ul>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Projects</span>
</li>
<li class="menu-item">
    <ul class="menu-inner py-1">
        
        <li class="menu-item">
            <a href="/admin/dashboard/blogs" class="menu-link {{ Request::is('admin/dashboard/blogs*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-tags"></i>
                <div data-i18n="Analytics">Project name</div>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="/admin/dashboard/categories" class="menu-link {{ Request::is('admin/dashboard/categories*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-send-plus"></i>
                <div data-i18n="Analytics">Let's build</div>
            </a>
        </li>
    </ul>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Blogs</span>
</li>
<li class="menu-item">
    <ul class="menu-inner py-1">
        
        <li class="menu-item">
            <a href="/admin/dashboard/blogs" class="menu-link {{ Request::is('admin/dashboard/blogs*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-blockquote-left"></i>
                <div data-i18n="Analytics">Post</div>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="/admin/dashboard/categories" class="menu-link {{ Request::is('admin/dashboard/categories*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-check2-all"></i>
                <div data-i18n="Analytics">Category</div>
            </a>
        </li>
    </ul>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Contact</span>
</li>
<li class="menu-item">
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="/admin/dashboard/contacts" class="menu-link {{ Request::is('admin/dashboard/contacs*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-telephone-inbound"></i>
                <div data-i18n="Analytics">Get in touch</div>
            </a>
        </li>
    </ul>
</li>

<li class="menu-header small text-uppercase">
    <span class="menu-header-text">Acount</span>
</li>
<li class="menu-item">
    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="/admin/dashboard/categories" class="menu-link {{ Request::is('admin/dashboard/categories*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bi bi-person-plus"></i>
                <div data-i18n="Analytics">My acount</div>
            </a>
        </li>
    </ul>
</li>
@endcan
{{-- End Sidebar --}}