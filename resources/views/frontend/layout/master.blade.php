<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <!--- Keywords -->
    <meta name="keywords" content="@yield('keywords')">   
     
     <meta name="description" content="@yield('description')">
     <meta name="robots" content="index, follow" />
    <meta http-equiv="refresh" content="30">
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-121860406-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{!! asset('assets/images/favicon.png') !!}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{!! asset('assets/scripts/bootstrap/css/bootstrap.css') !!}">
    
    <!-- Include CSS globally -->
    <link rel="stylesheet" href="{!! asset('assets/scripts/font-awesome/css/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/content-box.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/image-box.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/animations.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/scripts/flexslider/flexslider.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/skin.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">
    
    @stack('css')

    @php $auth = auth()->check() @endphp

</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>


    <!--  Header    -->
    @if( $auth )  @include('frontend.layout.advocate-header') 
    @else         @include('frontend.layout.header')   @endif
    
    <!-- Section Area   -->
    @yield('content')

    <!-- Footer Area end-->
    @if( $auth )  @include('frontend.layout.advocate-footer') 
    @else         @include('frontend.layout.footer')   @endif
    
    <!-- scroll up -->
    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
    <!-- Include Javascripts files globally -->
    <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/script.js') }}"></script>
    <script src="{{ asset('assets/scripts/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/scripts/jquery.progress-counter.js') }}"></script>
    <script src="{{ asset('assets/scripts/smooth.scroll.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/public.js') }}"></script>    
    <!-- Global Variables -->
    <script type="text/javascript">
        const url = "{{ url('/') }}";
    </script>
    @stack('scripts')
    <!-- End of js include -->
</body>

</html>
