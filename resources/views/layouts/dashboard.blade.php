
<!DOCTYPE html>
<html class=no-js lang="en">

<head>
    <!-- Page Title -->
    <title>Chhattisgarh Club Raipur | @yield('title')</title>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/img/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/dripicons.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/default.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/responsive.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/fontawesome/css/all.min.css">
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        .single-services .icon li {
            display: inline-block;
            margin-right: 15px;
        }

        .headertext { 
        padding: 7px; 
        background-color: #fff; 
        color: #626060; 
        font-weight: bold; 
        } 

        .headertext { 
        position: absolute;
        /* top: 0; */
        left: 0;
        z-index: 10;
        padding: 20px 40px;
        border-right: 6px solid #fff;
        background: #644222;
        color: #fff;
        text-shadow: 1px 1px #016117;
        font-size: 19px;
        } 

        marquee { 
            line-height: 3.7; 
        } 

        marquee p { 
        margin: 0; 

        } 
        .float{
        position: fixed;
        width: 154px;
        height: 200px;
        bottom: 100px;
        left: 35px;
        z-index: 99999999999999999;
        }

        .my-float{
            margin-top:16px;
            border-radius: 23px;
        }
    </style>
</head>
<body id="main">
    <!-- Include the header section -->
    @include('layouts.header')

    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Include the footer section -->
    @include('layouts.footer')

      <!-- scripts js -->
      <script src="{{ url('/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="{{ url('/') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="{{ url('/') }}/assets/js/popper.min.js"></script>
      <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
      <script src="{{ url('/') }}/assets/js/slick.min.js"></script>
      <script src="{{ url('/') }}/assets/js/ajax-form.js"></script>
      <script src="{{ url('/') }}/assets/js/paroller.js"></script>
      <script src="{{ url('/') }}/assets/js/wow.min.js"></script>
      <script src="{{ url('/') }}/assets/js/js_isotope.pkgd.min.js"></script>
      <script src="{{ url('/') }}/assets/js/imagesloaded.min.js"></script>
      <script src="{{ url('/') }}/assets/js/parallax.min.js"></script>
      <script src="{{ url('/') }}/assets/js/jquery.waypoints.min.js"></script>
      <script src="{{ url('/') }}/assets/js/jquery.counterup.min.js"></script>
      <script src="{{ url('/') }}/assets/js/jquery.scrollUp.min.js"></script>
      <script src="{{ url('/') }}/assets/js/jquery.meanmenu.min.js"></script>
      <script src="{{ url('/') }}/assets/js/parallax-scroll.js"></script>
      <script src="{{ url('/') }}/assets/js/jquery.magnific-popup.min.js"></script>
      <script src="{{ url('/') }}/assets/js/element-in-view.js"></script>
      <script src="{{ url('/') }}/assets/js/main.js"></script>
</body>
</html>
