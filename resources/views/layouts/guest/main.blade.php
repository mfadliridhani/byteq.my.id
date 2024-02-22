<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $tittle }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('guest/assets/favicon_io/favicon.ico') }}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}" />
        <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin />
        <link href="{{ asset('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap') }}" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{ asset('guest/css/styles.css') }} rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            
            @include('partials.guest.navbar')
            
            @yield('content')

        </main>
        
            @include('partials.guest.footer')
            
        <!-- Bootstrap core JS-->
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('guest/js/scripts.js') }}"></script>
    </body>
</html>
