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

                <div class="container-xxl flex-grow-1 container-p-y">
                    {{-- Tittle --}}
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">{{ $tittle }} /</span>
                        {{ $subtittle }}
                    </h4>
                    
                    <!-- Content -->
                    <div class="col-lg">
                        <div class="">
                            <form action="/admin/dashboard/blogs/{{ $blog->slug }}" method="post" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @method('delete')
                                @csrf
                                <a href="/admin/dashboard/blogs/" class="mr-2">
                                    <button type="button" class="btn btn-primary mb-3">Back To Post</button>
                                </a>
                                
                                <a href="/admin/dashboard/blogs/{{ $blog->slug }}/edit" class="mr-2">
                                    <button type="button" class="btn btn-warning mb-3">Edit</button>
                                </a>
                                <button type="submit" class="btn btn-danger mb-3">Delete</button>
                            </form>
                        </div>
                        
                        
                        <div class="card">
                            <div class="card-body">
                                <!-- Photo -->
                                    <h5 class="">
                                        {{ $subtittle }}
                                    </h5>
                                    <div
                                        class="d-flex align-items-start align-items-sm-center gap-4"
                                    >
                                        <img
                                            src="{{ asset('storage/' . $blog->image) }}"
                                            alt="user-avatar"
                                            class="d-block rounded"
                                            height="100"
                                            width="100"
                                            id="uploadedAvatar"
                                        />
                                        <div class="button-wrapper">
                                            <label
                                                for="upload"
                                                class="btn btn-primary me-2 mb-4"
                                                tabindex="0"
                                            >
                                                <span
                                                    class="d-none d-sm-block"
                                                    >Upload new
                                                    photo</span
                                                >
                                                <i
                                                    class="bx bx-upload d-block d-sm-none"
                                                ></i>
                                                <input
                                                    type="file"
                                                    id="upload"
                                                    class="account-file-input"
                                                    hidden
                                                    accept="image/png, image/jpeg"
                                                />
                                            </label>
                                            <button
                                                type="button"
                                                class="btn btn-outline-secondary account-image-reset mb-4"
                                            >
                                                <i
                                                    class="bx bx-reset d-block d-sm-none"
                                                ></i>
                                                <span
                                                    class="d-none d-sm-block"
                                                    >Reset</span
                                                >
                                            </button>

                                            <p class="text-muted mb-0">
                                                Allowed JPG, GIF or PNG.
                                                Max size of 800K
                                            </p>
                                        </div>
                                    </div>
                                <!-- /Photo -->
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                                <small class="text-light fw-semibold">
                                    Tittle: {{ $blog->tittle }} <br>Category: {{ $blog->category->name }} <br>Published at {{ $blog->published_at }}
                                    <br>
                                </small>
                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item">
                                        {!! $blog->body !!}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                </div>

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