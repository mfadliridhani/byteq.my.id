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
                    {{-- Tittle --}}
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">{{ $tittle }} /</span>
                        {{ $subtittle }}
                    </h4>

                    <div>
                        <a href="/admin/dashboard/accounts/create">
                            <button type="button" class="btn btn-primary mb-3">Add New Account</button>
                        </a>
                    </div>
                    
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">{{ $subtittle }}</h5>

                        @if(session()->has('status'))
                        <div class="alert alert-success alert-dismissible mx-4" role="alert">
                            {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($accounts as $account)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            {{ $account->name }}
                                        </td>

                                        <td>
                                            {{ $account->username }}
                                        </td>

                                        <td>
                                            {{ $account->email }}
                                        </td>

                                        <td>
                                            {{ $account->is_admin ? 'Administrator' : 'Guest' }}
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"
                                                    ></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a
                                                    class="dropdown-item"
                                                    href="/admin/dashboard/accounts/{{ $account->id }}/edit"
                                                    >
                                                    <i class="bi bi-pencil-square"></i>
                                                    Edit</a
                                                    >
                                                    <form action="/admin/dashboard/accounts/{{ $account->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-trash3"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="demo-inline-spacing">
                                            <!-- Basic Pagination -->
                                            {{-- <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    {{ $accounts->links() }}
                                                </ul>
                                            </nav> --}}
                                            <!--/ Basic Pagination -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->

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