<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>پلنیتنو</title>

    <!-- Scripts -->

    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Changa:200|Harmattan|Lalezar|Lemonada:300&display=swap" rel="stylesheet">

    <script  type="text/css" src="{{ asset('js/app.js') }}" ></script>

    <script type="text/javascript" src="https://kit.fontawesome.com/d4f4945440.js"></script>

  <script defer src="{{asset('css/fs/js/all.js')}}"></script>

    <link type="text/css" rel="stylesheet" href="{{asset ('css/fs/css/all.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset ('css/style2.css')}}">

    <link type="text/css"   href="{{asset ('css/animate.css')}}" rel="stylesheet">

    <link type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!--  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->


</head>
<body>
@include('layouts.header')



@include('layouts.sidenav')
<main>
@yield('content')
</main>
       
        
</body>


<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>              <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
        <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"  ></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="{{asset('./js/appjs.js')}}"></script>
    <!-- <script src="{{asset('./js/bootstrap-flash-alert.min.js')}}"></script> -->
    <!-- <script src="{{asset('./js/jquerymy-1.2.14.min.js')}}"></script>    -->
    <!-- <script src="{{asset('./js/bootstrap.bundle.js')}}"></script> -->
    <!-- <script src="{{asset('./js/dashboard.js')}}"></script> -->
    @yield('js')

</html>
