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
                                {{ $subtittle }}
                            </h4>

                            <div class="row">

                                <div class="col-xl">
                                    <div class="card mb-4">
                                        <div
                                            class="card-header d-flex justify-content-between align-items-center"
                                        >
                                            <h5 class="mb-0">Home details</h5>
                                            <small class="text-muted float-end">Merged input group</small>
                                        </div>

                                        @if(session()->has('status'))
                                        <div class="alert alert-success alert-dismissible mx-4" role="alert">
                                            {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        
                                        <div class="card-body">
                                            @foreach ($homes as $home)
                                                <div class="mb-3">
                                                    <label class="form-label" for="description_i_can_help"
                                                        >I can help ...</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="description_i_can_help2"
                                                            class="input-group-text"
                                                            ><i class="bi bi-chat-left"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="description_i_can_help"
                                                            name="description_i_can_help"
                                                            value="{{ old('description_i_can_help', $home->description_i_can_help) }}"
                                                            readonly
                                                    />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="description_get_online_and"
                                                        >Get online ...</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="description_get_online_and"
                                                            class="input-group-text"
                                                            ><i class="bi bi-chat-left-quote"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="description_get_online_and"
                                                            class="form-control"
                                                            name="description_get_online_and"
                                                            value="{{ old('description_get_online_and', $home->description_get_online_and) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="resume"
                                                        >Resume</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="resume"
                                                            class="input-group-text"
                                                            ><i class="bi bi-award"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="resume"
                                                            class="form-control"
                                                            name="resume"
                                                            value="{{ old('resume', $home->resume) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="projects"
                                                        >Projects</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="projects"
                                                            class="input-group-text"
                                                            ><i class="bi bi-git"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="projects"
                                                            class="form-control"
                                                            name="description_get_online_and"
                                                            value="{{ old('description_get_online_and', $home->projects) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="name"
                                                        >Name</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="name"
                                                            class="input-group-text"
                                                            ><i class="bi bi-person-circle"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="name"
                                                            class="form-control"
                                                            name="name"
                                                            value="{{ old('name', $home->name) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="description_about_me"
                                                        >Description</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="description_about_me"
                                                            class="input-group-text"
                                                            ><i class="bi bi-chat-left-text"></i>
                                                        </span>
                                                        <textarea
                                                            id="description_about_me"
                                                            class="form-control"
                                                            readonly
                                                            name="description_about_me"
                                                        >{{ old('description_about_me', $home->description_about_me) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="twitter"
                                                        >Instagram</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="twitter"
                                                            class="input-group-text"
                                                            ><i class="bi bi-instagram"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="twitter"
                                                            class="form-control"
                                                            name="twitterx"
                                                            value="{{ old('twitter', $home->twitter) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="linkedin"
                                                        >LinkedIn</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="linkedin"
                                                            class="input-group-text"
                                                            ><i class="bi bi-linkedin"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="linkedin"
                                                            class="form-control"
                                                            name="linkedin"
                                                            value="{{ old('linkedin', $home->linkedin) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="github"
                                                        >GitHub</label
                                                    >
                                                    <div class="input-group input-group-merge">
                                                        <span
                                                            id="github"
                                                            class="input-group-text"
                                                            ><i class="bi bi-github"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="github"
                                                            class="form-control"
                                                            name="github"
                                                            value="{{ old('github', $home->github) }}"
                                                            readonly
                                                        />
                                                    </div>
                                                </div>
                                                <a
                                                href="/admin/dashboard/homes/{{ $home->id }}/edit">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </a>
                                                @endforeach
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