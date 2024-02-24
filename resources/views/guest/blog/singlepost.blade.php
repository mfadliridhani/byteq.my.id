@extends('layouts.guest.main')

@section('content')
    <section class="py-5">
        <div class="px-2">
            <!-- Blogs Section-->
            {{-- Posts section --}}
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $tittle }}</span></h1>
            </div>

            {{-- Post --}}
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">

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
                                        <div class="text-primary fw-bolder mb-2">
                                            {{ $blog->tittle }}
                                        </div>
                    
                                        {{-- Post author --}}
                                        <div class="small fw-bolder">
                                            Post by. <a href="/blogs?user={{ $blog->user->username }}">{{ $blog->user->name }}</a> in <a href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a> on <div class="small text-muted">{{ $blog->created_at->format('d F, Y') }}</div>
                                        </div> 
                    
                                        {{-- Post content --}}
                                        <div class="small text-muted">
                                            {!! $blog->body !!}
                                        </div>

                                        {{-- Back to all post --}}
                                        <a href="/blogs">Back to all post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection