    <!-- Banner -->
    <div class="sec-banner bg0 p-t-50">
        <div class="container">
            {{-- <div class="p-b-10 mb-5">
                <h3 class="ltext-103 text-center cl5">
                    PREMIUM WINDOWS & DOORS SYSTEM
                </h3>
            </div> --}}
            <div class="row">
                @forelse ($productCategories as $pc)
                    <div class="col-md-6 p-b-30 m-lr-auto bannerTop">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img data-src="{{ $pc->url ? $pc->takeImage : emptyImage() }}" loading="lazy"
                                class="img-responsive h-350 lazy" src="{{ $pc->url ? $pc->takeImage : emptyImage() }}"
                                alt="{{ $pc->slug }}">

                            <a href="/home/product/category/{{ $pc->slug }}"
                                class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-106 trans-04 p-b-8">
                                        {{ $pc->title }}
                                    </span>

                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Learn More
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
            <div class="p-b-10 p-t-10">
                <h3 class="ltext-101 cl5">
                    TYPES
                </h3>
            </div>
            <div class="row">
                @foreach ($productSubCategories as $psc)
                    <div class="col-md-6 col-lg-4 p-b-30 bannerBottom">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img data-src="{{ $psc->url ? $psc->takeImage : emptyImage() }}" loading="lazy"
                                class="img-responsive h-250 lazy" src="{{ $psc->url ? $psc->takeImage : emptyImage() }}"
                                alt="{{ $psc->slug }}">

                            <a href="/home/product/sub-category/{{ $psc->slug }}"
                                class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        {{ $psc->title }}
                                    </span>

                                    {{-- <span class="block1-info stext-102 trans-04">
                                        Customizable
                                    </span> --}}
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
