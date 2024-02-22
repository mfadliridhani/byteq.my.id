
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

                <div class="container-xxl flex-grow-1 container-p-y">
                    {{-- Tittle --}}
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">{{ $tittle }} /</span>
                        Post details
                    </h4>
                    
                    <!-- Content -->
                    <div class="col-lg">
                        <div class="">
                            <form action="/admin/dashboard/contacts/{{ $contact->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @method('delete')
                                @csrf
                                <a href="/admin/dashboard/contacts/" class="mr-2">
                                    <button type="button" class="btn btn-primary mb-3">Back to post</button>
                                </a>
                                
                                <a href="/admin/dashboard/contacts/{{ $contact->id }}/edit" class="mr-2">
                                    <button type="button" class="btn btn-warning mb-3">Edit</button>
                                </a>
                                <button type="submit" class="btn btn-danger mb-3">Delete</button>
                            </form>
                        </div>
                        
                        
                        <div class="card">
                            <div class="card-body">
                                <small class="text-light fw-semibold">
                                    Name: {{ $contact->name }} <br> Phone: {{ $contact->phone }} <br>Published at {{ $contact->created_at }}
                                    <br>
                                </small>
                                <ul class="list-inline mt-2">
                                    <li class="list-inline-item">
                                        {!! $contact->message !!}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                </div>

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