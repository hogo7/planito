<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Planito </title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS  dsfsdfsdf-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel='manifest' href='{{ URL::to('/') }}js/manifest.json'>
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">

    <script src="{{asset('./js/pwabuilder-sw.js')}}"></script>    
    <script src="{{asset('./js/pwabuilder-sw-register.js')}}"></script>  
  
</head>

<body>
    <!--::header part start::-->
   @include('layouts.nav')
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_partl">
        <div class="container">
        <div class="row d-inline-block h-25" >
        <div class="col-12 d-inline-block h-100"></div>
    </div>
        @yield('content')        
        </div>
    </section>
    <!-- banner part start-->

    <!-- footer part start-->
    @include('layouts.footer')
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('js')
</body>

</html>