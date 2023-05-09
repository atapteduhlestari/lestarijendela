<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G85CG5J76P"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-G85CG5J76P');
    </script>
    <title>@yield('title', 'Lestari Jendela - Premium Windows & Doors')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="@yield('description', metaDesc())">
    <meta name="keywords" content="Window, Door, uPVC, Aluminium, Kusen, Jendela, Pintu">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="author" content="IT-HO">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta property="og:url" content="https://lestarijendela.com/">
    <meta property="og:title" content="@yield('title', 'Lestari Jendela - Premium Windows and Doors')">
    <meta property="og:description" content="@yield('description', metaDesc())">
    <meta property="og:image" content="/assets/img/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://lestarijendela.com/">
    <meta property="twitter:title" content="@yield('title', 'Lestari Jendela - Premium Windows & Doors')">
    <meta property="twitter:description" content="@yield('description', metaDesc())">
    <meta property="twitter:image" content="/assets/img/logo.png">

    <link rel="canonical" href="https://lestarijendela.com/">
    <link rel=“alternate” hreflang="x-default" href="https://lestarijendela.com/" />
    <link rel="icon" type="image/png" href="/assets/img/logo.png" />

    <link rel="stylesheet" type="text/css" href="/assets/visitor/css/sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/perfect-scrollbar/perfect-scrollbar.css">
    @stack('styles')
    <link rel="stylesheet" type="text/css" href="/assets/visitor/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/css/main.css">
</head>

<body class="bg3">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0"
        nonce="NSaNI7l8"></script>
    <div class="preloader row bg-gradient justify-content-center align-items-center no-gutters">

        <div class="d-flex">
            <div class="loaderLeft"></div>
            <div class="loaderRight"></div>
        </div>
        <div class="bars">
        </div>
    </div>
    @include('layouts.visitor.topbar')
    @yield('content')
    @include('layouts.visitor.footer')
</body>

</html>
