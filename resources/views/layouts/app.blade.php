<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lestari Jendela - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/dashboard/css/sb-admin-2.css" rel="stylesheet">
    <style>
        .bg-login-image {
            background: url("/assets/dashboard/img/login.jpg");
            background-position: center;
            background-size: cover;
        }

        .content-login {
            position: absolute;
            margin: 0;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .bg-login {
            background: #134E5E;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #71B280, #134E5E);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #71B280, #134E5E);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

    </style>
</head>

<body class="bg-login">
    @yield('content')
    @stack('scripts')
</body>

</html>
