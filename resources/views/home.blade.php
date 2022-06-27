@extends('layouts.visitor.master')
@section('title', 'Homepage | Lestari Jendela')
@section('content')
    @include('layouts.visitor.components.slider', $sliders)
    @include('layouts.visitor.components.banner')

    <!-- Product -->
    <section class="bg0 p-t-23 p-b-130">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Product Overview
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="row isotope-grid">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 product-hover">
                                <img loading="lazy" class="img-responsive img-h-300"
                                    src="{{ $product->firstImage($product) }}" alt="IMG-PRODUCT">
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Esprit Ruffle Shirt
                                    </a>

                                    <span class="stext-105 cl3">
                                        $16.64
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img loading="lazy" class="icon-heart1 dis-block trans-04"
                                            src="/assets/visitor/images/icons/icon-heart-01.png" alt="ICON">
                                        <img loading="lazy" class="icon-heart2 dis-block trans-04 ab-t-l"
                                            src="/assets/visitor/images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="flex-c-m flex-w w-full p-t-38">
                <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                    1
                </a>

                <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    2
                </a>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="sec-blog bg0 p-t-60 p-b-90">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    Our Blogs
                </h3>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 p-b-40">
                    <div class="blog-item">
                        <div class="hov-img0">
                            <a href="blog-detail.html">
                                <img loading="lazy" src="/assets/visitor/images/blog-01.jpg" alt="IMG-BLOG">
                            </a>
                        </div>

                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">
                                <span class="m-r-3">
                                    <span class="cl4">
                                        By
                                    </span>

                                    <span class="cl5">
                                        Nancy Ward
                                    </span>
                                </span>

                                <span>
                                    <span class="cl4">
                                        on
                                    </span>

                                    <span class="cl5">
                                        July 22, 2017
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
                                    8 Inspiring Ways to Wear Dresses in the Winter
                                </a>
                            </h4>

                            <p class="stext-108 cl6">
                                Duis ut velit gravida nibh bibendum commodo. Suspendisse pellentesque mattis augue id
                                euismod. Interdum et male-suada fames
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-40">
                    <div class="blog-item">
                        <div class="hov-img0">
                            <a href="blog-detail.html">
                                <img loading="lazy" src="/assets/visitor/images/blog-02.jpg" alt="IMG-BLOG">
                            </a>
                        </div>

                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">
                                <span class="m-r-3">
                                    <span class="cl4">
                                        By
                                    </span>

                                    <span class="cl5">
                                        Nancy Ward
                                    </span>
                                </span>

                                <span>
                                    <span class="cl4">
                                        on
                                    </span>

                                    <span class="cl5">
                                        July 18, 2017
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
                                    The Great Big List of Men’s Gifts for the Holidays
                                </a>
                            </h4>

                            <p class="stext-108 cl6">
                                Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
                                in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-40">
                    <div class="blog-item">
                        <div class="hov-img0">
                            <a href="blog-detail.html">
                                <img loading="lazy" src="/assets/visitor/images/blog-03.jpg" alt="IMG-BLOG">
                            </a>
                        </div>

                        <div class="p-t-15">
                            <div class="stext-107 flex-w p-b-14">
                                <span class="m-r-3">
                                    <span class="cl4">
                                        By
                                    </span>

                                    <span class="cl5">
                                        Nancy Ward
                                    </span>
                                </span>

                                <span>
                                    <span class="cl4">
                                        on
                                    </span>

                                    <span class="cl5">
                                        July 2, 2017
                                    </span>
                                </span>
                            </div>

                            <h4 class="p-b-12">
                                <a href="blog-detail.html" class="mtext-101 cl2 hov-cl1 trans-04">
                                    5 Winter-to-Spring Fashion Trends to Try Now
                                </a>
                            </h4>

                            <p class="stext-108 cl6">
                                Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed
                                hendrerit ligula porttitor. Fusce sit amet maximus nunc
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
