<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/visitor/css/main.css">
</head>

<body class="animsition">
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            @include('layouts.visitor.topbar')
            @yield('content')
            @include('layouts.visitor.footer')
        </div>

</body>

</html>
