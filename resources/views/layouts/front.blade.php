<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vonit Technology</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/styles/responsive.css') }}">

</head>

<body>
    <div class="super_container">
        @include('includes.header')

        @yield('content')
        <!-- Footer -->
        @include('includes.footer')
    </div>
    <script src="{{ asset('theme/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('theme/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('theme/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('theme/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('theme/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
</body>

</html>
