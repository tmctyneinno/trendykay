<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 12:35:10 GMT -->
<head> 
    <meta charset="utf-8">
    <title>Trendy Kay Collections</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/'.$settings->logo)}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/maind134.css?v=3.4')}}">
     <!--leaflet map-->
    <link rel="stylesheet" href="../../../../unpkg.com/leaflet%401.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="../../../../unpkg.com/leaflet%401.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@yield('styles')

</head>

<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    
    <!-- Vendor JS-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('assets/js/maind134.js?v=3.4')}}"></script>
    <script src="{{ asset('assets/js/shopd134.js?v=3.4')}}"></script>
    <script type="text/javascript">

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};


toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
         
     </script>

    @yield('scripts')
</body>
</html>
