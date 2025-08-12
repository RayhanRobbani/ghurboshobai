<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <script>
        const setTheme = (theme) => {
            theme ??= localStorage.theme || "light";
            document.documentElement.dataset.theme = theme;
            localStorage.theme = theme;
        };
        setTheme();
    </script>
    <meta logo="/assets/images/logo/logo.png">
    <meta white-logo="/assets/images/logo/logo-white.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Travello - Multipurpose travel and tour booking.These template is suitable for  travel agency , tour, travel website , tour operator , tourism , booking  trip or adventure website. ">
    <meta name="keywords"
        content="travel, trip booking,tour, hotel, tour guide, tourism, blog, flight, travel agency, tourism agency, accommodation, tour website">
    <meta name="author" content="inittheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ghurboshobai.com">
    <meta property="og:site_name" content="Travello">
    <meta property="og:url" content="https://inittheme.com">
    <meta property="og:image" content="https://inittheme.com/images/selfie.jpg">
    <meta property="og:description" content="Ghurboshobai.com, multipurpose template">
    <meta name="twitter:title" content="Ghurboshobai.com">
    <meta name="twitter:description" content="Ghurboshobai.com, multipurpose template">
    <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
    <meta name="twitter:card" content="summary">
    <!-- Google site verification -->
    <meta name="google-site-verification" content="...">
    <meta name="facebook-domain-verification" content="...">
    <meta name="csrf-token" content="...">
    <meta name="currency" content="$">
    <!-- Title -->
    <title>@yield('title')Ghurboshobai.com </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="/assets/images/icon/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-5.3.0.min.css">
    <!-- Fonts & icon -->
    <link rel="stylesheet" type="text/css" href="/assets/css/remixicon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fonts-icon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="/assets/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main-style.css">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="/assets/css/rtl.css"> -->
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="/assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="/assets/js/main.js"></script>
</body>

</html>
