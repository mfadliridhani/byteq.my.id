@extends('layouts.guest.main')

@section('content')
<!-- Our great team: Start -->
<section id="landingTeam" class="section-py bg-body landing-team">
    <div class="container">
        <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary"
                >{{ $tittle }}</span
            >
        </div>
        <h3 class="text-center mb-1">{{ $subtittle }}</h3>
        <p class="text-center mb-md-5 pb-3">
            Who is behind these great-looking interfaces?
        </p>
        <div class="row gy-5 mt-2">
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div
                        class="bg-label-primary position-relative team-image-box"
                    >
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/landing-page/team-member-1.png') }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image"
                        />
                    </div>
                    <div
                        class="card-body border border-top-0 border-label-primary text-center"
                    >
                        <h5 class="card-title mb-0">
                            Sophie Gilbert
                        </h5>
                        <p class="text-muted mb-0">
                            Project Manager
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div
                        class="bg-label-info position-relative team-image-box"
                    >
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/landing-page/team-member-2.png') }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image"
                        />
                    </div>
                    <div
                        class="card-body border border-top-0 border-label-info text-center"
                    >
                        <h5 class="card-title mb-0">Paul Miles</h5>
                        <p class="text-muted mb-0">UI Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div
                        class="bg-label-danger position-relative team-image-box"
                    >
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/landing-page/team-member-3.png') }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image"
                        />
                    </div>
                    <div
                        class="card-body border border-top-0 border-label-danger text-center"
                    >
                        <h5 class="card-title mb-0">Nannie Ford</h5>
                        <p class="text-muted mb-0">
                            Development Lead
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card mt-3 mt-lg-0 shadow-none">
                    <div
                        class="bg-label-success position-relative team-image-box"
                    >
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/landing-page/team-member-4.png') }}"
                            class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                            alt="human image"
                        />
                    </div>
                    <div
                        class="card-body border border-top-0 border-label-success text-center"
                    >
                        <h5 class="card-title mb-0">
                            Chris Watkins
                        </h5>
                        <p class="text-muted mb-0">
                            Marketing Manager
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our great team: End -->
@endsection