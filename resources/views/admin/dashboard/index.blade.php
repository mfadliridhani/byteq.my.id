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
                    <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            {{-- Tittle --}}
                            <h4 class="fw-bold py-3 mb-4">
                                <span class="text-muted fw-light">{{ $tittle }} /</span>
                                Your dashboard
                            </h4>

                            <div class="row">
                                <div class="col-lg-12 mb-4 order-0">
                                    <div class="card">
                                        <div class="d-flex align-items-end row">
                                            <div class="col-sm-7">
                                                <div class="card-body">
                                                    <h5 class="card-title text-primary">
                                                        Hallo! {{ auth()->user()->name }} 🎉
                                                    </h5>
                                                    <p class="mb-4">
                                                        How about your day? Hope you have a great day!. You are not an administrator, so you cannot access all the features on this website.
                                                    </p>

                                                    <a
                                                        href="#"
                                                        href="javascript:;"
                                                        class="btn btn-sm btn-outline-primary"
                                                        >View the developer</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-5 text-center text-sm-left">
                                                <div class="card-body pb-0 px-0 px-md-4">
                                                    <img
                                                        src="{{ asset('../admin/assets/img/illustrations/man-with-laptop-light.png') }}"
                                                        height="140"
                                                        alt="View Badge User"
                                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                        data-app-light-img="illustrations/man-with-laptop-light.png"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- / Content -->

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