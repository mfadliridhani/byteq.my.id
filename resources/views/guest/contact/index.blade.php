@extends('layouts.guest.main') @section('content')
<!-- Contact form-->
<div class="bg-light rounded-4 py-5 px-4 px-md-5">
    @if(session()->has('status'))
    <div class="alert alert-success alert-dismissible mx-1" role="alert">
        {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="text-center mb-5">
        <h1 class="fw-bolder">Get in touch</h1>
        <p class="lead fw-normal text-muted mb-0">
            Let's work together!
        </p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-sm-11 col-md-11 col-lg-8 col-xl-6">

            <form
            method="POST"
            action="/contacts"
            />
            @method('post')
            @csrf
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="name"
                                >Full Name</label
                            >
                            <div
                                class="input-group input-group-merge"
                            >
                                <span
                                    id="name"
                                    class="input-group-text"
                                    ><i
                                        class="bx bx-user"
                                    ></i
                                ></span>
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="John Doe"
                                    aria-label="John Doe"
                                    aria-describedby="name2"
                                />
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="email"
                                >Email</label
                            >
                            <div
                                class="input-group input-group-merge"
                            >
                                <span
                                    class="input-group-text"
                                    ><i
                                        class="bx bx-envelope"
                                    ></i
                                ></span>
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="john.doe"
                                    aria-label="john.doe"
                                    aria-describedby="email2"
                                />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <span
                                    id="email2"
                                    class="input-group-text"
                                    >@example.com</span
                                >
                            </div>
                            <div class="form-text">
                                You can use letters,
                                numbers & periods
                            </div>
                        </div>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="phone"
                                >Phone</label
                            >
                            <div
                                class="input-group input-group-merge"
                            >
                                <span
                                    id="phone2"
                                    class="input-group-text"
                                    ><i
                                        class="bx bx-phone"
                                    ></i
                                ></span>
                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    class="form-control phone-mask @error('phone') is-invalid @enderror"
                                    placeholder="658 799 8941"
                                    aria-label="658 799 8941"
                                    aria-describedby="phone2"
                                />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="message"
                                >Message</label
                            >
                            <div
                                class="input-group input-group-merge"
                            >
                                <span
                                    id="message2"
                                    class="input-group-text"
                                    ><i
                                        class="bx bx-comment"
                                    ></i
                                ></span>
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Hi, Do you have a moment to talk Joe?"
                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="message2"
                                >{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button
                            type="submit"
                            class="btn btn-primary"
                            >
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
