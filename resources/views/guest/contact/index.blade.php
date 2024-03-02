@extends('layouts.guest.main') @section('content')
<!-- Contact form-->
<!-- Contact Us: Start -->
<section
id="landingContact"
class="section-py bg-body landing-contact"
>
<div class="container">
    <div class="text-center mb-3 pb-1">
        <span class="badge bg-label-primary">Contact US</span>
    </div>
    <h3 class="text-center mb-1">Let's work together</h3>
    <p class="text-center mb-4 mb-lg-5 pb-md-3">
        Any question or remark? just write us a message
    </p>
    <div class="row gy-4">
        <div class="col-lg-5">
            <div
                class="contact-img-box position-relative border p-2 h-100"
            >
                <img
                    src="{{ asset('../admin/assets/img/front-pages/icons/contact-border.png') }}"
                    alt="contact border"
                    class="contact-border-img position-absolute d-none d-md-block scaleX-n1-rtl"
                />
                <img
                    src="{{ asset('../admin/assets/img/front-pages/landing-page/contact-customer-service.png') }}"
                    alt="contact customer service"
                    class="contact-img w-100 scaleX-n1-rtl"
                />
                <div class="pt-3 px-4 pb-1">
                    <div class="row gy-3 gx-md-4">
                        <div
                            class="col-md-6 col-lg-12 col-xl-6"
                        >
                            <div
                                class="d-flex align-items-center"
                            >
                                <div
                                    class="badge bg-label-primary rounded p-2 me-2"
                                >
                                    <i
                                        class="bx bx-envelope bx-sm"
                                    ></i>
                                </div>
                                <div>
                                    <p class="mb-0">Email</p>
                                    <h5 class="mb-0">
                                        <a
                                            href="mailto:fadli.dev@byteq.my.id"
                                            class="text-heading"
                                            >fadli.dev@byteq.my.id</a
                                        >
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-12 col-xl-6"
                        >
                            <div
                                class="d-flex align-items-center"
                            >
                                <div
                                    class="badge bg-label-success rounded p-2 me-2"
                                >
                                    <i
                                        class="bx bx-phone-call bx-sm"
                                    ></i>
                                </div>
                                <div>
                                    <p class="mb-0">Phone</p>
                                    <h5 class="mb-0">
                                        <a
                                            href="tel:+62 878 1515 5215"
                                            class="text-heading"
                                            >+62 878 1515 5215</a
                                        >
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-1">Send a message</h4>
                    @if(session()->has('status'))
                    <div class="alert alert-success alert-dismissible mx-auto" role="alert">
                        {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <p class="mb-4">
                        If you would like to discuss anything
                        related to payment, account,
                        licensing,<br
                            class="d-none d-lg-block"
                        />
                        partnerships, or have pre-sales
                        questions, you’re at the right place.
                    </p>
                    <form
                    method="POST"
                    action="/contacts"
                    />
                    @method('post')
                    @csrf   
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label
                                    class="form-label"
                                    for="contact-form-fullname"
                                    >Full Name</label
                                >
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Fadli Dev"
                                    aria-label="Fadli Dev"
                                    aria-describedby="name2"
                                    required
                                />
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label
                                    class="form-label"
                                    for="contact-form-email"
                                    >Email</label
                                >
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="fadli.dev@byteq.my.id"
                                    aria-label="fadli.dev@byteq.my.id"
                                    aria-describedby="email2"
                                    required
                                    
                                />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label
                                    class="form-label"
                                    for="contact-form-email"
                                    >Phone</label
                                >
                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    class="form-control phone-mask @error('phone') is-invalid @enderror"
                                    placeholder="+62 878 1515 5215"
                                    aria-label="+62 878 1515 5215"
                                    aria-describedby="phone2"
                                    required
                                />
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label
                                    class="form-label"
                                    for="contact-form-message"
                                    >Message</label
                                >
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Hi, Do you have time to talk with me?"
                                    aria-label="Hi, Do you have time to talk with me?"
                                    aria-describedby="message2"
                                    required
                                >{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Send inquiry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Contact Us: End -->
@endsection
