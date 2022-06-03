<!-- Bootstrap core JavaScript-->
<script src="/assets/dashboard/vendor/jquery/jquery.min.js"></script>
<script src="/assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/assets/dashboard/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
{{-- <script src="/assets/dashboard/vendor/chart.js/Chart.min.js"></script> --}}

<!-- Page level custom scripts -->
{{-- <script src="/assets/dashboard/js/demo/chart-area-demo.js"></script>
<script src="/assets/dashboard/js/demo/chart-pie-demo.js"></script> --}}
@stack('scripts')
@if (session('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: `<?= session('success') ?>`,
        })
    </script>
@endif

@if (session('warning'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-left',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'warning',
            title: `<?= session('warning') ?>`,
        })
    </script>
@endif

@if ($errors->any())
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-left',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'error',
            title: '<strong>Mohon periksa kembali form input anda</strong>',
        });
    </script>
@endif
