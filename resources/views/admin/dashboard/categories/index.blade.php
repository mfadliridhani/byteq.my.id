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
                        Categories
                    </h4>

                {{-- Other --}}
                <div class="row">
                    <div class="col-md-4 col-lg-4" id="add_">
                        <div class="card mb-4">
                            <h5 class="card-header">Add new categories</h5>
                            <div class="card-body">
                                <form action="/admin/dashboard/categories/" method="POST">
                                    @method('post')
                                    @csrf
                                    <div>
                                        <label
                                            for="name"
                                            class="form-label"
                                            >Category name</label
                                        />
                                        <input
                                            class="form-control @error('name') is-invalid @enderror"
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{ old('name') }}"
                                            {{-- placeholder="Example name" --}}
                                            autofocus
                                            required
                                        />
                                        
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        
                                        <label
                                            for="slug"
                                            class="form-label mt-2"
                                            >Category slug</label
                                        />
                                        
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="slug"
                                            name="slug"
                                            value="{{ old('slug') }}"
                                            {{-- placeholder="Example slug" --}}
                                            readonly
                                            required
                                        />

                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary mt-3">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 d-none" id="edit_">
                        <div class="card mb-4">
                            <h5 class="card-header">Edit category</h5>
                            <div class="card-body">
                                <form action="/admin/dashboard/categories/" method="POST" id="edit_form">
                                    @method('put')
                                    @csrf
                                    <div>
                                        <label
                                            for="name"
                                            class="form-label">
                                            Category</label
                                        />

                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name_edit"
                                            name="name"
                                            placeholder="John Doe"
                                            required
                                        />

                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                        <label
                                            for="slug"
                                            class="form-label mt-2"
                                            >Category slug</label
                                        />
                                        
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="slug_edit"
                                            name="slug"
                                            value="{{ old('slug') }}"
                                            {{-- placeholder="Example slug" --}}
                                            readonly
                                            required
                                        />

                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                        <div class="text-end">
                                            <button type="button" class="btn btn-warning mt-3" onclick="cancel_()">Cancel</button>
                                            <button type="submit" class="btn btn-primary mt-3">Edit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-lg-8">
                        <div class="card">
                            <h5 class="card-header">Posts table</h5>

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
                                            <th>Category name</th>
                                            <th>Slug</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
        
                                            <td>
                                                {{ $category->name }}
                                            </td>
                                            <td>
                                                {{ $category->slug }}
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
                                                        onclick="edit_({{ $category->id }})"
                                                        >
                                                        <i class="bi bi-pencil-square"></i>
                                                        Edit</a
                                                        >
                                                        <form action="/admin/dashboard/categories/{{ $category->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                            @csrf
                                                            @method('delete')
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
                                                        {{ $categories->links() }}
                                                    </ul>
                                                </nav> --}}
                                                <!--/ Basic Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                {{--/ Other --}}

                <!-- Basic Bootstrap Table -->
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

@section('script')
<script>
    function delete_(id) {
            // sweet alert
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                buttons: ["Batal", "Hapus"],
            }).then((result) => {
                if (result) {
                    // ajax request
                    $.ajax({
                        url: '/admin/dashboard/categories/' + id,
                        type: 'delete',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            swal("Data berhasil dihapus!", {
                                icon: "success",
                            }).then((result) => {
                                if (result) {
                                    location.reload();
                                }
                            });
                        },
                        error: function(error) {
                            swal("Data gagal dihapus!", {
                                icon: "error",
                            }).then((result) => {
                                if (result) {
                                    location.reload();
                                }
                            });
                        }
                    });
                }
            });
        }

        function edit_(id) {
            // ajax request
            $.ajax({
                url: '/admin/dashboard/categories/' + id + '/edit',
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    $('#name_edit').val(response.name);
                    $('#slug_edit').val(response.slug);
                    $('#edit_form').attr('action', '/admin/dashboard/categories/' + id);
                    $('#add_').addClass('d-none');
                    $('#edit_').removeClass('d-none');
                },
                error: function(error) {
                    swal("Terjadi kesalahan!", {
                        icon: "error",
                    }).then((result) => {
                        if (result) {
                            location.reload();
                        }
                    });
                }
            });
        }

        function cancel_() {
            $('#add_').removeClass('d-none');
            $('#edit_').addClass('d-none');
        }

    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    
    name.addEventListener('change', function() {
        fetch('/admin/dashboard/categories/checkSlugCategory?name=' + name.value)
        .then(response => response.json())
        .then(data => {
            slug.value = data.slug;
        });
    });
    
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
    
    const name_edit = document.querySelector('#name_edit');
    const slug_edit = document.querySelector('#slug_edit');

    name_edit.addEventListener('change', function() {
        fetch('/admin/dashboard/categories/checkSlugEditCategory?name_edit=' + name_edit.value)
        .then(response => response.json())
        .then(data => {
            slug_edit.value = data.slug;
        });
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection