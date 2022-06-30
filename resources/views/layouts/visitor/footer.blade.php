<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0">
                    GET IN TOUCH
                </h4>
                <img class="img-responsive" height="75" src="/assets/img/logo.png" alt="">
                <p class="stext-107 cl7">
                    Any questions? Let us know in <br>
                    Jababeka 1, Jl. Jababeka XVIIB Unit U20A
                    Harja Mekar, Cikarang Utara, Bekasi, 13450 Indonesia.
                </p>
                <table class="table-borderless stext-107 cl7" width="100%">
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td>:&nbsp;</td>
                        <td>(021) 8646-506</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope-open"></i></td>
                        <td>:&nbsp;</td>
                        <td>info@lestarijendela.com</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-chrome"></i></td>
                        <td>:&nbsp;</td>
                        <td>
                            <a class=" cl1 hov-cl0" href="www.lestarijendela.com">www.lestarijendela.com</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    NAVIGATE
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            PRODUCT
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            UPVC
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            ALUMINIUM
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            GALLERY
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    INFO
                </h4>

                <li class="p-b-10">
                    <a href="#" class="stext-112 cl7 hov-cl1 trans-04">
                        <i class="zmdi zmdi-circle"></i>
                        ABOUT
                    </a>
                </li>

                <li class="p-b-10">
                    <a href="#" class="stext-112 cl7 hov-cl1 trans-04">
                        <i class="zmdi zmdi-circle"></i>
                        FAQs
                    </a>
                </li>

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Newsletter
                </h4>

                <form>
                    <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                            placeholder="email@example.com">
                        <div class="focus-input1 trans-04"></div>
                    </div>

                    <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-t-40">
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;{{ now()->format('Y') }}
                All rights reserved
            </p>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div>
@include('layouts.visitor.components.script')
