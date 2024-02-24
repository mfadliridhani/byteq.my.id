@extends('layouts.admin.dashboard.main')

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        @include('partials.admin.dashboard.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            {{-- Navbar --}}
            @include('partials.admin.dashboard.navbar')
            {{-- / Navbar --}}
            
            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light"
                            >{{ $tittle }} /</span
                        >
                        {{ $subtittle }}
                    </h4>
                    
                    <div class="card mb-4">
                            <form
                                method="POST"
                                action="/admin/dashboard/accounts/{{ $account->id }}"
                                enctype="multipart/form-data"
                            >
                            @method('put')
                            @csrf
                            <h5 class="card-header">
                                {{ $subtittle }}
                            </h5>
                            <!-- Add new posts -->
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-start align-items-sm-center gap-4"
                                >
                                    <img
                                        src="{{ asset('../admin/assets/img/avatars/1.png') }}"
                                        alt="user-avatar"
                                        class="d-block rounded"
                                        height="100"
                                        width="100"
                                        id="img-preview"
                                    />
                                    <div class="button-wrapper">
                                        <label
                                            for="image"
                                            class="btn btn-primary me-2 mb-4"
                                            tabindex="0"
                                        >
                                            <span
                                                class="d-none d-sm-block"
                                                >Upload new
                                                photo</span
                                            >
                                            <i
                                                class="bx bx-upload d-block d-sm-none"
                                            ></i>
                                            <input
                                                type="file"
                                                id="image"
                                                class="account-file-input @error('image') is-invalid @enderror"
                                                hidden
                                                accept="image/png, image/jpeg"
                                                name="image"
                                                onchange="previewImage()"
                                            />
                                            @error('image')
                                            <div class="invalid-feedback" style="color:aliceblue">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </label>
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary account-image-reset mb-4"
                                        >
                                            <i
                                                class="bx bx-reset d-block d-sm-none"
                                            ></i>
                                            <span
                                                class="d-none d-sm-block"
                                                >Reset</span
                                            >
                                        </button>    
                                        <p class="text-muted mb-0">
                                            Allowed JPG, GIF or PNG.
                                            Max size of 800K
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="name"
                                            class="form-label"
                                            >Name</label
                                        />
                                        <input
                                            class="form-control @error('name') is-invalid @enderror"
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{ old('name', $account->name) }}"
                                            autofocus
                                            required
                                        />
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="username"
                                            class="form-label"
                                            >Username</label
                                        />
                                        <input
                                            class="form-control @error('username') is-invalid @enderror"
                                            type="text"
                                            id="username"
                                            name="username"
                                            value="{{ old('username', $account->username) }}"
                                            autofocus
                                            required
                                        />
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="email"
                                            class="form-label"
                                            >Email</label
                                        />
                                        <input
                                            class="form-control @error('email') is-invalid @enderror"
                                            type="text"
                                            id="email"
                                            name="email"
                                            value="{{ old('email', $account->email) }}"
                                            autofocus
                                            required
                                        />
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label
                                        class="form-label"
                                        for="is_admin">
                                        Status</label
                                        >
                                        <select
                                        id="is_admin"
                                        class="select2 form-select"
                                        name="is_admin"
                                        required
                                        >
                                        <option value="1" {{ old('is_admin', $account->is_admin) == 1 ? 'selected' : '' }}>Administrator</option>
                                        <option value="0" {{ old('is_admin', $account->is_admin) == 0 ? 'selected' : '' }}>Guest</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6 form-password-toggle">
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
                                    
                                    <div class="mb-3 col-md-6 form-password-toggle">
                                        <label class="form-label" for="password"
                                        >Repeat Password</label
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
                                </div>
                                <div class="mt-2">
                                    <button
                                        type="submit"
                                        class="btn btn-primary me-2"
                                    >
                                        Update Account
                                    </button>
                                    <button
                                        type="reset"
                                        class="btn btn-outline-secondary"
                                    >
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /Add new posts -->
                    </div>
                </div>

                
                <!-- / Content -->

                <!-- Footer -->
                @include('partials.admin.dashboard.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection