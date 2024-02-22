<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('../admin/assets') }}"
    data-template="vertical-menu-template-free"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>{{ $tittle }}</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('../admin/admin/assets/img/favicon/favicon.ico') }}"
        />

        <!-- Fonts -->
        <link
            rel="preconnect"
            href="{{ asset('https://fonts.googleapis.com') }}"
        />
        <link
            rel="preconnect"
            href="{{ asset('https://fonts.gstatic.com') }}"
            crossorigin
        />
        <link
            href="{{ asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}"
            rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link
            href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/fonts/boxicons.css') }}"
        />

        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/core.css') }}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/theme-default.css') }}"
            class="template-customizer-theme-css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/css/demo.css') }}"
        />

        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
        />

        <!-- Page CSS -->
        <!-- Page -->
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/pages/page-auth.css') }}"
        />
        <!-- Helpers -->
        <script src="{{ asset('../admin/assets/vendor/js/helpers.js') }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('../admin/assets/js/config.js') }}"></script>

        {{-- Trix editor --}}
        <link
            rel="stylesheet"
            type="text/css"
            href="https://unpkg.com/trix@2.0.8/dist/trix.css"
        />
        <script
            type="text/javascript"
            src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"
        ></script>

        <style>
          trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
          }
        </style>
    </head>

    <body>
        <!-- Content -->

        @yield('content')

        <!-- Core JS -->
        <!-- build:js admin/assets/vendor/js/core.js -->
        <script src="{{ asset('../admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('../admin/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('../admin/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('../admin/assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="{{ asset('../admin/assets/js/main.js') }}"></script>

        <!-- Page JS -->

        <!-- Place this tag in your head or just before your close body tag. -->
        <script
            async
            defer
            src="{{ asset('https://buttons.github.io/buttons.js') }}"
        >
        </script>
        @yield('script')
    </body>
</html>
