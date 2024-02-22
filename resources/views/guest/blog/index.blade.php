@extends('layouts.guest.main')

@section('content')
<!-- Blogs Section-->
<section class="py-5">
    <div class="container px-5 mb-5">

        {{-- Posts section --}}
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $tittle }}</span></h1>
        </div>

        
        {{-- All posts --}}
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Find a post</h2>
                    <!-- Download resume button-->
                    <!-- Note: Set the link href target to a PDF file within your project-->
                    <form action="blogs">

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
                    </form>
                </div>

                @if ($blogs->count())
                {{-- Foreach loop to display all posts --}}
                @foreach ($blogs as $blog)
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">

                            {{-- Post image --}}
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <img width="185px" src="{{ asset('storage/'. $blog->image) }}" alt="">
                                </div>
                            </div>

                            {{-- All post content --}}
                            <div class="col-lg-8">
                                    
                                    {{-- Post tittle --}}
                                    <a class="text-decoration-none" href="/blog/{{ $blog->slug }}">
                                        <div class="text-primary fw-bolder mb-2">
                                            {{ $blog->tittle }}
                                        </div>
                                    </a>

                                    {{-- Post author --}}
                                    <div class="small fw-bolder">
                                        Post by. <a class="text-decoration-none" href="/blogs?user={{ $blog->user->username }}">{{ $blog->user->name }}</a> in <a class="text-decoration-none" href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a> on <div class="small text-muted">{{ $blog->created_at->format('d F, Y') }}</div>
                                    </div>

                                    {{-- Post content --}}
                                    <div class="small text-muted">
                                        {{ $blog->excerpt }}
                                    </div>

                                    {{-- Read more --}}
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