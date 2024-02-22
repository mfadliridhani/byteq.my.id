@extends('layouts.admin.login.main')

@section('content')
<div class="container-xxl">
    <div
        class="authentication-wrapper authentication-basic container-p-y"
    >
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    @include('partials.admin.login.logo')
                    <!-- /Logo -->
                    <h4 class="mb-2">Adventure starts here 🚀</h4>
                    <p class="mb-4">
                        Make your app portfolio easy and fun!
                    </p>

                    {{-- <Form> --}}
                    <form
                    id="formAuthentication"
                    class="mb-3"
                    action="/admin/register"
                    method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"
                                >Name</label
                            >
                            
                            <input
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            autofocus
                            required
                            value="{{ old('name') }}"
                            />

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label"
                            >Username</label
                            >
                            <input
                            type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            id="username"
                            name="username"
                            placeholder="Enter your username"
                            autofocus
                            required
                            value="{{ old('username') }}"
                            />

                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"
                            >Email</label
                            >
                            <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                            value="{{ old('email') }}"
                            />

                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password"
                            >Password</label
                            >
                            <div class="input-group input-group-merge">
                                <input
                                type="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                                required
                                >

                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <span
                                    class="input-group-text cursor-pointer"
                                    ><i class="bx bx-hide"></i
                                ></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="terms-conditions"
                                    name="terms"
                                />
                                <label
                                    class="form-check-label"
                                    for="terms-conditions"
                                >
                                    I agree to
                                    <a href="javascript:void(0);"
                                        >privacy policy & terms</a
                                    >
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">
                            Sign up
                        </button>
                    </form>
                    {{-- </Form> --}}

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="/admin/login">
                            <span>Sign in instead</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>
@endsection