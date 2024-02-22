@extends('layouts.admin.login.main')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
        <!-- Forgot Password -->
        <div class="card">
          <div class="card-body">

            <!-- Logo -->
            @include('partials.admin.login.logo')
            <!-- /Logo -->

            <h4 class="mb-2">Forgot Password? 🔒</h4>
            <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
            
            {{-- <Form> --}}
                {{-- <form id="formAuthentication" class="mb-3" action="#" method="POST">
                  </form> --}}
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Enter your email"
                      autofocus
                    />
                  </div>
                  <a href="/admin/login">
                    <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                  </a>
            {{-- </Form> --}}

            <div class="text-center mt-3">
              <a href="/admin/login" class="d-flex align-items-center justify-content-center">
                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                Back to login
              </a>
            </div>
          </div>
        </div>
        <!-- /Forgot Password -->
      </div>
    </div>
  </div>
@endsection