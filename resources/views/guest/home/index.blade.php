@extends('layouts.guest.main')

@section('content')
@foreach($homes as $home)
<div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="hero-animation">
        <div
            id="landingHero"
            class="section-py landing-hero position-relative"
        >
            <img
                src="{{ asset('../admin/assets/img/front-pages/backgrounds/hero-bg.png') }}"
                alt="hero background"
                class="position-absolute top-0 start-50 translate-middle-x object-fit-contain w-100 h-100"
                data-speed="1"
            />
            <div class="container">
                <div class="hero-text-box text-center">
                    <h1
                        class="text-primary hero-title display-4 fw-bold"
                    >
                        {{ $home->description_i_can_help }}
                    </h1>
                    <h2 class="hero-sub-title h6 mb-4 pb-1">
                        {{ $home->description_get_online_and }}
                    </h2>
                    <div
                        class="landing-hero-btn d-inline-block position-relative"
                    >
                        <span
                            class="hero-btn-item position-absolute d-none d-md-flex text-heading"
                            >Join community
                            <img
                                src="{{ asset('../admin/assets/img/front-pages/icons/Join-community-arrow.png') }}"
                                alt="Join community arrow"
                                class="scaleX-n1-rtl"
                        /></span>
                        <a
                            href="/contacts"
                            class="btn btn-primary"
                            >Contact us</a
                        >
                    </div>
                </div>
                <div
                    id="heroDashboardAnimation"
                    class="hero-animation-img"
                >
                    <a
                        href="../vertical-menu-template/app-ecommerce-dashboard.html"
                        target="_blank"
                    >
                        <div
                            id="heroAnimationImg"
                            class="position-relative hero-dashboard-img"
                        >
                            <img
                                src="{{ asset('../admin/assets/img/front-pages/landing-page/hero-dashboard-light.png') }}"
                                alt="hero dashboard"
                                class="animation-img"
                                data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png"
                            />
                            <img
                                src="{{ asset('../admin/assets/img/front-pages/landing-page/hero-elements-light.png') }}"
                                alt="hero elements"
                                class="position-absolute hero-elements-img animation-img top-0 start-0"
                                data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-elements-dark.png"
                            />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="landing-hero-blank"></div>
    </section>
    <!-- Hero: End -->

    <!-- Useful features: Start -->
    <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary"
                    >Useful Features</span
                >
            </div>
            <h3 class="text-center mb-1">
                Everything you need to start your next project
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                Not just a set of tools, the package includes
                ready-to-deploy conceptual application.
            </p>
            <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                <div
                    class="col-lg-4 col-sm-6 text-center features-icon-box"
                >
                    <div class="text-center mb-3">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/laptop.png') }}"
                            alt="laptop charging"
                        />
                    </div>
                    <h5 class="mb-3">Quality Code</h5>
                    <p class="features-icon-description">
                        Code structure that all developers will easily
                        understand and fall in love with.
                    </p>
                </div>
                <div
                    class="col-lg-4 col-sm-6 text-center features-icon-box"
                >
                    <div class="text-center mb-3">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/rocket.png') }}"
                            alt="transition up"
                        />
                    </div>
                    <h5 class="mb-3">Continuous Updates</h5>
                    <p class="features-icon-description">
                        Free updates for the next 12 months, including
                        new demos and features.
                    </p>
                </div>
                <div
                    class="col-lg-4 col-sm-6 text-center features-icon-box"
                >
                    <div class="text-center mb-3">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/paper.png') }}"
                            alt="edit"
                        />
                    </div>
                    <h5 class="mb-3">Stater-Kit</h5>
                    <p class="features-icon-description">
                        Start your project quickly without having to
                        remove unnecessary features.
                    </p>
                </div>
                <div
                    class="col-lg-4 col-sm-6 text-center features-icon-box"
                >
                    <div class="text-center mb-3">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/check.png') }}"
                            alt="3d select solid"
                        />
                    </div>
                    <h5 class="mb-3">API Ready</h5>
                    <p class="features-icon-description">
                        Just change the endpoint and see your own data
                        loaded within seconds.
                    </p>
                </div>
                <div
                    class="col-lg-4 col-sm-6 text-center features-icon-box"
                >
                    <div class="text-center mb-3">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/user.png') }}"
                            alt="lifebelt"
                        />
                    </div>
                    <h5 class="mb-3">Excellent Support</h5>
                    <p class="features-icon-description">
                        An easy-to-follow doc with lots of references
                        and code examples.
                    </p>
                </div>
                <div
                    class="col-lg-4 col-sm-6 text-center features-icon-box"
                >
                    <div class="text-center mb-3">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/keyboard.png') }}"
                            alt="google docs"
                        />
                    </div>
                    <h5 class="mb-3">Well Documented</h5>
                    <p class="features-icon-description">
                        An easy-to-follow doc with lots of references
                        and code examples.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Useful features: End -->
</div>
@endforeach
@endsection