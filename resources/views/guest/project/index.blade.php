@extends('layouts.guest.main')

@section('content')
<!-- Pricing plans: Start -->
<section
id="landingPricing"
class="section-py bg-body landing-pricing"
>
<div class="container">
    <div class="text-center mt-5 mb-3 pb-1">
        <span class="badge bg-label-primary"
            >Pricing Plans</span
        >
    </div>
    <h3 class="text-center mb-1">
        Tailored pricing plans designed for you
    </h3>
    <p class="text-center mb-4 pb-3">
        All plans include 40+ advanced tools and features to
        boost your product.<br />Choose the best plan to fit
        your needs.
    </p>
    <div class="text-center mb-5">
        <div
            class="position-relative d-inline-block pt-3 pt-md-0"
        >
            <label class="switch switch-primary me-0">
                <span class="switch-label">Pay Monthly</span>
                <input
                    type="checkbox"
                    class="switch-input price-duration-toggler"
                    checked
                />
                <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                </span>
                <span class="switch-label">Pay Annual</span>
            </label>
            <div
                class="pricing-plans-item position-absolute d-flex"
            >
                <img
                    src="{{ asset('../admin/assets/img/front-pages/icons/pricing-plans-arrow.png') }}"
                    alt="pricing plans arrow"
                    class="scaleX-n1-rtl"
                />
                <span class="fw-medium mt-2 ms-1">
                    Save 25%</span
                >
            </div>
        </div>
    </div>
    <div class="row gy-4 pt-lg-3">
        <!-- Basic Plan: Start -->
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/paper-airplane.png') }}"
                            alt="paper airplane icon"
                            class="mb-4 pb-2 scaleX-n1-rtl"
                        />
                        <h4 class="mb-1">Basic</h4>
                        <div
                            class="d-flex align-items-center justify-content-center"
                        >
                            <span
                                class="price-monthly h1 text-primary fw-bold mb-0"
                                >$19</span
                            >
                            <span
                                class="price-yearly h1 text-primary fw-bold mb-0 d-none"
                                >$14</span
                            >
                            <sub class="h6 text-muted mb-0 ms-1"
                                >/mo</sub
                            >
                        </div>
                        <div class="position-relative pt-2">
                            <div
                                class="price-yearly text-muted price-yearly-toggle d-none"
                            >
                                $ 168 / year
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Timeline
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Basic search
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Live chat widget
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Email marketing
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Custom Forms
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Traffic analytics
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Basic Support
                            </h5>
                        </li>
                    </ul>
                    <div class="d-grid mt-4 pt-3">
                        <a
                            href="payment-page.html"
                            class="btn btn-label-primary"
                            >Get Started</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Plan: End -->

        <!-- Favourite Plan: Start -->
        <div class="col-xl-4 col-lg-6">
            <div class="card border border-primary shadow-lg">
                <div class="card-header">
                    <div class="text-center">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/plane.png') }}"
                            alt="plane icon"
                            class="mb-4 pb-2 scaleX-n1-rtl"
                        />
                        <h4 class="mb-1">Team</h4>
                        <div
                            class="d-flex align-items-center justify-content-center"
                        >
                            <span
                                class="price-monthly h1 text-primary fw-bold mb-0"
                                >$29</span
                            >
                            <span
                                class="price-yearly h1 text-primary fw-bold mb-0 d-none"
                                >$22</span
                            >
                            <sub class="h6 text-muted mb-0 ms-1"
                                >/mo</sub
                            >
                        </div>
                        <div class="position-relative pt-2">
                            <div
                                class="price-yearly text-muted price-yearly-toggle d-none"
                            >
                                $ 264 / year
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Everything in basic
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Timeline with database
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Advanced search
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Marketing automation
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Advanced chatbot
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Campaign management
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Collaboration tools
                            </h5>
                        </li>
                    </ul>
                    <div class="d-grid mt-4 pt-3">
                        <a
                            href="payment-page.html"
                            class="btn btn-primary"
                            >Get Started</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Favourite Plan: End -->

        <!-- Standard Plan: Start -->
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <img
                            src="{{ asset('../admin/assets/img/front-pages/icons/shuttle-rocket.png') }}"
                            alt="shuttle rocket icon"
                            class="mb-4 pb-2 scaleX-n1-rtl"
                        />
                        <h4 class="mb-1">Enterprise</h4>
                        <div
                            class="d-flex align-items-center justify-content-center"
                        >
                            <span
                                class="price-monthly h1 text-primary fw-bold mb-0"
                                >$49</span
                            >
                            <span
                                class="price-yearly h1 text-primary fw-bold mb-0 d-none"
                                >$37</span
                            >
                            <sub class="h6 text-muted mb-0 ms-1"
                                >/mo</sub
                            >
                        </div>
                        <div class="position-relative pt-2">
                            <div
                                class="price-yearly text-muted price-yearly-toggle d-none"
                            >
                                $ 444 / year
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Everything in premium
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Timeline with database
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Fuzzy search
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                A/B testing sanbox
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Custom permissions
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Social media automation
                            </h5>
                        </li>
                        <li>
                            <h5>
                                <span
                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                                    ><i
                                        class="bx bx-check bx-xs"
                                    ></i
                                ></span>
                                Sales automation tools
                            </h5>
                        </li>
                    </ul>
                    <div class="d-grid mt-4 pt-3">
                        <a
                            href="payment-page.html"
                            class="btn btn-label-primary"
                            >Get Started</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Standard Plan: End -->
    </div>
