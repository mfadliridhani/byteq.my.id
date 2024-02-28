@extends('layouts.guest.main')

@section('content')
    <section class="py-5">
        <div class="px-2">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $tittle }}</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <img class="card-img-top" width="185px" src="{{ asset('storage/'. $blog->image) }}" alt="">
                                <div class="col-lg-8">
                                        <div class="text-primary fw-bolder mb-2">
                                            {{ $blog->tittle }}
                                        </div>
                                        <div class="small fw-bolder">
                                            Post by. <a href="/blogs?user={{ $blog->user->username }}">{{ $blog->user->name }}</a> in <a href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a> on <div class="small text-muted mb-2">{{ $blog->created_at->format('d F, Y | H:i:s') }}</div>
                                        </div>
                                        <div class="small text-muted mb-2">
                                            {!! $blog->body !!}
                                        </div>
                                        <a class="small" style="color: #6A6CFF" href="/blogs"><i class="bi bi-box-arrow-in-left"></i> Back to all post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection