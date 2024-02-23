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
                        Add new posts
                    </h4>
                    
                    <div class="card mb-4">
                            <form
                                method="POST"
                                action="/admin/dashboard/blogs"
                                enctype="multipart/form-data"
                            >
                            @method('post')
                            @csrf
                            <h5 class="card-header">
                                Post image
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
                                            for="tittle"
                                            class="form-label"
                                            >Tittle</label
                                        />
                                        <input
                                            class="form-control @error('tittle') is-invalid @enderror"
                                            type="text"
                                            id="tittle"
                                            name="tittle"
                                            value="{{ old('tittle') }}"
                                            autofocus
                                            required
                                        />
                                        @error('tittle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="slug"
                                            class="form-label"
                                            >Slug</label
                                        >
                                        <input
                                            class="form-control @error('slug') is-invalid @enderror"
                                            type="text"
                                            id="slug"
                                            name="slug"
                                            value="{{ old('slug') }}"
                                            readonly
                                            required
                                        />
                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                        class="form-label"
                                        for="category">
                                        Category</label
                                        >
                                        <select
                                        id="category"
                                        class="select2 form-select"
                                        name="category_id"
                                        required>
                                            @foreach ($categories as $category)
                                                @if(old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label
                                            for="body"
                                            class="form-label"
                                            >Body</label
                                        >
                                        @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}"/>
                                        <trix-editor input="body"></trix-editor>                                    
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button
                                        type="submit"
                                        class="btn btn-primary me-2"
                                    >
                                        Create posts
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

@section('script')
<script>
    const tittle = document.querySelector('#tittle');
    const slug = document.querySelector('#slug');

    tittle.addEventListener('change', function() {
        fetch('/admin/dashboard/blogs/checkSlug?tittle=' + tittle.value)
        .then(response => response.json())
        .then(data => {
            slug.value = data.slug;
        });
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('#img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection