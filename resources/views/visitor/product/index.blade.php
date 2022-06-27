@extends('layouts.visitor.master')
@section('title', 'Product')
@section('content')

    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-10 align-items-center">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <div class="p-b-10 p-t-10">
                        <h3 class="mtext-105 cl6">
                            All Products
                        </h3>
                    </div>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15 ">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10 stext-106 cl6">
                    <form action="">
                        <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                            <div class="col-md-6 p-r-15 p-b-27">
                                <div class="form-group">
                                    <label for="">Keywords</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 p-r-15 p-b-27">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <input class="form-control" type="text">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row isotope-grid">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ $product->firstImage }}" class="img-responsive h-200" alt="IMG-PRODUCT">

                                <a href="/home/product/{{ $product->slug }}"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    See Detail
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <span class="stext-104 cl4 trans-04 js-name-b2 p-b-6">
                                        {{ $product->category->title }}
                                    </span>

                                    <a href="/home/product/{{ $product->slug }}" class="stext-105 cl3 hov-cl1">
                                        {{ $product->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $products->withQueryString()->links('pagination::custom') }}
            </div>

            {{-- <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div> --}}
        </div>
    </div>
@endsection
