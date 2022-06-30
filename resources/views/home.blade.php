@extends('layouts.visitor.master')
@section('title', 'Homepage | Lestari Jendela')
@section('content')

    {{-- Components --}}
    @include('layouts.visitor.components.slider', $sliders)
    @include('layouts.visitor.components.banner')

    <!-- Product -->
    <section class="bg0 p-t-23 p-b-50">
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
                    <div class="col-sm-6 col-md-4 col-lg-4 p-b-35 isotope-item">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ $product->firstImage }}" class="img-responsive h-250" alt="IMG-PRODUCT">

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
            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-10">
                <a title="Load All Product" href="/home/product"
                    class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="sec-blog bg0 p-t-100 p-b-90">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    Blogs
                </h3>
            </div>

            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">
                                <a href="/home/blog/{{ $post->slug }}">
                                    <img loading="lazy" src="{{ $post->firstImage }}" class="img-responsive h-250"
                                        alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="p-t-15">
                                <div class="stext-107 flex-w p-b-14">
                                    <span class="m-r-3">
                                        <span class="cl4">
                                            By
                                        </span>

                                        <span class="cl5">
                                            {{ auth()->user()->name ?? 'Roofie' }}
                                        </span>
                                    </span>

                                    <span>
                                        <span class="cl4">
                                            on
                                        </span>

                                        <span class="cl5">
                                            {{ $post->created_at->format('F d, Y') }}
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="/home/blog/{{ $post->slug }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                        {{ $post->title }}
                                    </a>
                                </h4>

                                <p class="stext-108 cl6">
                                    {{ limitString(strip_tags($post->deskripsi), 125, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
@endsection
