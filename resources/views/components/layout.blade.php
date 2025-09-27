<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ isset($title) ? "$title - Sickle Gene Action Foundation" : "Sickle Gene Action Foundation" }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&amp;family=Montserrat:wght@800&amp;family=Open+Sans:ital,wght@0,400;0,600;1,300&amp;display=swap" rel="stylesheet">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!---::: Vendor CSS :::-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}">
    <!-- Material-design-iconic-font CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/material-design-iconic-font.min.css') }}">



    <!--::: Plugin CSS :::-->
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugin/meanmenu.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugin/animate.css') }}">
    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugin/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugin/owl.carousel.min.css') }}">

    {!! NoCaptcha::renderJs() !!}

    <!---::: Main CSS :::-->
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @yield('head')

</head>
<body>

@include('partials.header')

{{ $slot }}

@include('partials.footer')


<!-- ::::::::::::::All JS Files here :::::::::::::: -->
<!--::: Global Vendor JS :::-->
<!-- Modernizr JS -->

<!-- Modernizr -->
<script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

<!-- jQuery and Bootstrap -->
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('js/plugin/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('js/plugin/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/plugin/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/plugin/ajax-mail.js') }}"></script>
<script src="{{ asset('js/plugin/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/plugin/waypoint.min.js') }}"></script>
<script src="{{ asset('js/plugin/counterup.min.js') }}"></script>
<script src="{{ asset('js/plugin/scrollup.min.js') }}"></script>
<script src="{{ asset('js/plugin/wow.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>

</body>


</html>
