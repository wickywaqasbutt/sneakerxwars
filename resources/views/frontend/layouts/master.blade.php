<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/mainmenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/responsive.css')}}">
    <script src="{{asset('frontend-assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    @yield('styling')
  </head>
  <body>
      @include('frontend.includes.header')
    	@yield('content')
    @include('frontend.includes.footer')
    <script src="{{asset('frontend-assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend-assets/js/jquery.mainmenu.js')}}"></script>
    <script src="{{asset('frontend-assets/js/ajax-email.js')}}"></script>
    <script src="{{asset('frontend-assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend-assets/js/main.js')}}"></script>

    @yield('script')
  </body>
</html>
