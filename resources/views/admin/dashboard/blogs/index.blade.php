@extends('layouts.admin.dashboard.main')

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        @include('partials.admin.dashboard.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            {{-- Navbar --}}
            @include('partials.admin.dashboard.navbar')
            {{-- / Navbar --}}
            
            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    {{-- Tittle --}}
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">{{ $tittle }} /</span>
                        {{ $subtittle }}
                    </h4>

                    <div>
                        <a href="/admin/dashboard/blogs/create">
                            <button type="button" class="btn btn-primary mb-3">Add New Post</button>
                        </a>
                    </div>
                    
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">{{ $subtittle }}</h5>

                        @if(session()->has('status'))
                        <div class="alert alert-success alert-dismissible mx-4" role="alert">
                            {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tittle</th>
                                        <th>Category</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($blogs as $blog)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            {{ $blog->tittle }}
                                        </td>

                                        <td>
                                            {{ $blog->category->name }}
                                        </td>

                                        <td>
                                            {{ $blog->slug }}
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"
                                                    ></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a
                                                    class="dropdown-item"
                                                    href="/admin/dashboard/blogs/{{ $blog->slug }}"
                                                    >
                                                    <i class="bi bi-file-earmark-text"></i>
                                                    Show Detail</a
                                                    >
                                                    <a
                                                    class="dropdown-item"
                                                    href="/admin/dashboard/blogs/{{ $blog->slug }}/edit"
                                                    >
                                                    <i class="bi bi-pencil-square"></i>
                                                    Edit</a
                                                    >
                                                    <form action="/admin/dashboard/blogs/{{ $blog->slug }}" method="post" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-trash3"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <!-- Basic Pagination -->
                                        <div class="d-flex justify-content-first">
                                            <ul class="pagination">
                                                <li class="page-item prev">
                                                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}"
                                                        @if (!$blogs->onFirstPage()) 
                                                            aria-label="Previous"
                                                        @endif
                                                    ><i class="tf-icon bx bx-chevrons-left"></i></a>
                                                </li>
                                            
                                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach
                                                <li class="page-item next">
                                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}"
                                                        @if ($blogs->hasMorePages()) 
                                                            aria-label="Next"
                                                        @endif
                                                    ><i class="tf-icon bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/ Basic Pagination -->
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->

                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('partials.admin.dashboard.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection