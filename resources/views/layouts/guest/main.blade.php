<!DOCTYPE html>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-wide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../admin/assets/"
    data-template="front-pages"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>{{ $tittle }}</title>

        <meta
            name="description"
            content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!"
        />
        <meta
            name="keywords"
            content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"
        />
        
        <!-- Canonical SEO -->
        <link
            rel="canonical"
            href="{{ asset('https://themeselection.com/item/sneat-bootstrap-html-admin-template/') }}"
        />

        <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js",
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-5DDHKGP");
        </script>
        <!-- End Google Tag Manager -->

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('../admin/assets/img/favicon/favicon.ico') }}"
        />

        <!-- Fonts -->
        <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}" />
        <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin />
        <link
            href="{{ asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}"
            rel="stylesheet"
        />

        <link
            href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="{{ asset('../admin/assets/vendor/fonts/boxicons.css') }}" />

        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/rtl/core.css') }}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/rtl/theme-default.css') }}"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="{{ asset('../admin/assets/css/demo.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/pages/front-page.css') }}"
        />
        <!-- Vendors CSS -->

        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/libs/nouislider/nouislider.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('../admin/assets/vendor/libs/swiper/swiper.css') }}" />

        <!-- Page CSS -->

        <link
            rel="stylesheet"
            href="{{ asset('../admin/assets/vendor/css/pages/front-page-landing.css') }}"
        />

        <!-- Helpers -->
        <script src="{{ asset('../admin/assets/vendor/js/helpers.js') }}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{ asset('../admin/assets/vendor/js/template-customizer.js') }}"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('../admin/assets/js/front-config.js') }}"></script>
    </head>

    <body>
        <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <script src="{{ asset('../admin/assets/vendor/js/dropdown-hover.js') }}"></script>
        <script src="{{ asset('../admin/assets/vendor/js/mega-dropdown.js') }}"></script>

        @include('partials.guest.navbar')

        @yield('content')

        @include('partials.guest.footer')

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('../admin/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('../admin/assets/vendor/js/bootstrap.js') }}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('../admin/assets/vendor/libs/nouislider/nouislider.js') }}"></script>
        <script src="{{ asset('../admin/assets/vendor/libs/swiper/swiper.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('../admin/assets/js/front-main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('../admin/assets/js/front-page-landing.js') }}"></script>
    </body>
</html>

<!-- beautify ignore:end -->
