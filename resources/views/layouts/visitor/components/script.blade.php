<script src="/assets/visitor/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="/assets/visitor/vendor/animsition/js/animsition.min.js"></script>
<script src="/assets/visitor/vendor/bootstrap/js/popper.js"></script>
<script src="/assets/visitor/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/visitor/vendor/slick/slick.min.js"></script>
<script src="/assets/visitor/js/slick-custom.js"></script>
<script src="/assets/visitor/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script src="/assets/visitor/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/assets/visitor/vendor/sweetalert/sweetalert.min.js"></script>
<script src="/assets/visitor/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
</script>
<script src="/assets/visitor/js/main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/62c5122ab0d10b6f3e7b019f/1g78stuee';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
@stack('scripts')
