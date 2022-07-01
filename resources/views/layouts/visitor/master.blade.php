<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Lestari Jendela')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/assets/img/logo.png" />
    <link href="/assets/dashboard/css/sb-admin-2.css" rel="stylesheet">
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

<body class="">
    <div class="preloader bg0 row justify-content-center align-items-center">
        <div class="bars"></div>
    </div>
    @include('layouts.visitor.topbar')
    @yield('content')
    @include('layouts.visitor.footer')
</body>

</html>
