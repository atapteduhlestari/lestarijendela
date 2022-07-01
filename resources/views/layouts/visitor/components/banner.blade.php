    <!-- Banner -->
    <div class="sec-banner bg0 p-t-50">
        <div class="container">
            {{-- <div class="p-b-10 mb-5">
                <h3 class="ltext-103 text-center cl5">
                    PREMIUM WINDOWS & DOORS SYSTEM
                </h3>
            </div> --}}
            <div class="row">
                <div class="col-md-6 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img loading="lazy" class="img-responsive h-350" src="/assets/visitor/images/block/head-1.jpg"
                            alt="IMG-BANNER">

                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-106 trans-04 p-b-8">
                                    uPVC
                                </span>

                                {{-- <span class="block1-info stext-102 trans-04">
                                    WINDOWS & DOORS
                                </span> --}}
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Learn More
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img loading="lazy" class="img-responsive h-350" src="/assets/visitor/images/block/head-2.jpg"
                            alt="IMG-BANNER">
                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-106 trans-04 p-b-8">
                                    ALUMINIUM
                                </span>

                                {{-- <span class="block1-info stext-102 trans-04">
                                    WINDOWS & DOORS
                                </span> --}}
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-106 cl0 trans-09">
                                    Learn More
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-b-10 p-t-10">
                <h3 class="ltext-101 cl5">
                    TYPES
                </h3>
            </div>
            <div class="row">
                @foreach ($banners as $banner)
                    <div class="col-md-6 col-lg-4 p-b-30">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img loading="lazy" class="img-responsive h-250" src="{{ $banner->takeImage }}"
                                alt="IMG-BANNER">

                            <a href="product.html"
                                class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        {{ $banner->heading }}
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Windows & Doors
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Premium Quality
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.visitor.components.quotes')
