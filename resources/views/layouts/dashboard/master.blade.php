<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="IT-HO">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="/assets/img/logo.png">
    <title>@yield('title', 'Jendela Lestari')</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/assets/dashboard/css/styles.css" rel="stylesheet">
    @stack('styles')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.dashboard.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.dashboard.navbar')
                @yield('content')
            </div> <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.dashboard.footer')

        </div> <!-- End of Content Wrapper -->

    </div> <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Sign Out" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <form class="my-2" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-danger btn-block" type="submit"><i
                                class="fas fa-sign-out-alt"></i> Yes, let me out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.dashboard.components.script')
</body>

</html>
