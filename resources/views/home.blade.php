@extends('layouts.visitor.master')
@section('title', 'Homepage | Lestari Jendela')
@section('content')

    {{-- Components --}}
    @include('layouts.visitor.components.slider', $sliders)
    @include('layouts.visitor.components.banner', [
        'banners' => $banners,
        'productCategories' => $productCategories,
        'productSubCategories' => $productSubCategories,
    ])

    <!-- Product -->
    <section class="sec-product bg3 p-t-150 p-b-150">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-105 cl0 txt-center respon1">
                    Product Overview
                </h3>
            </div>
            <div class="row isotope-grid">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-4 p-b-35 isotope-item g">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img loading="lazy" data-src="{{ $product->firstImage }}" src="{{ $product->firstImage }}"
                                    class="img-responsive h-250 lazy" alt="{{ $product->slug }}">

                                <a href="/home/product/{{ $product->slug }}"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    See Detail
                                </a>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <span class="stext-104 cl7 trans-04 js-name-b2 p-b-6">
                                        {{ $product->category->title }}
                                    </span>

                                    <a href="/home/product/{{ $product->slug }}" class="stext-105 cl0 hov-cl1">
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
    <section class="sec-blog bg0 p-t-150 p-b-150">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    Blogs
                </h3>
            </div>

            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-sm-6 col-md-4 p-b-40 blogHome">
                        <div class="blog-item">
                            <div class="hov-img0">
                                <a href="/home/blog/{{ $post->slug }}">
                                    <img loading="lazy" data-src="{{ $post->firstImage }}" src="{{ $post->firstImage }}"
                                        class="img-responsive h-250 lazy" alt="{{ $post->slug }}">
                                </a>
                            </div>

                            <div class="p-t-5">
                                <div class="stext-107 flex-w p-b-14">
                                    {{-- <span class="m-r-3">
                                        <span class="cl0">
                                            By
                                        </span>

                                        <span class="cl1">
                                            {{ auth()->user()->name ?? 'Roofie' }}
                                        </span>
                                    </span> --}}

                                    <span>
                                        <span class="cl4">
                                            {{ $post->created_at->format('F, Y') }}
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="/home/blog/{{ $post->slug }}" class="mtext-101 cl2 hov-cl1 trans-04">
                                        {{ $post->title }}
                                    </a>
                                </h4>

                                <p class="stext-108 cl10">
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
@push('scripts')
    <script src="/assets/visitor/js/home.js"></script>
@endpush
