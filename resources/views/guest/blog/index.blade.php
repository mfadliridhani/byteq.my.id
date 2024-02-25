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
                <div class="d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $blogs->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection