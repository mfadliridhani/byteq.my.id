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
                        Contact details
                    </h4>
                    
                    <div class="card mb-4">
                        <form
                        method="POST"
                        action="/admin/dashboard/contacts/{{ $contact->id }}"
                        enctype="multipart/form-data"
                        >
                        @method('put')
                        @csrf
                        <h5 class="card-header">
                            Contact details
                        </h5>
                        <!-- Add new posts -->
                            <div class="card-body">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="name"
                                            class="form-label"
                                            >Name</label
                                        >
                                        <input
                                            class="form-control @error('name') is-invalid @enderror"
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{ old('name', $contact->name) }}"
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
                                            for="phone"
                                            class="form-label"
                                            >Phone</label
                                        >
                                        <input
                                            class="form-control @error('phone') is-invalid @enderror"
                                            type="text"
                                            id="phone"
                                            name="phone"
                                            value="{{ old('phone', $contact->phone) }}"
                                            autofocus
                                            required
                                        />
                                        @error('phone')
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
                                        >
                                        <input
                                            class="form-control @error('email') is-invalid @enderror"
                                            type="text"
                                            id="email"
                                            name="email"
                                            value="{{ old('email', $contact->email) }}"
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
                                            for="message"
                                            class="form-label"
                                            >Message</label
                                        >
                                        <textarea
                                            class="form-control @error('message') is-invalid @enderror"
                                            id="message"
                                            name="message"
                                            type="text"
                                            style="height: 10rem"
                                            autofocus
                                            required
                                        />{{ old('message', $contact->message) }}</textarea>

                                        @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button
                                        type="submit"
                                        class="btn btn-primary me-2"
                                    >
                                        Update contacts
                                    </button>
                                    <a href="/admin/dashboard/contacts">
                                        <button
                                            type="text"
                                            class="btn btn-outline-secondary"
                                        >
                                            Cancel
                                        </button>
                                    </a>
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

@section('script')
@endsection