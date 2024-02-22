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
                                Edit home
                            </h4>

                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-4">
                                        <div
                                            class="card-header d-flex justify-content-between align-items-center"
                                        >
                                            <h5 class="mb-0">Basic with Icons</h5>
                                            <small class="text-muted float-end">Merged input group</small>
                                        </div>

                                        @if(session()->has('status'))
                                        <div class="alert alert-success alert-dismissible mx-4" role="alert">
                                            {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        
                                        <form
                                        method="POST"
                                        action="/admin/dashboard/homes/{{ $home->id }}"
                                        enctype="multipart/form-data"
                                        />
                                        @method('PUT')
                                        @csrf
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-fullname"
                                                    >I can help ...</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-fullname2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-chat-left"></i>
                                                    </span>
                                                    <input
                                                        class="form-control @error('description_i_can_help') is-invalid @enderror"
                                                        type="text"
                                                        id="description_i_can_help"
                                                        name="description_i_can_help"
                                                        value="{{ old('description_i_can_help', $home->description_i_can_help) }}"
                                                        autofocus
                                                        required
                                                    />
                                                    @error('description_i_can_help')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >Get online ...</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-chat-left-quote"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="description_get_online_and"
                                                        value="{{ old('description_get_online_and', $home->description_get_online_and) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >Resume</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-award"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="resume"
                                                        value="{{ old('resume', $home->resume) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >Projects</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-git"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="projects"
                                                        value="{{ old('projects', $home->projects) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >Name</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-person-circle"></i></span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="name"
                                                        value="{{ old('name', $home->name) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-message"
                                                    >Description</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-message2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-chat-left-text"></i>
                                                    </span>
                                                    <textarea
                                                        id="basic-icon-default-message"
                                                        class="form-control"
                                                        placeholder="Hi, Do you have a moment to talk Joe?"
                                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                                        aria-describedby="basic-icon-default-message2"
                                                        name="description_about_me"
                                                    >{{ old('description_about_me', $home->description_about_me) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >Instagram</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-instagram"></i></span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="twitter"
                                                        value="{{ old('twitter', $home->twitter) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >LinkedIn</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-linkedin"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="linkedin"
                                                        value="{{ old('linkedin', $home->linkedin) }}"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-icon-default-company"
                                                    >GitHub</label
                                                >
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        id="basic-icon-default-company2"
                                                        class="input-group-text"
                                                        ><i class="bi bi-github"></i></span>
                                                    <input
                                                        type="text"
                                                        id="basic-icon-default-company"
                                                        class="form-control"
                                                        placeholder="ACME Inc."
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                        name="github"
                                                        value="{{ old('github', $home->github) }}"
                                                    />
                                                </div>
                                            </div>
                                            <a
                                            href="/admin/dashboard/homes/{{ $home->id }}/edit">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </a>
                                            <a href="/admin/dashboard">
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