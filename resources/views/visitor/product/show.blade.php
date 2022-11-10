@extends('layouts.visitor.master')
@section('title', 'Product | Lestari Jendela | ' . $product->title)
@section('content')

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/node_modules" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="/home/product" class="stext-109 cl8 hov-cl1 trans-04">
                Product
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $product->title }}
            </span>
        </div>
    </div>


    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            @if ($product->images->count() > 0)
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                            @endif
                            <div class="slick3 gallery-lb">
                                @if ($product->images->isEmpty())
                                    <img loading="lazy" data-src="/assets/img/no-image.png" src="/assets/img/no-image.png"
                                        class="img-responsive h-350 rounded lazy" alt="IMG-PRODUCT">
                                @endif
                                @foreach ($product->images as $image)
                                    <div class="item-slick3" data-thumb="{{ '/uploads/' . $image->url }}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img loading="lazy" data-src="{{ '/uploads/' . $image->url }}"
                                                src="{{ '/uploads/' . $image->url }}"
                                                class="img-responsive h-350 rounded lazy" alt="{{ $product->slug }}">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                href="{{ '/uploads/' . $image->url }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 p-b-10">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <div class="d-flex">
                            <span class="flex-grow-1">
                                <a class="hov-cl1 trans-04 stext-104 cl4 "
                                    href="/home/product/category/{{ $product->category->slug }}">
                                    <strong>{{ $product->category->title }}</strong>
                                </a>
                            </span>

                            <span class="stext-107 cl7">
                                {{ $product->subCategory->title }}
                            </span>
                        </div>
                        <h4 class="mtext-105 cl2 js-name-detail p-b-5">
                            {{ $product->title }}
                        </h4>

                        <p class="stext-102 cl3 p-t-23">
                            {!! $product->deskripsi ??
                                'uPVC stands for unplasticised polyvinyl chloride, it is a strong and low-maintenance but lightweight plastic building material.' !!}
                        </p>

                    </div>
                </div>
            </div>
            <div class="bor10 col-md-10 mx-auto m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#spesification" role="tab">
                                Spesification
                            </a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#downloads" role="tab">Download</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="spesification" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <p class="stext-102 cl6">
                                    {!! $product->spesifikasi !!}
                                </p>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="downloads" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <table class="table-borderless table-sm">
                                            @forelse ($product->documents as $document)
                                                <tr>
                                                    <th>Downloads {{ $loop->iteration }}</th>
                                                    <td>
                                                        <a href="/home/product/download/{{ $document->id }}">
                                                            <i class="zmdi zmdi-download"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Related Products -->
    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center">
                    Related Products
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @forelse ($product->relatedProduct($product->category_id, $product->id) as $related)
                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img loading="lazy" data-src="{{ $related->firstImage }}"
                                        src="{{ $related->firstImage }}" class="img-responsive h-200 lazy"
                                        alt="IMG-PRODUCT">

                                    <a href="/home/product/{{ $related->slug }}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        See Detail
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <span class="stext-104 cl4 trans-04 js-name-b2 p-b-6">
                                            {{ $related->category->title }}
                                        </span>

                                        <a href="/home/product/{{ $related->slug }}" class="stext-105 cl3 hov-cl1">
                                            {{ $related->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
@endpush
