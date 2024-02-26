@extends('layouts.guest.main')

@section('content')
<section class="py-5">
    <div class="px-2">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $tittle }}</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
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
                @foreach ($blogs as $blog)
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <img class="card-img-top" width="185px" src="{{ asset('storage/'. $blog->image) }}" alt="">
                            <div class="col-lg-8">
                                    <a class="text-decoration-none" href="/blog/{{ $blog->slug }}">
                                        <div class="text-primary fw-bolder mb-2">
                                            {{ $blog->tittle }}
                                        </div>
                                    </a>
                                    <div class="small fw-bolder">
                                        Post by. <a class="text-decoration-none" href="/blogs?user={{ $blog->user->username }}">{{ $blog->user->name }}</a> in <a class="text-decoration-none" href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a> on <div class="small text-muted">{{ $blog->created_at->format('d F, Y') }}</div>
                                    </div>
                                    <div class="small text-muted">
                                        {{ $blog->excerpt }}
                                    </div>
                                    <a href="/blog/{{ $blog->slug }}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
            </div>
        </div>
    </div>
</section>
@endsection