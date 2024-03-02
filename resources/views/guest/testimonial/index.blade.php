@extends('layouts.guest.main')

@section('content')
<!-- Real customers reviews: Start -->
<section
id="landingReviews"
class="section-py bg-body landing-reviews pb-0"
>
<!-- What people say slider: Start -->
<div class="container">
    <div class="row align-items-center gx-0 gy-4 g-lg-5">
        <div class="col-md-6 col-lg-5 col-xl-3">
            <div class="mb-3 pb-1">
                <span class="badge bg-label-primary"
                    >Real Customers Reviews</span
                >
            </div>
            <h3 class="mb-1">What people say</h3>
            <p class="mb-3 mb-md-5">
                See what our customers have to<br
                    class="d-none d-xl-block"
                />
                say about their experience.
            </p>
            <div
                class="landing-reviews-btns d-flex align-items-center gap-3"
            >
                <button
                    id="reviews-previous-btn"
                    class="btn btn-label-primary reviews-btn"
                    type="button"
                >
                    <i class="bx bx-chevron-left bx-sm"></i>
                </button>
                <button
                    id="reviews-next-btn"
                    class="btn btn-label-primary reviews-btn"
                    type="button"
                >
                    <i class="bx bx-chevron-right bx-sm"></i>
                </button>
            </div>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-9">
            <div
                class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3"
            >
                <div class="swiper" id="swiper-reviews">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between h-100"
                                >
                                    <div class="mb-3">
                                        <img
                                            src="{{ asset('../admin/assets/img/front-pages/branding/logo-1.png') }}"
                                            alt="client logo"
                                            class="client-logo img-fluid"
                                        />
                                    </div>
                                    <p>
                                        “Vuexy is hands down the
                                        most useful front end
                                        Bootstrap theme I've
                                        ever used. I can't wait
                                        to use it again for my
                                        next project.”
                                    </p>
                                    <div
                                        class="text-warning mb-3"
                                    >
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                    </div>
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <div
                                            class="avatar me-2 avatar-sm"
                                        >
                                            <img
                                                src="{{ asset('../admin/assets/img/avatars/1.png') }}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                            />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                Cecilia Payne
                                            </h6>
                                            <p
                                                class="small text-muted mb-0"
                                            >
                                                CEO of Airbnb
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between h-100"
                                >
                                    <div class="mb-3">
                                        <img
                                            src="{{ asset('../admin/assets/img/front-pages/branding/logo-2.png') }}"
                                            alt="client logo"
                                            class="client-logo img-fluid"
                                        />
                                    </div>
                                    <p>
                                        “I've never used a theme
                                        as versatile and
                                        flexible as Vuexy. It's
                                        my go to for building
                                        dashboard sites on
                                        almost any project.”
                                    </p>
                                    <div
                                        class="text-warning mb-3"
                                    >
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                    </div>
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <div
                                            class="avatar me-2 avatar-sm"
                                        >
                                            <img
                                                src="{{ asset('../admin/assets/img/avatars/2.png') }}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                            />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                Eugenia Moore
                                            </h6>
                                            <p
                                                class="small text-muted mb-0"
                                            >
                                                Founder of
                                                Hubspot
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between h-100"
                                >
                                    <div class="mb-3">
                                        <img
                                            src="{{ asset('../admin/assets/img/front-pages/branding/logo-3.png') }}"
                                            alt="client logo"
                                            class="client-logo img-fluid"
                                        />
                                    </div>
                                    <p>
                                        This template is really
                                        clean & well documented.
                                        The docs are really easy
                                        to understand and it's
                                        always easy to find a
                                        screenshot from their
                                        website.
                                    </p>
                                    <div
                                        class="text-warning mb-3"
                                    >
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                    </div>
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <div
                                            class="avatar me-2 avatar-sm"
                                        >
                                            <img
                                                src="{{ asset('../admin/assets/img/avatars/3.png') }}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                            />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                Curtis Fletcher
                                            </h6>
                                            <p
                                                class="small text-muted mb-0"
                                            >
                                                Design Lead at
                                                Dribbble
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between h-100"
                                >
                                    <div class="mb-3">
                                        <img
                                            src="{{ asset('../admin/assets/img/front-pages/branding/logo-4.png') }}"
                                            alt="client logo"
                                            class="client-logo img-fluid"
                                        />
                                    </div>
                                    <p>
                                        All the requirements for
                                        developers have been
                                        taken into
                                        consideration, so I’m
                                        able to build any
                                        interface I want.
                                    </p>
                                    <div
                                        class="text-warning mb-3"
                                    >
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bx-star bx-sm"
                                        ></i>
                                    </div>
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <div
                                            class="avatar me-2 avatar-sm"
                                        >
                                            <img
                                                src="{{ asset('../admin/assets/img/avatars/4.png') }}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                            />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                Sara Smith
                                            </h6>
                                            <p
                                                class="small text-muted mb-0"
                                            >
                                                Founder of
                                                Continental
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between h-100"
                                >
                                    <div class="mb-3">
                                        <img
                                            src="{{ asset('../admin/assets/img/front-pages/branding/logo-5.png') }}"
                                            alt="client logo"
                                            class="client-logo img-fluid"
                                        />
                                    </div>
                                    <p>
                                        “I've never used a theme
                                        as versatile and
                                        flexible as Vuexy. It's
                                        my go to for building
                                        dashboard sites on
                                        almost any project.”
                                    </p>
                                    <div
                                        class="text-warning mb-3"
                                    >
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                    </div>
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <div
                                            class="avatar me-2 avatar-sm"
                                        >
                                            <img
                                                src="{{ asset('../admin/assets/img/avatars/5.png') }}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                            />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                Eugenia Moore
                                            </h6>
                                            <p
                                                class="small text-muted mb-0"
                                            >
                                                Founder of
                                                Hubspot
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div
                                    class="card-body text-body d-flex flex-column justify-content-between h-100"
                                >
                                    <div class="mb-3">
                                        <img
                                            src="{{ asset('../admin/assets/img/front-pages/branding/logo-6.png') }}"
                                            alt="client logo"
                                            class="client-logo img-fluid"
                                        />
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit
                                        amet consectetur
                                        adipisicing elit. Veniam
                                        nemo mollitia, ad eum
                                        officia numquam nostrum
                                        repellendus
                                        consequuntur!
                                    </p>
                                    <div
                                        class="text-warning mb-3"
                                    >
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bxs-star bx-sm"
                                        ></i>
                                        <i
                                            class="bx bx-star bx-sm"
                                        ></i>
                                    </div>
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <div
                                            class="avatar me-2 avatar-sm"
                                        >
                                            <img
                                                src="{{ asset('../admin/assets/img/avatars/1.png') }}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                            />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">
                                                Sara Smith
                                            </h6>
                                            <p
                                                class="small text-muted mb-0"
                                            >
                                                Founder of
                                                Continental
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What people say slider: End -->
<hr class="m-0" />
<!-- Logo slider: Start -->
<div class="container">
    <div class="swiper-logo-carousel py-4 my-lg-2">
        <div class="swiper" id="swiper-clients-logos">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/branding/logo_1-light.png') }}"
                        alt="client logo"
                        class="client-logo"
                        data-app-light-img="front-pages/branding/logo_1-light.png"
                        data-app-dark-img="front-pages/branding/logo_1-dark.png"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/branding/logo_2-light.png') }}"
                        alt="client logo"
                        class="client-logo"
                        data-app-light-img="front-pages/branding/logo_2-light.png"
                        data-app-dark-img="front-pages/branding/logo_2-dark.png"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/branding/logo_3-light.png') }}"
                        alt="client logo"
                        class="client-logo"
                        data-app-light-img="front-pages/branding/logo_3-light.png"
                        data-app-dark-img="front-pages/branding/logo_3-dark.png"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/branding/logo_4-light.png') }}"
                        alt="client logo"
                        class="client-logo"
                        data-app-light-img="front-pages/branding/logo_4-light.png"
                        data-app-dark-img="front-pages/branding/logo_4-dark.png"
                    />
                </div>
                <div class="swiper-slide">
                    <img
                        src="{{ asset('../admin/assets/img/front-pages/branding/logo_5-light.png') }}"
                        alt="client logo"
                        class="client-logo"
                        data-app-light-img="front-pages/branding/logo_5-light.png"
                        data-app-dark-img="front-pages/branding/logo_5-dark.png"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Logo slider: End -->
</section>
<!-- Real customers reviews: End -->
@endsection
