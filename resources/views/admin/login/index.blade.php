@extends('layouts.admin.login.main')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">

            @if(session()->has('status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            
            <!-- Logo -->
            @include('partials.admin.login.logo')
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to Sneat! 👋</h4>
            <p class="mb-4">Please sign-in to your account and start the adventure</p>


            {{-- <Form> --}}
                <form id="username" class="mb-3" action="/admin/login" method="POST">
                @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">Email or Username</label>
                      <input
                        type="text"
                        class="form-control @error('username') is-invalid @enderror"
                        id="username"
                        name="username"
                        placeholder="Enter your email or username"
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
                    <div class="mb-3 form-password-toggle">
                      <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        <a href="/admin/password">
                          <small>Forgot Password?</small>
                        </a>
                      </div>
                      <div class="input-group input-group-merge">
                        <input
                          type="password"
                          id="password"
                          class="form-control"
                          name="password"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password"
                          required
                        />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember-me" />
                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </div>
                  </form>
            {{-- </Form> --}}

            <p class="text-center">
              <span>New on our platform?</span>
              <a href="/admin/register">
                <span>Create an account</span>
              </a>
            </p>

          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
@endsection