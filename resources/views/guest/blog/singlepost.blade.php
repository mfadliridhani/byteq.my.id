@extends('layouts.guest.main')

@section('content')
<section
id="landingContact"
class="section-py bg-body landing-contact"
>
    <div class="container">
        <div class="text-center mt-5 mb-3 pb-1">
            <span class="badge bg-label-primary">Contact US</span>
        </div>
        <h3 class="text-center mb-1">Let's work together</h3>
        <p class="text-center mb-4 mb-lg-5 pb-md-3">
            {{ $tittle }}
        </p>
        <div class="row gy-4">
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <!-- Examples -->
                    <div class="row mb-5">
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
                                        {!! $blog->body !!}
                                    </p>
                                    <a href="/blogs" class="btn btn-outline-primary">Back to post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Examples -->
                </div>
                <!-- / Content -->
            </div>
        </div>
    </div>
</section>
@endsection