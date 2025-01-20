<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <title>Remons - Booking Rental HTML Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
        <!--<< DatePicker.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/datepickerboot.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <!--<< All JS Plugins >>-->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset('assets/js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset('assets/js/jquery.waypoints.js')}}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
        <!--<< Datepicker Js >>-->
        <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--<< GSAP Animation Js >>-->
        <script src="{{ asset('assets/js/animation.js')}}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset('assets/js/main.js')}}"></script>

        <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    
        <!-- App js-->
        <script src="{{ asset('assets/js/app.js')}}"></script>
    </body>
</html>