</div>
</section>
<!-- Pricing plans: End -->

<!-- CTA: Start -->
<section
id="landingCTA"
class="section-py landing-cta position-relative mt-5 p-lg-0 pb-0"
>
<img
    src="{{ asset('../admin/assets/img/front-pages/backgrounds/cta-bg-light.png') }}"
    class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1"
    alt="cta image"
    data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
    data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png"
/>
<div class="container">
    <div class="row align-items-center gy-5 gy-lg-0">
        <div class="col-lg-6 text-center text-lg-start">
            <h6 class="h2 text-primary fw-bold mb-1">
                Ready to Get Started?
            </h6>
            <p class="fw-medium mb-4">
                Start your project with a 14-day free trial
            </p>
            <a href="payment-page.html" class="btn btn-primary"
                >Get Started</a
            >
        </div>
        <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
            <img
                src="{{ asset('../admin/assets/img/front-pages/landing-page/cta-dashboard.png') }}"
                alt="cta dashboard"
                class="img-fluid"
            />
        </div>
    </div>
</div>
</section>
<!-- CTA: End -->

<!-- Fun facts: Start -->
<section id="landingFunFacts" class="section-py landing-fun-facts">
<div class="container">
    <div class="row gy-3">
        <div class="col-sm-6 col-lg-3">
            <div
                class="card border border-label-primary shadow-none"
            >
                <div class="card-body text-center">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/icons/laptop.png') }}"
                        alt="laptop"
                        class="mb-2"
                    />
                    <h5 class="h2 mb-1">7.1k+</h5>
                    <p class="fw-medium mb-0">
                        Support Tickets<br />
                        Resolved
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div
                class="card border border-label-success shadow-none"
            >
                <div class="card-body text-center">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/icons/user-success.png') }}"
                        alt="laptop"
                        class="mb-2"
                    />
                    <h5 class="h2 mb-1">50k+</h5>
                    <p class="fw-medium mb-0">
                        Join creatives<br />
                        community
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div
                class="card border border-label-info shadow-none"
            >
                <div class="card-body text-center">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/icons/diamond-info.png') }}"
                        alt="laptop"
                        class="mb-2"
                    />
                    <h5 class="h2 mb-1">4.8/5</h5>
                    <p class="fw-medium mb-0">
                        Highly Rated<br />
                        Products
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div
                class="card border border-label-warning shadow-none"
            >
                <div class="card-body text-center">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/icons/check-warning.png') }}"
                        alt="laptop"
                        class="mb-2"
                    />
                    <h5 class="h2 mb-1">100%</h5>
                    <p class="fw-medium mb-0">
                        Money Back<br />
                        Guarantee
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Fun facts: End -->
@endsection