<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DLFJJ') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/custom/custom.js') }}" defer></script>

    <!-- FANCYBOX -->
    <script src="{{ asset('js/fancybox/jquery.fancybox.min.js') }}" defer></script>
    <!-- OWL CAROUSEL -->
    <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}" defer></script>
    <!-- VIEWPORT -->
    <script src="{{ asset('js/viewport/jquery.viewport.min.js') }}" defer></script>

    <script src="{{ asset('js/charts/jquery.easypiechart.min.js') }}" defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146200859-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146200859-1');
    </script>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom/pages-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- BUSINESS ICONS -->
    <link rel="stylesheet" href="{{ asset('css/business-icons/css/business-icons.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('js/charts/style.css') }}">--}}
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">


</head>
<body class="header-style-1 footer-style-1 page-style-1">

<div id="app"></div>
            @yield('content')
    {{--</div>--}}
    <a class="waves" id="scroll-up"><i class="fas fa-angle-up"></i></a>
    <script src="{{ asset('js/custom/main.js') }}" defer></script>

</body>
</html>
