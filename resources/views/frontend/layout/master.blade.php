<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KStudio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset("frontend/img/favicon.png") }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset("frontend/css/font-icons.css") }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset("frontend/css/plugins.css") }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset("frontend/css/style.css") }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset("frontend/css/responsive.css") }}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <!-- HEADER AREA START (header-5) -->    
        @include("frontend.includes.header")
        <!-- HEADER AREA START (header-5) -->

        <!-- Utilize Mobile Menu Start -->
        @include("frontend.includes.mobile_menu")
        <!-- Utilize Mobile Menu End -->

        <!-- CONTENT AREA START --> 
        @yield('content')
        <!-- CONTENT AREA END -->

        <!-- FOOTER AREA START --> 
        @include("frontend.includes.footer")
        <!-- FOOTER AREA END --> 

    </div>
        <!-- preloader area start -->
        <div class="preloader d-none" id="preloader">
            <div class="preloader-inner">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- All JS Plugins -->
        <script src="{{ asset("frontend/js/plugins.js") }}"></script>
        <!-- Main JS -->
        <script src="{{ asset("frontend/js/main.js") }}"></script>
</body>
</html>