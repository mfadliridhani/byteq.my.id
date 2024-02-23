@extends('layouts.guest.main') @section('content')
<section class="py-5">
    <div class="container px-5 mb-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible mx-1" role="alert">
                {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="text-center mb-5">
                <div
                    class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"
                >
                    <i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">
                    Let's work together!
                </p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <form
                    method="POST"
                    action="/contacts"
                    />
                    @method('post')
                    @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                type="text"
                                placeholder="Enter your name..."
                                data-sb-validations="required"
                            />
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <label for="name">Full name</label>
                            <div
                                class="invalid-feedback"
                                data-sb-feedback="name:required"
                            >
                                A name is required.
                            </div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                type="email"
                                placeholder="name@example.com"
                                data-sb-validations="required,email"
                            />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <label for="email">Email address</label>
                            <div
                                class="invalid-feedback"
                                data-sb-feedback="email:required"
                            >
                                An email is required.
                            </div>
                            <div
                                class="invalid-feedback"
                                data-sb-feedback="email:email"
                            >
                                Email is not valid.
                            </div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input
                                class="form-control @error('phone') is-invalid @enderror"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                type="tel"
                                placeholder="(123) 456-7890"
                                data-sb-validations="required"
                            />
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <label for="phone">Phone number</label>
                            <div
                                class="invalid-feedback"
                                data-sb-feedback="phone:required"
                            >
                                A phone number is required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea
                                class="form-control @error('message') is-invalid @enderror"
                                id="message"
                                name="message"
                                type="text"
                                placeholder="Enter your message here..."
                                style="height: 10rem"
                                data-sb-validations="required"
                            />{{ old('message') }}</textarea>
                            @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <label for="message">Message</label>
                            <div
                                class="invalid-feedback"
                                data-sb-feedback="message:required"
                            >
                                A message is required.
                            </div>
                        </div>
                        
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg"
                            >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
