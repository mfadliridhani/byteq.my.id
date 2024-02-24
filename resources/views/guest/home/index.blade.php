@extends('layouts.guest.main')

@section('content')
    @foreach ($homes as $home)
        {{-- I can help section --}}
        <section class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">

                    <!-- Profile content -->
                    <div class="col-xxl-5">
                        <div class="text-center text-xxl-start">

                            {{-- I can help your business to --}}
                            <div class="fs-3 fw-light text-muted">{{ $home->description_i_can_help }}</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">{{ $home->description_get_online_and }}</span></h1>

                            {{-- Button resume and projects --}}
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ $home->resume }}">Resume</a>
                                <a class="btn btn-outline-primary btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ $home->projects }}">Projects</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Profile picture -->
                    <div class="col-xxl-7">
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile bg-gradient-primary-to-secondary">
                                <!-- use a photo with a transparent background -->
                                {{-- <img class="profile-img" src="" alt="..." /> --}}
                                {{-- @include('partials.guest.svg') --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About section -->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">

                            <h2 class="display-5 fw-bolder">
                                <span class="text-gradient d-inline">About Me</span>
                            </h2>

                            <p class="lead fw-light mb-4">Hallo! my name is <b>{{ $home->name }}</b></p>

                            <p class="text-muted">
                                {!! $home->description_about_me !!}
                                {{-- {{ $home->description_about_me }} --}}
                            </p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="{{ $home->twitter }}"><i class="bi bi-instagram"></i></a>
                                <a class="text-gradient" href="{{ $home->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="{{ $home->github }}"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection