@extends('layouts.guest.main')

@section('content')
<section
id="landingContact"
class="section-py bg-body landing-contact"
>
    <div class="container">
        <div class="text-center mt-5 mb-3 pb-1">
            <span class="badge bg-label-primary">Blogs</span>
        </div>
        <h3 class="text-center mb-1">Let's read the post</h3>
        <p class="text-center mb-4 mb-lg-5 pb-md-3">
            {{ $tittle }}
        </p>
        <div class="row gy-4">
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- Examples -->
                    <form action="blogs">
                        <div class="d-grid align-items-center justify-content-center mb-5">

                            @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">                        
                            @endif
                            
                            @if(request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">                        
                            @endif
            
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type in here" name="search" value="{{ request('search') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                    @if ($blogs->count())
                    <div class="row mb-5">
                        @foreach ($blogs as $blog)
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card h-100">
                                <a href="/blog/{{ $blog->slug }}">
                                    <img
                                        class="card-img-top"
                                        src="{{ asset('storage/'. $blog->image) }}"
                                        alt="Card image cap"
                                    />
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/blog/{{ $blog->slug }}">
                                            {{ $blog->tittle }}
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Post by.
                                            <a class="text-decoration-none" href="/blogs?user={{ $blog->user->username }}"
                                                >{{ $blog->user->name }}</a
                                            >
                                            in
                                            <a
                                                class="text-decoration-none"
                                                href="/blogs?category={{ $blog->category->slug }}"
                                                >{{ $blog->category->name }}</a
                                            >
                                            on
                                            <div class="text-decoration-none">
                                                {{ $blog->created_at->format('d F, Y | H:i:s') }}
                                            </div>
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        {{ $blog->excerpt }}
                                    </p>
                                    <a href="/blog/{{ $blog->slug }}" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else

                    <p class="text-center fs-4">No post found</p>
                    @endif

                    <div class="d-flex justify-content-center">
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
                    <!-- Examples -->
                </div>
                <!-- / Content -->
            
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
</section>
@endsection